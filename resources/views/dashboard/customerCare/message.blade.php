<div class="messages-chat">
    @foreach($message as $data)
    @if(!empty($data->question))
    <div class="message">
        <div class="text">
            <b>{{ $data->phone }}</b>
            <p>{{ $data->question }}</p>
        </div>
    </div>
    <p class="time"> {{ date('H:i d/m/Y', strtotime($data->created_at)) }}</p>
    @elseif(!empty($data->reply))
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
</div>
<div class="footer-chat">
    <input type="text" class="write-message" placeholder="Nhập câu trả lời..."></input>
    <i class="icon send fa fa-paper-plane-o clickable" aria-hidden="true"></i>
</div>