@foreach ($conversations as $conversation)
    <li @if (!empty($isActive) && $conversation->id == $isActive) class="active" @elseif (empty($isActive) && $loop->first) class="active" @endif data-id="{{ $conversation->id }}">
        @php
            $isMe = auth()->id() == $conversation->user_one && auth()->id() == $conversation->user_two;
            $isUserOne = auth()->id() == $conversation->user_one;
        @endphp
        <div class="d-flex bd-highlight">
            <div class="img_cont">
                <img src="{{ Storage::url($isUserOne ? $conversation->userTwo->avatar : $conversation->userOne->avatar) }}" class="rounded-circle user_img">
                <span class="online_icon"></span>
            </div>
            <div class="user_info">
                <span>{{ $isMe ? 'Me' : ($isUserOne ? $conversation->userTwo->name : $conversation->userOne->name) }}</span>
                <p>{{ $isMe ? 'Me' : ($isUserOne ? $conversation->userTwo->name : $conversation->userOne->name) }} is online</p>
            </div>
            <div class="user_noti">
                <span>{{ $conversation->messageNotSeen->first() ? $conversation->messageNotSeen->count() : '' }}</span>
            </div>
        </div>
    </li>
@endforeach