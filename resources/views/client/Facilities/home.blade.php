@extends('client.layouts.index')
@section('body-client')
    <!-- Start Banner Hero -->
    <form action="" method="GET" id="frmHospital">
    <input style="display:none" type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <div class="banner-wrapper bg-light" >
            <!-- <div id="index_banner" class="banner-vertical-center-index"> -->
            <div class="banner-vertical-center-index" style="background:#163048d4">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner active pt-5" >
                        <div class="list-hispital-home-one pt-5">
                            <section class="banner-bg">
                                <span  class="text-title-home "><center> BỆNH VIỆN PHÒNG KHÁM <br>TẠI CÁC TUYẾN TRUNG ƯƠNG</center></span>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 mx-auto " style="display:flex">
                                            <!-- <form action="#" method="get"> -->
                                            <div class="input-group pt-2 box">
                                                <input id="search" name="search" style="background:#ffffffb5" type="text" class="input form-control form-control-lg rounded-pill rounded" placeholder="Từ kiếm tên bệnh viện..." aria-label="Từ kiếm tên bệnh viện..">
                                            </div>
                                            <div class="pt-2 p-2">
                                                <i style="color:#ffdd00" id="txt_search" name="txt_search" class="fas fa-search fa-3x pt-1"></i>
                                            </div>

                                            <!-- <button style="width:5%"  type="button" class="btn btn-dark"><i class="fas fa-search"></i></button> -->

                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="carousel-item active list-hispital-home pt-5">
                            <div class=" row d-flex align-items-center">
                                <div class="banner-content col-lg-10 col-10 offset-1 m-lg-auto text-left ">
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
<!-- <script type="text/javascript" src="{{ URL::asset('dist\js\backend\pages\JS_System_Security.js') }}"></script>
<script>
      var JS_System_Security = new JS_System_Security();
          $(document).ready(function($) {
                 JS_System_Security.security();
      })
</script> -->
@endsection