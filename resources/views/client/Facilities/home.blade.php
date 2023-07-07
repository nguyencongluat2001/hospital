@extends('client.layouts.index')
@section('body-client')
    <!-- Start Banner Hero -->
    <form action="" method="POST" id="frmHospital">
        <div class="banner-wrapper bg-light" >
            <div id="index_banner" class="banner-vertical-center-index">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner active pt-5" >
                        <div class="list-hispital-home-one pt-5">
                            <section class="banner-bg">
                                <span  class="text-title-home "><center> BỆNH VIỆN PHÒNG KHÁM <br>TẠI CÁC TUYẾN TRUNG ƯƠNG</center></span>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 mx-auto ">
                                            <form action="#" method="get">
                                            <div class="input-group pt-2 box">
                                                <input style="background:#ffffffb5" type="text" class="input form-control form-control-lg rounded-pill rounded" placeholder="Từ kiếm tên bệnh viện..." aria-label="Từ kiếm tên bệnh viện..">
                                                <i class="fas fa-search"></i>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="carousel-item active list-hispital-home pt-5">
                            <div class=" row d-flex align-items-center">
                                <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left ">
                                    <!-- <div class="row g-lg-5 mb-4">
                                    @foreach ($datas as $key => $data)
                                        <div class="col-md-3 mb-3">
                                            <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                                                <img class="recent-work-img card-img" style="height: 150px;width: 300px;object-fit: cover;" src="{{url('/file-image-client/avatar-hospital/')}}/{{ !empty($data->avatar)?$data->avatar:'' }}" alt="Card image">
                                                <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                    <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                        <h3 class="card-title">{{$data->name_hospital}}</h3>
                                                        <span style="color: #ffd100" class="btn btn-outline-light rounded-pill">Đặt lịch khám</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                        
                                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-center py-2 pb-2">
                                        <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4 " href="#" role="button">Xem thêm</a>

                                        </div> -->
                                        <!-- Start Our Work -->
                                        <section class="container">
                                            <!-- <div class="justify-content-center " style="margin-top: 0px!important;margin-bottom: 3rem!important;">
                                                <div class="filter-btns shadow-md rounded-pill text-center col-auto">
                                                    <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 active" data-filter=".project" href="#">All</a>
                                                    <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".business" href="#">Business</a>
                                                    <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".marketing" href="#">Marketing</a>
                                                    <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".social" href="#">Social Media</a>
                                                    <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".graphic" href="#">Graphic</a>
                                                </div>
                                            </div> -->

                                            <div class="row gx-lg-5">
                                                 <div class="row" id="table-container" style="padding-top:10px">
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <div class="btn-toolbar justify-content-center pb-4" role="toolbar" aria-label="Toolbar with button groups">
                                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                                        <button type="button" class="btn btn-secondary text-white">Previous</button>
                                                    </div>
                                                    <div class="btn-group me-2" role="group" aria-label="Second group">
                                                        <button type="button" class="btn btn-light">1</button>
                                                    </div>
                                                    <div class="btn-group me-2" role="group" aria-label="Second group">
                                                        <button type="button" class="btn btn-secondary text-white">2</button>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="Third group">
                                                        <button type="button" class="btn btn-secondary text-white">Next</button>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </section>
                                        <!-- End Our Work -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<div class="modal" id="reader" role="dialog"></div>
<!-- End Recent Work -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_About.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Facilities.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_About = new JS_About(baseUrl, 'client', 'about', 'home');
    var JS_Facilities = new JS_Facilities(baseUrl, 'client', 'facilities');
    $(document).ready(function($) {
        JS_Facilities.loadIndex(baseUrl);
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<!-- <script type="text/javascript" src="{{ URL::asset('dist\js\backend\pages\JS_System_Security.js') }}"></script>
<script>
      var JS_System_Security = new JS_System_Security();
          $(document).ready(function($) {
                 JS_System_Security.security();
      })
</script> -->
@endsection