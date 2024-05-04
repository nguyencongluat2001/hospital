@extends('client.layouts.index')
@section('body-client')
<style>
    .blogReader {
        width: 100%;
        max-height: 100px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
    }

    /* .text-center {
        font-family: auto;
    } */
    
    .icon-dichvu{
    width: 60px;
    height: 60px;
    border: 1px solid #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #fff;
    box-shadow: 3px 3px 5px 0 rgba(0,0,0,0.5);
    }
    .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }
.search-home{
    width: 100%;
    height: 45px;
    border-radius: 10px !important;
}
.list-search{
    position: fixed;
    /* top: 0; */
    left: 0;
    width: 60%;
    z-index: 9999;
    height: 100vh;
    max-height: 100vh;
    overflow: auto;
    background: #fff;
}


/* search home */
/* select checkBook */
.multiselect {
  width: 300px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}


#checkboxes1 {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes1 label {
  display: block;
}

#checkboxes1 label:hover {
  background-color: #1e90ff;
}
/* ::-webkit-scrollbar {
  width: 20px;
} */

.scrollbar {
  overflow: scroll;
  scrollbar-color: red orange;
  scrollbar-width: thin;
  height:300px !important;
  width: 60%;
}
#myInput{
    background-color: #ffffffb5;
    padding-left: 50px;
    outline: none;
}
.form-control:focus{
    outline: none;
    border-color: #ffd52d;
    box-shadow: none;
}
#overSearch{
    background-color: #fff;
    position: absolute;
    width: 100%;
}
#overSearch.closed{
    display: none;
}
#overSearch ul{
    padding-left: 0;
    margin-bottom: 0;
    max-height: 45vh;
    overflow-y: scroll;
}
#overSearch ul::-webkit-scrollbar {
    width: 0.4rem;
}
#overSearch ul::-webkit-scrollbar-thumb {
    background: #ffd52d;
    border-radius: 0.2rem;
}
#overSearch .dropdown-item:active{
    background-color: #fff;
}
#overSearch ul li{
    list-style: none;
    line-height: 40px;
}
#overSearch ul a{
    color: #000;
    text-decoration: none;
}
#overSearch ul a:hover li{
    text-decoration: underline;
}
.form-search{
    position: relative;
}
#txt_search:focus{
    -webkit-box-shadow: unset;
}
#txt_search{
    border-top-left-radius: 50px;
    border-bottom-left-radius: 50px;
    height: 100%;
    position: absolute;
    border-top: 4px solid #ffd52d;
    border-left: 4px solid #ffd52d;
    border-bottom: 4px solid #ffd52d;
}
.timeLoad{
    width: 75%;
    color: #e0f7ffd9;
    font-family: 'Font Awesome 5 Brands';
}
.icon-heart{
    width: 25%;
    color:#ffd5d5;
    text-align: right;
}
.list-hispital-home-one .container{
    margin-top: 2rem;
}
@media (max-width: 450px){
    .list-hispital-home-one .container{
        margin-top: unset;
    }
}
</style>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" /> -->
<!-- Start Banner Hero -->
<div class="banner-wrapper bg-light" style="margin-top: 90px;">
    <div id="index_banner" class="banner-vertical-center-index">
        <!-- Start slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <!-- <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                </ol> -->
            <div class="carousel-inner active pt-4">
                <!-- Start Contact -->
                <div class="css-height pt-5">
                    <section class="banner-bg">
                        <!-- <div class="container">
                            <div class="row">
                                <div class="col-md-9 timeLoad">
                                    <span style="font-size: 16px" id="time"></span>
                                </div>
                                <div class="col-md-3 icon-heart">
                                    <i class="fas fa-heartbeat"></i>
                                    <i class="fas fa-heartbeat"></i>
                                    <i class="fas fa-heartbeat"></i>

                                </div>
                            </div>
                        </div> -->
                        
                        <!-- style="animation: lights 4s 750ms linear infinite;" -->
                        <!-- <center>
                            <span class="text-title-home anime-title" style=" padding-top: 20px;">ĐẶT LỊCH KHÁM NHANH</span> <br>
                            <div class="text-title-home anime-title">
                                <span class="text-title-home">TẠI CÁC TUYẾN TRUNG ƯƠNG</span>
                            </div>
                        </center>
                        <div class="banner-content col-lg-12 offset-1 col-10 m-lg-auto pt-3">
                             <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 mx-auto ">
                                        <div style="width: 100%;position: relative;z-index:10">
                                            <div class="form-search form-group">
                                                <button type="button" class="btn" id="txt_search"><i class="fas fa-search" aria-hidden="true"></i></button>
                                                <input id="myInput" type="text" class="input form-control form-control-lg" placeholder="Tìm kiếm từ khóa..." aria-label="Tìm kiếm từ khóa..." onkeypress="filterSearch()" autocomplete="off">
                                            </div>
                                            @if(isset($search) && count($search) > 0)
                                            <div id="overSearch" class="closed">
                                                <ul>
                                                    @foreach($search as $value)
                                                    <a href="{{ $value['url'] }}" class="dropdown-item"><li>{{ $value['name'] }}</li></a>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-5">
                                    <div class="col-lg-5 mx-auto " style="display:flex;width: 250px;">
                                        <div style="width:50%">
                                            <img class="recent-work-img card-img" style="width: 100px;object-fit: cover;" src="{{url('/clients/img/google-play-badge.svg')}}" alt="Card image">
                                        </div>  
                                        <div style="width:50%">
                                            <img class="recent-work-img card-img" style="width: 93px;object-fit: cover;" src="{{url('/clients/img/app-store-badge-black.svg')}}" alt="Card image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </section>
                </div>
                <!-- End Contact -->
                <!-- <div class="carousel-item active list-hispital-home pt-5" >
                    <div class=" row d-flex align-items-center">
                        <div class="banner-content col-lg-8 offset-1 col-10 m-lg-auto text-center ">
                         <div class="row g-lg-5 mb-4">

                            <div class="col-md-6 mb-4" style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <a href="{{ url('/specialty') }}" type="button" class="btn icon-menu-home" style="width:140px;color: #f2ffff;background: none;">
                                    <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                        <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/chuyen-khoa.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                    </div>
                                    <div style="color: #121213bf;font-weight: 600;font-size: 13px;">Chuyên khoa</div>
                                </a>
                                <a href="{{ url('/facilities') }}" type="button" class="btn icon-menu-home" style="width:140px;color: #f2ffff;background: none;">
                                    <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                        <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/co-so-y-te.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                    </div>
                                    <div style="color: #121213bf;font-weight: 600;font-size: 13px;">Bệnh viện</div>
                                </a>
                                <a href="{{ url('/client/appointmentathome/indexApointment') }}" type="button" class="btn icon-menu-home" style="width:140px;color: #f2ffff;background: none;">
                                    <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                        <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/xet-nghiem.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                    </div>
                                    <div style="color: #121213bf;font-weight: 600;font-size: 13px;">Xét nghiệm</div>
                                </a>
                            </div>

                            <div class="col-md-6 mb-4" style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <a href="{{ url('/client/appointmentathome/indexInfusion') }}" type="button" class="btn icon-menu-home" style="width:140px;color: #f2ffff;background: none;">
                                    <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                        <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/truyen-dich.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                    </div>
                                    <div style="color: #121213bf;font-weight: 600;font-size: 13px;">Truyền dịch</div>
                                </a>
                                <a href="{{ url('/searchschedule') }}" type="button" class="btn icon-menu-home" style="width:140px;color: #f2ffff;background: none;">
                                    <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                        <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/tra-cuu.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                    </div>
                                    <div style="color: #121213bf;font-weight: 600;font-size: 13px;">Tra cứu</div>
                                </a>
                                <a href="{{ url('/contact') }}" type="button" class="btn icon-menu-home" style="width:140px;color: #f2ffff;background: none;">
                                    <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                        <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/danh-gia.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                    </div>
                                    <div style="color: #121213bf;font-weight: 600;font-size: 13px;">Đánh giá</div>
                                </a>
                            </div>
                        </div>                               
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- End Banner Hero -->
<section class="service-wrapper py-3">
    
    <div class=" d-flex align-items-center">
        <div class="banner-content col-lg-10 col-10 offset-1 m-lg-auto text-left ">
            <div class="row g-lg-5 mb-4">
                <div class="col-md-6 mb-4">
                    <a href="{{url('/client/appointmentathome/indexApointment')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div style="border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                               <div style="background: #486289a8;padding: 10px;border-radius: 10px;color: #ffffff;">
                                    <h3 style="font-size: 23 !important;font-family: serif;color: #ffffff;font-weight: 700;">Dịch vụ lấy máu tại nhà</h3>
                                    <span class="blogReader">Giúp khách hàng chủ động tầm soát bệnh lý. Đồng thời tiết kiệm thời gian đi lại, chờ đợi kết quả với mức chi phí hợp lý.</span> <br>
                                    <center>
                                        <span style="background: #f1fffd;color: #ff6a20;font-weight: 700;width: 150px;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                </center>
                               </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-4">
                    <a href="{{url('/client/appointmentathome/tab2/')}}/truyendich" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/truyentainha1.jpeg')}}" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div style="border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <div style="background: #486289a8;padding: 10px;border-radius: 10px;color: #ffffff;">
                                    <h3 style="font-size: 23 !important;font-family: serif;color: #ffffff;font-weight: 700;">Dịch vụ truyền dịch tại nhà</h3>
                                    <span  class="blogReader">Giúp khách hàng được chăm sóc tại chính ngôi nhà của bạn hơn thế tiết kiệm thời gian đi lại, mức chi phí hợp lý.</span> <br>
                                    <center>
                                            <span style="background: #f1fffd;color: #ff6a20;font-weight: 700;width: 150px;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                    </center>
                                </div>
                               
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Banner Hero -->
<!-- <div class="banner-wrapper">
    <div class="banner-vertical-center-index container-fluid">
        <div id="carouselExampleIndicators1" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class=" row d-flex align-items-center">
                        <div class="banner-content col-lg-10 col-10 offset-1 m-lg-auto text-left py-5 pb-5">
                            <div id="table-blog-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Banner Hero -->
