@extends('client.layouts.index')
@section('body-client')
<style>
    form{
        width:80%;
    }
</style>
<link rel="stylesheet" href="../clients/css/style.css">
    <!-- Start Banner Hero -->
    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light" >
        <div id="index_banner" class="banner-vertical-center-index">
            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                </ol> -->
                <div class="carousel-inner active pt-4" >
                     <!-- Start Contact -->
                     <div class="list-hispital-home-one pt-5">
                        <section class="banner-bg">
                        <!-- style="animation: lights 4s 750ms linear infinite;" -->
                            <span  class="text-title-home "><center> XÉT NGHIỆM TẠI NHÀ </center></span>
                            <!-- <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 mx-auto ">
                                        <form action="#" method="get">
                                        <div class="input-group pt-2 box">
                                            <input style="background:#ffffffb5" type="text" class="input form-control form-control-lg rounded-pill rounded" placeholder="Từ khóa tìm kiếm...">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                        </section>
                     </div>
                    <!-- End Contact -->
                    <div class="carousel-item active list-hispital-home pt-3">
                        <div class=" row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left ">
                                <div class="row g-lg-5 mb-4">
                                    <!-- Start Recent Work -->
                                    <div class="col-md-6 mb-4">
                                        <a href="{{url('/appointmentathome/laymauxetnghiemtainha')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title" style="font-size: 23 !important;">GÓI XÉT NGHIỆM SÀNG LỌC VIRUS HỢP BÀO HÔ HẤP- CÚM AB- SỐT SXH</h3>
                                                    <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->    
                                    <!-- Start Recent Work -->
                                    <div class="col-md-6 mb-4">
                                        <a href="{{url('/appointmentathome/laymauxetnghiemtainha')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title" style="font-size: 23 !important;">GÓI XÉT NGHIỆM SÀNG LỌC SỐT XUẤT HUYẾT</h3>
                                                    <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->   
                                    <!-- Start Recent Work -->
                                    <div class="col-md-6 mb-4">
                                        <a href="{{url('/appointmentathome/laymauxetnghiemtainha')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title" style="font-size: 23 !important;">GÓI XÉT NGHIỆM SÀNG LỌC BỆNH SỐT XUẤT HUYẾT - CÚM AB - COVID 19 - TẠI NHÀ</h3>
                                                    <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->   
                                    <!-- Start Recent Work -->
                                    <div class="col-md-6 mb-4">
                                        <a href="{{url('/appointmentathome/laymauxetnghiemtainha')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title" style="font-size: 23 !important;">Gói vi chất trẻ em nâng cao</h3>
                                                    <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->   
                                    <!-- Start Recent Work -->
                                    <div class="col-md-6 mb-4">
                                        <a href="{{url('/appointmentathome/laymauxetnghiemtainha')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title" style="font-size: 23 !important;">Gói vi chất trẻ em nâng cao</h3>
                                                    <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->   
                                     <!-- Start Recent Work -->
                                     <div class="col-md-6 mb-4">
                                        <a href="{{url('/appointmentathome/laymauxetnghiemtainha')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title" style="font-size: 23 !important;">GÓI TẦM SOÁT BỆNH LÝ UNG THƯ CHO NỮ TẠI NHÀ</h3>
                                                    <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->   
                                     <!-- Start Recent Work -->
                                     <div class="col-md-6 mb-4">
                                        <a href="{{url('/appointmentathome/laymauxetnghiemtainha')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title" style="font-size: 23 !important;">GÓI TẦM SOÁT BỆNH LÝ UNG THƯ CHO NỮ TẠI NHÀ</h3>
                                                    <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->   
                                    <!-- Start Recent Work -->
                                    <div class="col-md-6 mb-4">
                                        <a href="{{url('/appointmentathome/laymauxetnghiemtainha')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title" style="font-size: 23 !important;">GÓI SÀNG LỌC SỐT KHÔNG TEST COVID</h3>
                                                    <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->   
                                    <!-- Start Recent Work -->
                                    <div class="col-md-6 mb-4">
                                        <a href="{{url('/appointmentathome/laymauxetnghiemtainha')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title" style="font-size: 23 !important;">Gói kiểm tra sức khoẻ tổng quát nâng cao cho nữ tại nhà- Hà Nội</h3>
                                                    <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->   
                                    <!-- Start Recent Work -->
                                    <div class="col-md-6 mb-4">
                                        <a href="{{url('/appointmentathome/laymauxetnghiemtainha')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title" style="font-size: 23 !important;">Gói kiểm tra sức khoẻ tổng quát nâng cao cho nữ tại nhà- Hà Nội</h3>
                                                    <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Recent Work -->   
                                </div>
                                <!-- <center><span class="famous-saying">"Chỉ khi người giàu ốm họ mới thực hiểu sự bất lực của giàu sang"</span></center> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->
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
<!-- <script type="text/javascript" src="{{ URL::asset('dist\js\backend\pages\JS_System_Security.js') }}"></script>
<script>
      var JS_System_Security = new JS_System_Security();
          $(document).ready(function($) {
                 JS_System_Security.security();
      })
</script> -->
@endsection