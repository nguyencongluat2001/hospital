@php
use Carbon\Carbon;
@endphp
<div class="messages-chat">
    @php 
        $timeout = '';
    @endphp
    @foreach($message as $key => $data)
    @php 
        $created_at = Carbon::create($data->created_at);
        $now = Carbon::now();
        $timeout = $now->diffInHours($created_at);
    @endphp
    @if(!empty($data->question))
        <div class="message">
            <div class="text">
                <b>{{ $data->phone }}</b>
                <p>{{ $data->question }}</p>
            </div>
        </div>
        <p class="send-time time"> {{ date('H:i d/m/Y', strtotime($data->created_at)) }}</p>
    @elseif(!empty($data->reply))
    <?php 
        if(!empty($data->reply) && array_key_last($message->toArray()) != $key) $checkDateResponse = 0;
        elseif(empty($data->question)) $checkDateResponse = 1;
        elseif(array_key_last($message->toArray()) == $key) $checkDateResponse = 1;
    ?>
        <div class="message">
            <div class="response">
                <div class="text">
                    <b>{{ $data->phone }}</b>
                    <p>{{ $data->reply }}</p>
                </div>
            </div>
        </div>
        <p class="response-time time"> {{ date('H:i d/m/Y', strtotime($data->created_at)) }}</p>
    @endif
    @endforeach
    @if($timeout > 1)
        <div style="position: absolute;left: 50%;">Cuộc trò chuyện đã kết thúc!</div>
    @endif
</div>
@if($timeout <= 1)
<div class="footer-chat">
    <input type="text" class="txt-message" id="txt-message" placeholder="Nhập câu trả lời..."></input>
    <i class="icon send fa fa-paper-plane-o clickable" aria-hidden="true" id="sendMessage"></i>
</div>
@endif