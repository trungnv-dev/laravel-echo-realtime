<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use App\Events\MessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChatController extends Controller
{
    public function index()
    {
        $conversations = Conversation::with(['userOne', 'userTwo', 'messageNotSeen'])
                ->where(function ($query) {
                    $query->where('user_one', auth()->id())
                        ->orWhere('user_two', auth()->id());
                })
                ->orderBy('updated_at', 'DESC')
                ->get();

        return view('chat.index', compact('conversations'));
    }

    public function getMessages(Request $request)
    {
        $messages = Message::with('user')->where('conversation_id', $request->conversation_id)->orderBy('created_at', 'DESC')->get();

        if ($request->is_seen) {
            Message::where([
                ['conversation_id', $request->conversation_id],
                ['user_id', '!=', auth()->id()]
            ])->update(['is_seen' => 1]);
        }

        $rs = view('chat.messages', ['messages' => $messages])->render();

        return response()->json(['data' => $rs]);
    }

    public function getConversations(Request $request)
    {
        $conversations = Conversation::with(['userOne', 'userTwo', 'messageNotSeen'])
                ->where(function ($query) {
                    $query->where('user_one', auth()->id())
                        ->orWhere('user_two', auth()->id());
                })
                ->orderBy('updated_at', 'DESC')
                ->get();

        $rs = view('chat.conversations', ['conversations' => $conversations, 'isActive' => $request->conversation_id])->render();

        return response()->json(['data' => $rs]);
    }

    public function createMessage(Request $request)
    {
        $message = Message::create($request->all() + ['user_id' => auth()->id()]);
        Conversation::where('id', $message->conversation_id)->update(['updated_at' => now()]);
        broadcast(new MessageCreated($message->load('user')))->toOthers();

        return response()->json();
    }

    public function updateIsSeen(Request $request)
    {
        Message::where('conversation_id', $request->conversation_id)->update(['is_seen' => 1]);

        return response()->json();
    }
}