<!-- Start Service -->
<!-- <section class="service-wrapper py-3">
    <div class="service-tag py-5 popular-specialties">
        <div class="col-md-12">
            <h2 class="h2 text-center col-12 py-2">Chuyên khoa</h2>
        </div>
        <div class="container py-5">
            <div class="row gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
                @foreach ($Specialty as $key => $data)
                <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                    <a href="{{url('/specialty')}}/{{$data->code}}" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="service card-img" style="height: 250px;object-fit: cover;" src="{{url('/file-image-client/avatar-specialty/')}}/{{ !empty($data->avatar)?$data->avatar:'' }}" alt="Card image">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-left text-light">
                                <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300" style="color: #ffd100;">Đặt lịch</span>
                                <p class="card-text">Chuyên khoa: {{$data->name_specialty}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section> -->
 <!-- Start Banner Hero -->
 <section class="bg-light w-100">
        <div class="container">
            <div class="row d-flex align-items-center py-5">
                <div class="col-lg-6 text-start" >
                    <h1 style="color: #7fd6ff!important;font-family: serif;font-size:25px" class="py-5 typo-space-line title-appoinment">ĐIỂM KHÁC BIỆT KHI SỬ DỤNG DỊCH VỤ XÉT NGHIỆM TẠI NHÀ</h1>
                    <p class="">
                    Tiện lợi: Việc làm xét nghiệm tại nhà giúp tiết kiệm thời gian và công sức di chuyển đến cơ sở y tế. Người dùng có thể sắp xếp thời gian và địa điểm phù hợp cho việc làm xét nghiệm.
                    </p>
                    <div class="row g-lg-5 mb-4" >
                        <!-- Start Recent Work -->
                        <div class="col-md-4 mb-4">
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$datas['code'] ?? ''}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                <img class="recent-work-img card-img" style="height: 150px;object-fit: cover;" src="{{url('/clients/img/tuvan.jpeg')}}" alt="Card image">
                                <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                    <div style="background: #00000045;border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                        <h3 class="card-title" style="font-weight: 600;;padding:10px;font-size: 15px !important;font-family: auto;"><i class="fas fa-headset"></i> Tư vấn miễn phí</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Recent Work -->
                        <!-- Start Recent Work -->
                        <div class="col-md-4 mb-4">
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$datas['code'] ?? ''}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                <img class="recent-work-img card-img" style="height: 150px;object-fit: cover;" src="{{url('/clients/img/bank.jpeg')}}" alt="Card image">
                                <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                    <div style="background: #00000045;border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                        <h3 class="card-title" style="font-weight: 600;;padding:10px;font-size: 15px !important;font-family: auto;"><i class="fas fa-dollar-sign"></i> Giá cả phải chăng</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Recent Work -->
                        <!-- Start Recent Work -->
                        <div class="col-md-4 mb-4">
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$datas['code'] ?? ''}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                <img class="recent-work-img card-img" style="height: 150px;object-fit: cover;" src="{{url('/clients/img/bacsi.jpeg')}}" alt="Card image">
                                <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                    <div style="background: #00000045;border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                        <h3 class="card-title" style="font-weight: 600;;padding:10px;font-size: 15px !important;font-family: auto;"><i class="fas fa-hospital-user"></i> Bác sĩ chuyên môn giỏi</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Recent Work -->
                        <!-- Start Recent Work -->
                        <div class="col-md-4 mb-4">
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$datas['code'] ?? ''}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                <img class="recent-work-img card-img" style="height: 150px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                    <div style="background: #00000045;border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                        <h3 class="card-title" style="font-weight: 600;;padding:10px;font-size: 15px !important;font-family: auto;"><i class="fas fa-user-nurse"></i> Nhân viên chuyên nghiệp</h3>
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <!-- End Recent Work -->
                        <!-- Start Recent Work -->
                        <div class="col-md-4 mb-4">
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$datas['code'] ?? ''}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                <img class="recent-work-img card-img" style="height: 150px;object-fit: cover;" src="{{url('/clients/img/nhanvien.jpeg')}}" alt="Card image">
                                <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                    <div style="background: #00000045;border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                        <h3 class="card-title" style="font-weight: 600;;padding:10px;font-size: 15px !important;font-family: auto;"><i class="fas fa-blender-phone"></i> Phục vụ 24/24</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Recent Work -->
                        <!-- Start Recent Work -->
                        <div class="col-md-4 mb-4">
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$datas['code'] ?? ''}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                <img class="recent-work-img card-img" style="height: 150px;object-fit: cover;" src="{{url('/clients/img/like.jpeg')}}" alt="Card image">
                                <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                    <div style="background: #00000045;border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                        <h3 class="card-title" style="font-weight: 600;;padding:10px;font-size: 15px !important;font-family: auto;"><i class="far fa-hand-point-right"></i> Hơn 5000 khách hàng hài lòng</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Recent Work -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="../clients/img/work.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->


    <!-- Start Team Member -->
    <section class="container">
        <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">

            <div class="col-lg-3">
                <h2 style="color: #7fd6ff!important;font-family: serif;" class="h2 py-5 typo-space-line title-appoinment">ĐỘI NGŨ BÁC SĨ CỦA CHÚNG TÔI</h2>
                <p class="text-muted ">
                Đội ngũ y bác sĩ giỏi, giàu kinh nghiệm, tận tâm, nhiệt huyết. Cán bộ lấy mẫu chuyên nghiệp có chứng chỉ hành nghề. Mang lại cho bệnh nhân cảm giác thân thiện, thoải mái nhất.
                </p>
            </div>

            <div class="col-lg-9 row">
                <div class="team-member col-md-4">
                    <center><img class="team-member-img img-fluid rounded-circle p-4"style="width:300px;height: 300px;object-fit: cover;" src="{{url('/clients/img/bacsi1.webp')}}" alt="Card image"></center>
                    <ul class="team-member-caption list-unstyled text-center pb-4 text-muted ">
                        <li><b>Văn Chung</b></li>
                    </ul>
                </div>
                <div class="team-member col-md-4">
                    <center><img class="team-member-img img-fluid rounded-circle p-4"style="width:300px;height: 300px;object-fit: cover;" src="{{url('/clients/img/bacsi2.webp')}}" alt="Card image"></center>
                    <ul class="team-member-caption list-unstyled text-center pb-4 text-muted ">
                        <li><b>Hồng Ngân</b></li>
                    </ul>
                </div>
                <div class="team-member col-md-4">
                    <center><img class="team-member-img img-fluid rounded-circle p-4"style="width:300px;height: 300px;object-fit: cover;" src="{{url('/clients/img/bacsi3.webp')}}" alt="Card image"></center>
                    <ul class="team-member-caption list-unstyled text-center pb-4 text-muted ">
                        <li><b>Quốc Anh</b></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End Team Member -->

    <!-- Start Aim -->
    <section class="banner-bg bg-white py-5">
        <div class="container my-4">
            <div class="row text-center">

                <div class="objective col-lg-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <i class=" bx bxs-bulb text-light fa-3x"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Khám tổng quát từ medlatec</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class=' bx bx-revision text-light'></i> -->
                        <i class="fas fa-thermometer fa-3x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Truyền dịch y tế</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <i class=" bx bxs-select-multiple text-light fa-3x"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Cấp cứu hồi sức</h2>
                </div>

            </div>
        </div>
        <div class="container my-4">
            <div class="row text-center">

                <div class="objective col-lg-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class=" bx bxs-bulb text-light"></i> -->
                        <i class="fas fa-heartbeat fa-3x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4">Đo điện tim</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class=' bx bx-revision text-light'></i> -->
                        <i class="fas fa-video fa-3x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Chụp X-quang</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class=" bx bxs-select-multiple text-light"></i> -->
                        <i class="fas fa-tint fa-3x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Xét nghiệm máu</h2>
                </div>

            </div>
        </div>
    </section>
    <!-- End Aim -->
