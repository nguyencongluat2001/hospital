@php
use Carbon\Carbon;
@endphp

<section id="discussions" class="col-md-3">
    @if(isset($datas) && count($datas) > 0)
    @foreach($datas as $data)
        <div class="discussion" id="active_{{$data->phone}}" onclick="JS_CustomerCare.message('{{$data->phone}}')" style="cursor: pointer;">
            <div class="desc-contact">
                <p class="name">{{ $data->phone }}</p>
                <p class="message">
                    @if(!empty($data->question))
                        @if($data->view == 1)
                        <b style="color: red">{{ $data->question }}</b>
                        @else
                        {{ $data->question }}
                        @endif
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

<section class="chat col-md-9" id="message"></section>