@extends('client.layouts.index')
@section('body-client')
<style>
    form{
        width:80%;
    }
</style>
<link rel="stylesheet" href="../clients/css/style.css">
    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light" >
        <div id="index_banner" class="banner-vertical-center-index">
            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner active pt-5" >
                     <!-- <div class="list-hispital-home-one pt-5">
                        <section class="banner-bg">
                            <span  class="text-title-home "><center> ĐĂNG KÝ KHÁM NHANH</center></span>
                        </section>
                        
                     </div> -->
                     
                    <!-- End Contact -->
                    <div class="carousel-item active list-hispital-home" >
                        <div class=" row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-10 offset-1 m-lg-auto text-left ">
                                <div class="row g-lg-5 mb-4">
                                    <div class="banner-wrapper w-100" style="background:#ffffffba;color:black">
                                        <div class="row g-lg-5 mb-4">
                                            <div class="banner-wrapper w-100 py-3" style="background:#15283dd6">
                                                <div class="list-group wrapper pb-0 px-3">
                                                    <a class="col-sm-6 col-lg-12 text-decoration-none text-light">
                                                        <div class="d-lg-flex gx-5">
                                                            <div class="col-lg-3">
                                                                <img class="card-img-top" src="{{url('/clients/img/laymautainha.jpeg')}}" style="width:250px;height:150px;object-fit: cover;" alt="...">
                                                            </div>
                                                            <div class="col-lg-1 "></div>
                                                            <div class="col-lg-8 ">
                                                            <span  class="text-title-home" style="color:#ff9300"><center> Lấy mẫu tại nhà</center></span>
                                                            <span  style="font-size:20px">Lấy mẫu xét nghiệm tại nhà giúp khách hàng chủ động tầm soát bệnh lý. Đồng thời tiết kiệm thời gian đi lại, chờ đợi kết quả với mức chi phí hợp lý.</span>
                                                        </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" pb-0 px-3">
                                        <span  class="text-title-home" style="color:#226c28c9" ><center> Thông tin</center></span>

                                        <div class="wrapper" style="display: flex; justify-content: center;">
                                            <form id="frmSendSchedule" method="POST"  autocomplete="off">
                                                @csrf
                                                <input type="hidden" id="code" name="code" value="{{ !empty($datas->code)?$datas->code:'' }}">
                                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                                <div class="row">
                                                    <div class="form-wrapper col-md-6">
                                                        <label for="">Họ và tên <span class="request_star">*</span></label>
                                                        <input placeholder="Nhập tên..." id="name" type="text" class="form-control" name="name" value="" autofocus>
                                                    </div>
                                                    <div class="form-wrapper col-md-6">
                                                        <label for="">Số điện thoại <span class="request_star">*</span></label>
                                                        <input placeholder="Số điện thoại..." id="phone" type="phone" class="form-control" name="phone" value="">
                                                    </div>
                                                    {{--<div class="form-wrapper col-md-4">
                                                        <label for="">Địa chỉ Email</label>
                                                        <input placeholder="Nhập email..." id="email" type="email" class="form-control" name="email" value="">
                                                    </div>--}}
                                                </div>
                                                <div class="row">
                                                {{--<div class="form-wrapper col-md-4">
                                                        <label for="">Ngày sinh <span class="request_star">*</span></label>
                                                        <input placeholder="Số điện thoại..." id="date_sampling" type="date" class="form-control" name="date_sampling" value="">
                                                    </div> --}}
                                                    <div class="form-wrapper col-md-12">
                                                        <label for="">Loại xét nghiệm</label>
                                                        <select class="form-control input-sm chzn-select" name="code_type" id="code_type">
                                                            <option value="">--Chọn loại--</option>
                                                            @foreach($type_xetnghiem as $key => $values) 
                                                                <option value="{{$values['code']}}" {{($values['code'] == $values['code']) ? 'selected' : ''}}>{{$values['name']}}>{{$values['name']}}</option>
                                                            @endforeach 
                                                        </select>
                                                    </div>
                                                    <div class="form-wrapper col-md-6">
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-wrapper col-md-6">
                                                        <label for="">Giá gói khám <span class="request_star">*</span></label>
                                                        <input id="name" type="text" class="form-control" name="name" value="" autofocus>
                                                    </div>
                                                    <div class="form-wrapper col-md-6">
                                                    <label for="">Giới tính <span class="request_star">*</span></label>
                                                        <input type="radio" value="1" name="sex" id="sex" />  <span style="padding-left:5px" >Nam</span>&emsp;
                                                        <input  type="radio" value="2" name="sex" id="sex"  /> <span style="padding-left:5px" >Nữ</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-wrapper col-md-6">
                                                            <label for="">Ngày lấy mẫu<span class="request_star">*</span></label>
                                                        <input  id="date_sampling" type="date" class="form-control" name="date_sampling" value="">
                                                    </div>
                                                    <div class="form-wrapper col-md-6">
                                                            <label for="">Giờ lấy mẫu<span class="request_star">*</span></label>
                                                        <select class="form-control input-sm chzn-select" name="hour_sampling" id="hour_sampling">
                                                            <option value="">--Chọn giờ--</option>
                                                            <option value="05h30">05 giờ 30 phút</option>
                                                            <option value="06h00">06 giờ 00 phút</option>
                                                            <option value="06h30">06 giờ 30 phút</option>
                                                            <option value="07h00">07 giờ 00 phút</option>
                                                            <option value="07h30">07 giờ 30 phút</option>
                                                            <option value="08h00">08 giờ 00 phút</option>
                                                            <option value="08h30">08 giờ 30 phút</option>
                                                            <option value="09h00">09 giờ 00 phút</option>
                                                            <option value="09h30">00 giờ 30 phút</option>
                                                            <option value="10h00">10 giờ 00 phút</option>
                                                            <option value="10h30">10 giờ 30 phút</option>
                                                            <option value="11h00">11 giờ 00 phút</option>
                                                            <option value="11h30">11 giờ 30 phút</option>
                                                            <option value="13h30">13 giờ 30 phút</option>
                                                            <option value="14h00">14 giờ 00 phút</option>
                                                            <option value="14h30">14 giờ 30 phút</option>
                                                            <option value="15h00">15 giờ 00 phút</option>
                                                            <option value="15h30">15 giờ 30 phút</option>
                                                            <option value="16h00">16 giờ 00 phút</option>
                                                            <option value="16h30">16 giờ 30 phút</option>
                                                            <option value="17h00">17 giờ 00 phút</option>
                                                            <option value="17h30">17 giờ 30 phút</option>
                                                            <option value="18h00">18 giờ 00 phút</option>
                                                            <option value="17h30">17 giờ 30 phút</option>
                                                            <option value="18h00">18 giờ 00 phút</option>
                                                            <option value="18h30">18 giờ 30 phút</option>
                                                            <option value="19h00">19 giờ 00 phút</option>
                                                            <option value="19h30">19 giờ 30 phút</option>
                                                            <option value="20h00">20 giờ 00 phút</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-wrapper">
                                                        <label for="">Địa chỉ chi tiết <span class="request_star">*</span></label>
                                                        <input placeholder="Nhập địa chỉ chi tiết..." id="address" type="text" class="form-control" name="address" value="{{ old('birth') }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-wrapper">
                                                        <label for="">Nội dung yêu cầu <span class="request_star">*</span></label>
                                                        <textarea name="reason" id="reason" class="form-control"  rows="4" cols="50"></textarea>
                                                    </div>
                                                </div>
                                                <div class="pt-3 mb-3">
                                                    <button type="button" onclick="JS_AppointmentAtHome.add()" class=" btn-primary" id="btn_register" style="background-color: slategrey">
                                                        {{ __('Đặt lịch') }}
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
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_AppointmentAtHome.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_AppointmentAtHome = new JS_AppointmentAtHome(baseUrl, 'client', 'appointmentathome');
    $(document).ready(function($) {
        JS_AppointmentAtHome.loadIndex(baseUrl);
    })
</script>
@endsection