<!-- End Service -->
<!-- Start Service -->
<section class="service-wrapper py-3">
    <div class="service-tag py-5 popular-specialties">
        <div class="col-md-12">
            <h2 class="h2 text-center col-12 py-2">Bác sĩ</h2>
        </div>
        <div class="pt-2 py-5 pb-3 d-lg-flex align-items-center gx-5" style="padding:10%">
            <div class="col-lg-12 row align-items-center">
                <div class="team-member col-md-3">
                    <img style="width:300px;height:300px;object-fit: cover;" class="team-member-img img-fluid rounded-circle p-4" src="{{url('/clients/img/bacsi1.webp')}}" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li class="name_cg"> (BS.) Văn Chung</li>
                        <li>Chuyên gia phân tích - Giám đốc tư vấn đầu tư</li>
                        <li>Công ty cổ phần bảo hiểm GTF</li>
                    </ul>
                </div>
                <div class="team-member col-md-3">
                    <img style="width:300px;height:300px;object-fit: cover;" class="team-member-img img-fluid rounded-circle p-4" src="{{url('/clients/img/bacsi2.webp')}}" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li class="name_cg">(BS) Hồng Ngân</li>
                        <li>Chief executive officier (CEO) & Founder DHY</li>
                        <li>Chuyên gia phân tích y học</li>
                    </ul>
                </div>
                <div class="team-member col-md-3">
                    <img style="width:300px;height:300px;object-fit: cover;" class="team-member-img img-fluid rounded-circle p-4" src="{{url('/clients/img/bacsi3.webp')}}" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li class="name_cg">(BS) Quốc Anh</li>
                        <li>Chief executive officier (CEO) & Founder JYT</li>
                        <li>Dữ liệu mẫu xét nghiệm </li>
                    </ul>
                </div>
                <div class="team-member col-md-3">
                    <img style="width:300px;height:300px;object-fit: cover;" class="team-member-img img-fluid rounded-circle p-4" src="{{url('/clients/img/bacsi5.webp')}}" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li class="name_cg">(BS) Thành Trung</li>
                        <li>Chuyên gia phân tích</li>
                        <li>Cán bộ đào tạo & phát triển đại học y</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Start chart -->
