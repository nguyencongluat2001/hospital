@extends('dashboard.layouts.index')
@section('body')
<script type="text/javascript" src="{{ URL::asset('dist\js\backend\pages\JS_CustomerCare.js') }}"></script>
<script src="https://js.pusher.com/4.4/pusher.min.js"></script>
<style>
    .menu {
        float: left;
        height: 700px;
        width: 70px;
        background: #4768b5;
        background: -webkit-linear-gradient(#4768b5, #35488e);
        background: -o-linear-gradient(#4768b5, #35488e);
        background: -moz-linear-gradient(#4768b5, #35488e);
        background: linear-gradient(#4768b5, #35488e);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19);
    }

    .menu .items {
        list-style: none;
        margin: auto;
        padding: 0;
    }

    .menu .items .item {
        height: 70px;
        border-bottom: 1px solid #6780cc;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #9fb5ef;
        font-size: 17pt;
    }

    .menu .items .item-active {
        background-color: #5172c3;
        color: #FFF;
    }

    .menu .items .item:hover {
        cursor: pointer;
        background-color: #4f6ebd;
        color: #cfe5ff;
    }
    
    #discussions {
        height: 600px;
        overflow: hidden;
        background-color: #fff;
        display: inline-block;
        padding-left: 0;
        padding-right: 0;
        overflow-y: scroll;
    }

    #discussions::-webkit-scrollbar{
        width: .4rem;
    }

    #discussions::-webkit-scrollbar-thumb{
        background: #bdc7ff;
        border-radius: .2rem;
    }

    #discussions .discussion {
        width: 100%;
        height: 90px;
        background-color: #fff;
        border-bottom: solid 1px #E0E0E0;
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    #discussions .search {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #E0E0E0;
    }

    #discussions .search .searchbar {
        height: 40px;
        background-color: #FFF;
        width: 70%;
        padding: 0 20px;
        border-radius: 50px;
        border: 1px solid #EEEEEE;
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    #discussions .search .searchbar input {
        margin-left: 15px;
        height: 38px;
        width: 100%;
        border: none;
        font-family: 'Montserrat', sans-serif;
    }

    #discussions .search .searchbar *::-webkit-input-placeholder {
        color: #E0E0E0;
    }

    #discussions .search .searchbar input *:-moz-placeholder {
        color: #E0E0E0;
    }

    #discussions .search .searchbar input *::-moz-placeholder {
        color: #E0E0E0;
    }

    #discussions .search .searchbar input *:-ms-input-placeholder {
        color: #E0E0E0;
    }

    #discussions .message-active {
        height: 90px;
        background-color: #e5efff;
        /* border-right: 5px solid #273fc1; */
    }

    .online {
        position: relative;
        top: 30px;
        left: 35px;
        width: 13px;
        height: 13px;
        background-color: #8BC34A;
        border-radius: 13px;
        border: 3px solid #FAFAFA;
    }

    .desc-contact {
        height: 50px;
        width: 50%;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    #discussions .discussion .name {
        margin: 0 0 0 20px;
        font-family: 'Montserrat', sans-serif;
        font-size: 12pt;
        color: #515151;
    }

    #discussions .discussion .message {
        margin: 6px 0 0 20px;
        font-family: 'Montserrat', sans-serif;
        font-size: 9pt;
        color: #515151;
    }
    .font-bold{
        font-weight: bold;
    }

    .timer {
        margin-left: 15%;
        font-family: 'Open Sans', sans-serif;
        font-size: 11px;
        padding: 3px 8px;
        color: #BBB;
        background-color: #FFF;
        border: 1px solid #E5E5E5;
        border-radius: 15px;
    }

    .header-chat {
        background-color: #FFF;
        height: 90px;
        box-shadow: 0px 3px 2px rgba(0, 0, 0, 0.100);
        display: flex;
        align-items: center;
    }

    .chat .header-chat .icon {
        margin-left: 30px;
        color: #515151;
        font-size: 14pt;
    }

    .chat .header-chat .name {
        margin: 0 0 0 20px;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
        font-size: 13pt;
        color: #515151;
    }

    .chat .header-chat .right {
        position: absolute;
        right: 40px;
    }

    .chat .messages-chat {
        padding: 25px 35px;
        margin-bottom: 70px;
        max-height: 525px;
        overflow-y: scroll;
    }

    .chat .messages-chat::-webkit-scrollbar{
        width: .4rem;
    }

    .chat .messages-chat::-webkit-scrollbar-thumb{
        background: #bdc7ff;
        border-radius: .2rem;
    }

    .chat .messages-chat .message {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
        clear: right;
    }

    .chat .messages-chat .text {
        margin: 0;
        background-color: #f6f6f6;
        padding: 15px;
        border-radius: 12px;
        color: #000;
    }

    .chat .messages-chat .text b{
        margin: 0;
        font-size: 12px;
        color: #aa1087;
    }

    .chat .messages-chat .text p{
        margin: 0;
    }

    .time {
        font-size: 10px;
        color: lightgrey;
        margin-bottom: 10px;
    }

    .response-time {
        float: right;
    }

    .response {
        float: right;
        margin-right: 0px !important;
        margin-left: auto;
        /* flexbox alignment rule */
    }

    .response .text {
        background-color: #b1ffca !important;
    }

    .footer-chat {
        width: calc(75% - 75px);
        height: 80px;
        display: flex;
        align-items: center;
        position: absolute;
        bottom: 0;
        background-color: transparent;
        border-top: 2px solid #EEE;

    }

    .chat .footer-chat .icon {
        margin-left: 30px;
        color: #C0C0C0;
        font-size: 14pt;
    }

    .chat .footer-chat .send {
        color: #fff;
        background-color: #4f6ebd;
        position: absolute;
        right: 50px;
        padding: 25px 25px;
        border-radius: 50px;
        font-size: 14pt;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chat .footer-chat .name {
        margin: 0 0 0 20px;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
        font-size: 13pt;
        color: #515151;
    }

    .chat .footer-chat .right {
        position: absolute;
        right: 40px;
    }

    .txt-message {
        border: none !important;
        width: 80%;
        height: 50px;
        margin-left: 20px;
        padding: 10px;
    }

    .footer-chat *::-webkit-input-placeholder {
        color: #C0C0C0;
        font-size: 13pt;
    }

    .footer-chat input *:-moz-placeholder {
        color: #C0C0C0;
        font-size: 13pt;
    }

    .footer-chat input *::-moz-placeholder {
        color: #C0C0C0;
        font-size: 13pt;
        margin-left: 5px;
    }

    .footer-chat input *:-ms-input-placeholder {
        color: #C0C0C0;
        font-size: 13pt;
    }

    .clickable {
        cursor: pointer;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <form action="" method="POST" id="frmCustomerCare_index">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <section class="content-wrapper">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{--<div class="row form-group">
                            <div class="col-md-3">
                                <button class="btn btn-success shadow-sm" id="btn_add" type="button" data-toggle="tooltip" data-original-title="Thêm cổ phiếu"><i class="fas fa-plus"></i></button>
                                <button class="btn btn-danger shadow-sm" id="btn_delete" type="button" data-toggle="tooltip" data-original-title="Xóa cổ phiếu"><i class="fas fa-trash-alt"></i></button>
                            </div>
                            <div class="input-group" style="width:30%;height:10%">
                                <input id="search" name="search" type="text" class="form-control" placeholder="Tìm kiếm theo mã CP, người đảm nhận...">
                            </div>
                            <button style="width:5%" id="txt_search" name="txt_search" type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>

                        </div>--}}
                        <!-- Màn hình danh sách -->
                        <div class="row" id="table-container" style="padding-top:10px"></div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>
<div class="modal fade" id="editmodal" data-backdrop="static" role="dialog"></div>

<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_CustomerCare = new JS_CustomerCare(baseUrl, 'system', 'customerCare');
    $(document).ready(function($) {
        JS_CustomerCare.loadIndex(baseUrl);
    })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/8.2.0/pusher.min.js"></script>
<script>
    // chat ng dung
    const pusher = new Pusher("{{config('chat.pusher.key')}}", {
        cluster: 'ap1'
    });
    const chanel = pusher.subscribe('public');

    chanel.bind('chat', function(data) {
        $.ajax({
            url: '/system/customerCare/receive',
            type: 'POST',
            data: {
                _token: '{{csrf_token()}}',
                message: data.message,
                phone: data.phone
            },
            success: function(res) {
                $("#frmCustomerCare_index .active_" + data.phone + " .messages-chat").append(res);
                var html = '';
                if($("#discussions #active_" + data.phone).html() == undefined
                || $("#discussions #active_" + data.phone).html() == ''){
                    html += '<div class="discussion" id="active_' + data.phone + '" onclick="JS_CustomerCare.message(\'' + data.phone + '\')" style="cursor: pointer;">';
                }
                html += '<div class="desc-contact">';
                html += '<p class="name font-bold">' + data.phone + '</p>';
                html += '<p class="message font-bold">' + data.message + '</p>';
                html += '</div>';
                html += '<div class="timer">' +  + '</div>';
                if($("#discussions #active_" + data.phone).html() !== undefined
                && $("#discussions #active_" + data.phone).html() !== ''){
                    $("#active_" + data.phone).html(html);
                }else{
                    html += '</div>';
                    $("#discussions").append(html);
                }
            }
        });
    });
    
</script>
@endsection