@extends('client.layouts.index')
@section('body-client')
<link rel="stylesheet" href="{{URL::asset('assets/datepicker/bootstrap-datepicker.min.css')}}">
<script type="text/javascript" src="{{ URL::asset('assets/datepicker/bootstrap-datepicker.min.js') }}"></script>
<style>
    #frmSendSchedule{
        width: 100%;
    }
    #carouselExampleIndicators input[type=text], input[type=email], input[type=password], input[type=date] {
        padding: 12px 40px;
        display: inline-block;
        border: 1px solid #ccc;
    }
    #carouselExampleIndicators textarea{
        padding: 5px 40px;
        display: inline-block;
        border: 1px solid #ccc;
    }

    /* Set a style for the buttons*/
    #carouselExampleIndicators button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Set a hover effect for the button*/
    #carouselExampleIndicators button:hover {
        opacity: 0.8;
    }

    /* Set extra style for the cancel button*/
    #carouselExampleIndicators .container {
        padding: 16px;
    }

    #carouselExampleIndicators .form-input {
        position: relative;
    }

    #carouselExampleIndicators .form-input i {
        position: absolute;
        left: 24px;
        top: 12px;
        color: gray;
    }
    .message-error{
        display: none;
        color: red;
    }
    .error-input{
        border: 1px solid red;
    }
    .error-icon{
        color: red !important;
    }
    .error-input::placeholder{
        color: red;
    }
    .padding-style{
        padding-top:15px
    }

