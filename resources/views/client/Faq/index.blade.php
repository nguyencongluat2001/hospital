@extends('client.layouts.index')
@section('body-client')
<style>
    #contact .service-tag {
        font-size: 20px;
    }
    #contact .treeview-animated ul li{
        list-style: none;
    }
    .showHideAll{
        padding: 2rem;
    }
    .showHideAll .showAll, .showHideAll .hideAll{
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #49bce2;
        padding: 5px 1rem;
        color: #fff;
        cursor: pointer;
    }
</style>

<div id="contact">
    <section class="service-wrapper mt-5 pt-5">
        <div class="container">
            <div class="col-md-12 pt-3">
                <h2 class="h2 text-center col-12 py-2">Câu hỏi thường gặp</h2>
            </div>
            <div class="container pt-3">
                <div class="treeview-animated w-20 border mx-4 my-4">
                <div class="showHideAll">
                    <span class="showAll">Hiển thị tất cả</span>
                    <span class="hideAll">Thu nhỏ tất cả</span>
                </div>
                    <ul class="treeview-animated-list mb-3">
                        @if(isset($datas) && count($datas) > 0)
                        @foreach($datas as $key => $data)
                        <li class="treeview-animated-items">
                            <a class="closed">
                                <span>{{ $key }}</span>
                            </a>
                            <ul class="nested">
                                @foreach($data as $k => $v)
                                <li class="treeview-animated-items">
                                    <a class="closed"><span>{{ $v->question }}</span></a>
                                    <ul class="nested">
                                        <li>{{ $v->answer }}</li>
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ URL::asset('clients/js/treelist.js') }}"></script>
<script>
    $(".showAll").click(function() {
        $(".nested").css('display', 'block');
        $(".toogle .fa-plus-circle").css('display', 'none');
        $(".toogle .fa-minus-circle").removeAttr('style');
    })
    $(".hideAll").click(function() {
        $(".nested").css('display', 'none');
        $(".toogle .fa-minus-circle").css('display', 'none');
        $(".toogle .fa-plus-circle").removeAttr('style');
    })
</script>
@endsection