<section class="service-wrapper py-3">
    <!-- <div class="service-tag py-5 popular-specialties">
        <div class="col-md-12">
            <h2 class="h2 text-center col-12 py-2">Thông tin chỉ số</h2>
        </div>
        <div class="pt-2 py-5 pb-3 d-lg-flex align-items-center gx-5" style="padding:10%">
            <div class="col-lg-12 row align-items-center"> -->
                <center>
                <canvas id="myChart" style="width:100%;max-width:500px;width:500px !important;height:500px !important"></canvas>

                </center>
            <!-- </div>
        </div>
    </div>
    </div> -->
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script>
//       $(document).ready(function () {
//       $('#select-state').selectize({
//           sortField: 'text'
//       });
//   });
    //search home
var expanded = false;
function showCheckboxes1() {
var checkboxes = document.getElementById("checkboxes1");
if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
} else {
    checkboxes.style.display = "none";
    expanded = false;
}}


//
var xValues = ["Xét nghiệm tại nhà", "Truyền dịch tại nhà","Khám nhanh"];
var yValues = [235, 49, 445];
var barColors = [
  "#ff0072",
  "#73ced4",
  "#ffae35",
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Khách hàng sử dụng dịch vụ booking "
    }
  }
});
</script>
<script>
    function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>
<!-- End Service -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Home.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Facilities.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript" charset="utf-8">
        let a;
        let time;
        var date = new Date().toLocaleDateString('en-GB')
        var dayvn = new Date();
        // Lấy số thứ tự của ngày hiện tại
        var current_day = dayvn.getDay();
        // Biến lưu tên của thứ
        var day_name = '';

        // Lấy tên thứ của ngày hiện tại
        switch (current_day) {
            case 0:
                day_name = "Chủ nhật";
                break;
            case 1:
                day_name = "Thứ hai";
                break;
            case 2:
                day_name = "Thứ ba";
                break;
            case 3:
                day_name = "Thứ tư";
                break;
            case 4:
                day_name = "Thứ năm";
                break;
            case 5:
                day_name = "Thứ sau";
                break;
            case 6:
                day_name = "Thứ bảy";
        }
        setInterval(() => {
            a = new Date();
            time = day_name + ', ngày ' + date + ' ' + a.getHours() + ':' + a.getMinutes() + ':' + a.getSeconds();
            document.getElementById('time').innerHTML = time;
        }, 1000);
    </script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_Home = new JS_Home(baseUrl, 'client', 'home');
    $(document).ready(function($) {
        JS_Home.loadIndex(baseUrl);
    })
    document.addEventListener('click', closeOnClickOutside);
    function closeOnClickOutside(e) {
    if(!$("#overSearch").hasClass('closed')){
            if (!e.target.matches('#myInput')) {
                $("#overSearch").addClass('closed');
            }
        }
    }
    function filterSearch(){
        let input = document.getElementById('myInput');
        let dropdown = document.getElementById('overSearch');
        input.addEventListener('input', function () {
        let dropdown_items = dropdown.querySelectorAll('.dropdown-item');
        if (!dropdown_items)
            return false;
        for (let i=0; i<dropdown_items.length; i++) {
            if (dropdown_items[i].innerHTML.toUpperCase().includes(input.value.toUpperCase()))
                dropdown_items[i].style.display = 'block';
            else
                dropdown_items[i].style.display = 'none';
            }
        });
    }
</script>
<script  type="text/javascript">
    $(document).ready(function() {
        var placeholderText = '<?= $dataSearch ?? "" ?>';
        var arrData = placeholderText.split('!~!');
        $('#myInput').placeholderTypewriter({text: arrData});  
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