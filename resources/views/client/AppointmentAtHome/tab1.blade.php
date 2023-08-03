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
        <div id="index_banner_detail" class="banner-vertical-center-index">
            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner active pt-5" >
                     <div class="list-hispital-home-one pt-5">
                        <section class="banner-bg">
                            <span  class="text-title-home "><center> XÉT NGHIỆM TẠI NHÀ</center></span>
                        </section>
                     </div>
                    <!-- End Contact -->
                    <div class="carousel-item active list-hispital-home pt-5" >
                        <div class=" row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left ">
                                <div class="row g-lg-5 mb-4">
                                    <div class="banner-wrapper w-100 py-5" style="background:#ffffff80">
                                        <div class="pb-0 px-3">
                                            <div class="">
                                                <ul class="list-group">
                                                    <div  class="col-sm-6 col-lg-12 text-decoration-none">
                                                        <div class="pb-3 d-lg-flex gx-5">
                                                            <div class="col-lg-12">
                                                                <h5 style="color:#6c0000;font-size: 25px;font-family: serif;font-weight: 600;">GÓI XÉT NGHIỆM SÀNG LỌC VIRUS HỢP BÀO HÔ HẤP- CÚM AB- SỐT SXH</h5>
                                                                <span style="font-size:20px"><i style="color:#3cb9ff" class="fas fa-user-tie"></i> Nam</span>
                                                                <span style="font-size:20px;padding-left:15px"><i style="color:#3cb9ff" class="fas fa-calendar-alt"></i> Từ 0 đến 100 tuổi</span>
                                                                <span style="font-size:20px;padding-left:15px"><i style="color:#3cb9ff" class="fas fa-map-marker-alt"></i> Hà Nội</span>
                                                                <span style="font-size:20px;padding-left:15px"><i style="color:#3cb9ff" class="fas fa-dollar-sign"></i> Giá gói: 1.530.000 ₫</span> <br> <br>
                                                                <div class="text-center">
                                                                    <a href="{{url('/schedule')}}"  class="btn rounded-pill btn-success text-light px-4 light-300">Đặt lịch khám</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
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
    <div class="banner-vertical-center-work container d-flex justify-content-center align-items-center">
        <div class="banner-content col-lg-10 col-10 m-lg-auto text-left">
            <div style="color:#264451" class="light-300">
            <div class="carousel-item active">
                            <div class=" row d-flex ">
                                <div class="banner-content col-lg-12 col-12 m-lg-auto text-left ">
                                        <!-- Start Contact -->
                                        <section class="container" style="background: #ffffffc4;">
                                            <div class="row pb-4">
                                                <div class="col-lg-4">
                                                    <div class="contact row mb-4">
                                                        <div class="contact-icon col-lg-3 col-3">
                                                            <div class="py-3 mb-2 text-center border rounded text-secondary">
                                                                <i class='display-6 bx bx-news'></i>
                                                            </div>
                                                        </div>
                                                        <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">
                                                            <li class="h5 mb-0">Hình thức thực hiện</li>
                                                            <li class="text-muted">Tại nhà</li>
                                                        </ul>
                                                    </div>
                                                    <div class="contact row mb-4">
                                                        <div class="contact-icon col-lg-3 col-3">
                                                            <div class="border py-3 mb-2 text-center border rounded text-secondary">
                                                                <i class='bx bx-laptop display-6' ></i>
                                                            </div>
                                                        </div>
                                                        <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                                                            <li class="h5 mb-0">Liên hệ kỹ thuật</li>
                                                            <li class="text-muted">Mr. luatnc</li>
                                                            <li class="text-muted">010-020-0340</li>
                                                        </ul>
                                                    </div>
                                                    <div class="contact row mb-4">
                                                        <div class="contact-icon col-lg-3 col-3">
                                                            <div class="border py-3 mb-2 text-center border rounded text-secondary">
                                                                <i class='bx bx-money display-6'></i>
                                                            </div>
                                                        </div>
                                                        <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                                                            <li class="h5 mb-0">Liên hệ thanh toán</li>
                                                            <li class="text-muted">Mr. </li>
                                                            <li class="text-muted">010-020-0340</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Start Contact Form -->
                                                <div class="col-lg-8 ">
                                                    * Địa điểm áp dụng: Tại các Bệnh viện phòng khám và Các đơn vị lấy mẫu tại nhà trên địa bàn Hà Nội <br>
                                                    * Thời gian áp dụng: Từ ngày 01/4/2023 đến 31/03/2024 <br>
                                                    * Ý nghĩa gói khám: <br>
                                                    - Các xét nghiệm đánh giá tình trạng sức khỏe của người bệnh để có thái độ xử trí phù hợp <br>
                                                    - Các xét nghiệm xác định tác nhân thường gặp có thể phát hiện được kể từ mốc 24h (sau sốt- hạn chế nguy cơ âm tính giả), gồm:<br>
                                                    + Sốt XH Dengue: Test Dengue NS1/IgM/IgG, 
                                                </div>
                                                <!-- End Contact Form -->
                                            </div>
                                        </section>
                                        <!-- End Contact -->
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
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
<!-- <script type="text/javascript" src="{{ URL::asset('dist\js\backend\pages\JS_System_Security.js') }}"></script>
<script>
      var JS_System_Security = new JS_System_Security();
          $(document).ready(function($) {
                 JS_System_Security.security();
      })
</script> -->
@endsection