</style>
<link rel="stylesheet" href="../clients/css/style.css">
<!-- Start Banner Hero -->
<div class="banner-wrapper bg-light">
    <div id="index_banner" class="banner-vertical-center-index">
        <!-- Start slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner active pt-5">
                <!-- <div class="list-hispital-home-one pt-5">
                        <section class="banner-bg">
                            <span  class="text-title-home "><center> ĐĂNG KÝ KHÁM NHANH</center></span>
                        </section>
                        
                     </div> -->

                <!-- End Contact -->
                <div class="carousel-item active list-hispital-home">
                    <div class=" row d-flex align-items-center">
                        <div class="banner-content col-lg-10 col-10 offset-1 m-lg-auto text-left ">
                            <div class="row g-lg-5 mb-4">
                                <div class="banner-wrapper w-100" style="background:#ffffffba;color:black">
                                    <div class="row g-lg-5 mb-4">
                                        <div class="banner-wrapper w-100 py-3" style="background:#15283dd6">
                                            <div class="list-group wrapper pb-0 px-3">
                                                <a class="col-sm-6 col-lg-12 text-decoration-none text-light">
                                                    <div class="d-lg-flex gx-5">
                                                        <div class="col-lg-3">
                                                            <img class="card-img-top" src="{{url('/file-image-client/avatar-hospital/')}}/{{ !empty($datas->avatar)?$datas->avatar:'' }}" style="object-fit: cover;height:150px" alt="...">
                                                        </div>
                                                        <div class="col-lg-1 "></div>
                                                        <div class="col-lg-8 ">
                                                            <span class="text-title-home" style="color:#ff9300">
                                                                <center> ĐẶT LỊCH KHÁM TẠI</center>
                                                            </span>
                                                            <center>
                                                                <h5 style="font-size: 40px;font-family: serif;font-weight: 600; animation: lights 4s 750ms linear infinite;">{{ !empty($datas->name_hospital)?$datas->name_hospital:'' }}</h5>
                                                            </center>
                                                            <span style="color: #bad1ff;font-size: 20px;">
                                                                <center>{{ !empty($datas->address)?$datas->address:'' }}</center>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" pb-0 px-3">
                                        <span class="text-title-home" style="color:#226c28c9">
                                            <center> Thông tin đăng ký</center>
                                        </span>

                                        <div class="wrapper" style="display: flex; justify-content: center;">
                                            <form id="frmSendSchedule" method="POST" autocomplete="off">
                                                @csrf
                                                <input type="hidden" id="code_hospital" name="code_hospital" value="{{ !empty($datas->code)?$datas->code:'' }}">
                                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                                <div class="row padding-style">
                                                    <div class="form-input col-md-6">
                                                        <select onchange="JS_Schedule.getMoney(this.value)" class="form-control input-sm chzn-select" name="code_specialty" id="code_specialty">
                                                            <option value="">--Chọn khoa khám bệnh--</option>
                                                            @foreach($khoa as $key => $values)
                                                            <option value="{{$values['code']}}" {{($values['status'] == '2') ? 'selected' : ''}}>{{$values['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-input col-md-6" id="moneys">
                                                        <span>Số tiền khám: <span>
                                                        <input style="font-size: 25px;font-weight: 500;color: #ff9400;" type="hidden" id="money" class="form-control" name="money" value="{{!empty($money)?$money:'' }}">
                                                        <span><span style="font-size: 25px;font-weight: 500;color: #ff9400;">{{!empty($moneyConvert)?$moneyConvert:'' }}</span> VND</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3 ">
                                                    <div class="form-input col-md-6 padding-style">
                                                        <input type="text" class="form-control required" placeholder="Họ và tên bệnh nhân..." name="uname" id="uname" oninput="inValid(this.id)">
                                                        <i class="fa fa-user uname-icon padding-style"></i>
                                                        <span class="message-error uname-error">Họ và tên bệnh nhân không được để trống!</span>
                                                    </div>
                                                    <div class="form-input col-md-6 padding-style">
                                                        <input type="text" class="form-control required" placeholder="Số điện thoại..." name="phone" id="phone" oninput="inValid(this.id)">
                                                        <i class="fas fa-phone phone-icon padding-style"></i>
                                                        <span class="message-error phone-error">Số điện thoại không được để trống!</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="form-input col-md-6 padding-style">
                                                        <input type="text" class="form-control required" placeholder="Số bảo hiểm y tế..." name="code_insurance" id="code_insurance" oninput="inValid(this.id)">
                                                        <i class="fas fa-book-medical code_insurance-icon padding-style"></i>
                                                        <span class="message-error code_insurance-error">Số bảo hiểm y tế không được để trống!</span>
                                                    </div>
                                                    <div class="form-wrapper col-md-6 padding-style">
                                                        <input type="radio" value="1" name="sex" id="sex" /> <span style="padding-left:5px">Nam</span>&emsp;
                                                        <input type="radio" value="2" name="sex" id="sex" /> <span style="padding-left:5px">Nữ</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="form-input col-md-6 padding-style">
                                                        <input type="email" class="form-control" placeholder="Địa chỉ Email..." name="email" id="email"  oninput="inValid(this.id)">
                                                        <i class="fas fa-envelope padding-style"></i>
                                                    </div>
                                                    <div class="form-input col-md-6 padding-style">
                                                        <input type="date" class="form-control required datepicker" placeholder="Ngày sinh..." name="date_of_brith" id="date_of_brith"  oninput="inValid(this.id)">
                                                        <i class="fa fa-calendar-alt date_of_brith-icon padding-style"></i>
                                                        <span class="message-error date_of_brith-error">Ngày sinh không được để trống!</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="form-input col-md-4 padding-style">
                                                        <select onchange="JS_Schedule.getHuyen(this.value)" class="form-control input-sm chzn-select" name="code_tinh" id="code_tinh">
                                                            <option value="">--Chọn tỉnh thành--</option>
                                                            @foreach($tinh as $key => $value)
                                                            <option value="{{$value->code_tinh}}">{{$value->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div id="iss" class="form-input col-md-4 padding-style">
                                                        <select class="form-control input-sm chzn-select" name="code_huyen" id="code_huyen">
                                                            <option value="">--Chọn quận huyện--</option>
                                                        </select>
                                                    </div>
                                                    <div id="iss_xa" class="form-input col-md-4 padding-style">
                                                        <select class="form-control input-sm chzn-select" name="code_xa" id="code_xa">
                                                            <option value="">--Chọn phường xã--</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="form-input col-md-12 padding-style">
                                                        <input type="text" class="form-control required" placeholder="Địa chỉ chi tiết..." name="address" id="address"  oninput="inValid(this.id)">
                                                        <i class="fas fa-map-marker-alt address-icon padding-style"></i>
                                                        <span class="message-error address-error">Địa chỉ chi tiết không được để trống!</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="form-input col-md-6 padding-style">
                                                        @if(isset($user_introduce_name))
                                                        <input style="color:red" disabled onchange="JS_Schedule.getUser()" placeholder="Mã nhân viên giới thiệu..." id="code_introduce" type="text" class="form-control" name="code_introduce" value="{{isset($user_introduce_id) ? $user_introduce_id : ''}}">
                                                        @else
                                                        <input style="color:red" onchange="JS_Schedule.getUser()" placeholder="Mã nhân viên giới thiệu..." id="code_introduce" type="text" class="form-control" name="code_introduce" value="{{isset($user_introduce_id) ? $user_introduce_id : ''}}">
                                                        @endif
                                                        <i class="fas fa-id-card code_introduce-icon padding-style"></i>
                                                    </div>
                                                    <div class="form-input col-md-6 padding-style" id="iss">
                                                        <input style="color:red" id="user_introduce_name" name="user_introduce_name" disabled placeholder="Tên nhân viên giới thiệu..." type="text" class="form-control" value="{{isset($user_introduce_name) ? $user_introduce_name : ''}}">
                                                        <i class="fa fa-user-cog user_introduce_name-icon padding-style"></i>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="form-input">
                                                        <textarea name="reason" id="reason" class="form-control" rows="4" cols="50" placeholder="Lý do khám..."></textarea>
                                                        <i class="fas fa-keyboard reason-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="pt-3 mb-3">
                                                    <button type="button" onclick="JS_Schedule.add()" class=" btn-primary" id="btn_register" style="background-color: slategrey">
                                                        {{ __('Đăng ký') }}
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Banner Hero -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editmodal" role="dialog"></div>
<div class="modal " id="addfile" role="dialog"></div>

<div id="dialogconfirm"></div>
<!-- End Service -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Facilities.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Schedule.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    function inValid(id){
        console.log(id);
        if($("#" + id).val() != ''){
            $('.' + id + '-error').css("display", "none");
            $('.' + id + '-icon').removeClass("error-icon");
        }
    }
    $("#frmSendSchedule div.form-input").each(function(key, value){
        $(this,'input').focusout(function(){
            if($(this).find('input').hasClass('required') && $(this).find('input').val() == ''){
                $(this).find('.message-error').css("display", "block");
                $(this).find('input').addClass('error-input');
                $(this).find('i').addClass('error-icon');
            }else if($(this).find('textarea').hasClass('required') && $(this).find('textarea').val() == ''){
                $(this).find('.message-error').css("display", "block");
                $(this).find('input').addClass('error-input');
                $(this).find('i').addClass('error-icon');
            }
        });
    });

    var baseUrl = "{{ url('') }}";
    var JS_Schedule = new JS_Schedule(baseUrl, 'client', 'schedule');
    $(document).ready(function($) {
        JS_Schedule.loadIndex(baseUrl);
    })
</script>
<!-- <script type="text/javascript" src="{{ URL::asset('dist/js/backend/pages/JS_System_Security.js') }}"></script>
<script>
      var JS_System_Security = new JS_System_Security();
          $(document).ready(function($) {
                 JS_System_Security.security();
      })
</script> -->
@endsection