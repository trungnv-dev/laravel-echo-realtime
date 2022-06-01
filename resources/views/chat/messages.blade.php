@foreach ($messages as $message)
    @if ($message->user_id != auth()->id())
    <div class="d-flex justify-content-start mb-3">
        <div class="img_cont_msg">
            <img src="{{ Storage::url($message->user->avatar) }}" class="rounded-circle user_img_msg">
        </div>
        <div class="msg_cotainer">
            {{ $message->message }}
            <span class="msg_time">{{ diff_date($message->created_at) }}</span>
        </div>
    </div>
    @else
    <div class="d-flex justify-content-end mb-3">
        <div class="msg_cotainer_send">
            {{ $message->message }}
            <span class="msg_time_send">{{ diff_date($message->created_at) }}</span>
        </div>
        <div class="img_cont_msg">
            <img src="{{ Storage::url($message->user->avatar) }}" class="rounded-circle user_img_msg">
        </div>
    </div>
    @endif
@endforeach