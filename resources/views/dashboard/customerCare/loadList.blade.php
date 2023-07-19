@php
use Carbon\Carbon;
@endphp

<section id="discussions" class="col-md-3">
    @if(isset($datas) && count($datas) > 0)
    @foreach($datas as $data)
        <div class="discussion" id="active_{{$data->phone}}" onclick="JS_CustomerCare.message('{{$data->phone}}')" style="cursor: pointer;">
            <div class="desc-contact">
                <p class="name {{!empty($data->question) && $data->view != 1 ? 'font-bold' : ''}}">{{ $data->phone }}</p>
                <p class="message {{!empty($data->question) && $data->view != 1 ? 'font-bold' : ''}}">
                    @if(!empty($data->question))
                        {{ $data->question }}
                    @elseif(!empty($data->reply))
                        {{ $data->reply }}
                    @endif
                </p>
            </div>
            <div class="timer">
                @php
                    Carbon::setLocale('vi');
                    $now = Carbon::now();
                    $created_at = Carbon::create($data->created_at);
                @endphp
                {{ $created_at->diffForHumans($now) }}
            </div>
        </div>
    @endforeach
    @endif
</section>

<section class="chat col-md-9" id="message" style="background: url('assets/images/background-chat.png'); background-size: 100%;">
    <div style="position: absolute;top: 50%;left: 50%;color: #000;">Hãy chọn một cuộc trò chuyện để bắt đầu!</div>
</section>