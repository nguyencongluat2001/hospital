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

    .text-center {
        font-family: auto;
    }
    
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
</style>
<!-- Start Banner Hero -->
<div class="banner-wrapper bg-light">
    <div id="index_banner" class="banner-vertical-center-index">
        <!-- Start slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <!-- <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                </ol> -->
            <div class="carousel-inner active pt-4">
                <!-- Start Contact -->
                <div class="list-hispital-home-one pt-5">
                    <section class="banner-bg">
                        <!-- style="animation: lights 4s 750ms linear infinite;" -->
                        <center>
                            <span class="text-title-home anime-title" style=" padding-top: 20px;">ĐẶT LỊCH KHÁM NHANH</span> <br>
                            <div class="text-title-home anime-title">
                                <span class="text-title-home anime-title-span">TẠI CÁC TUYẾN TRUNG ƯƠNG</span>
                            </div>
                        </center>
                        <!-- <span  class="text-title-home anime-text-titel"><center> ĐẶT LỊCH KHÁM NHANH <br>TẠI CÁC TUYẾN TRUNG ƯƠNG</center></span> -->

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
                        <div class="banner-content col-lg-12 offset-1 col-10 m-lg-auto text-center ">
                            <div class="row g-lg-5 mb-4">
                                <div class="col-md-3 mb-4" style="display: flex; justify-content: space-between; align-items: flex-start;">
                                    <!-- <a href="{{ url('/') }}"  type="button" class="btn btn-light icon-menu-home" style="width:100px;color: #f2ffff;background: none;">
                                        <i class="fas fa-home"></i>
                                            <br>
                                            <span>Trang chủ</span>
                                        </a> -->
                                    <a href="{{ url('/specialty') }}" type="button" class="btn icon-menu-home" style="width:100px;color: #f2ffff;background: none;">
                                        <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                            <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/chuyen-khoa.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                        </div>
                                        <div>Khoa</div>
                                    </a>
                                    <a href="{{ url('/facilities') }}" type="button" class="btn icon-menu-home" style="width:100px;color: #f2ffff;background: none;">
                                        <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                            <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/co-so-y-te.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                        </div>
                                        <div>Cơ sở y tế</div>
                                    </a>
                                    <a href="{{ url('/client/appointmentathome/indexApointment') }}" type="button" class="btn icon-menu-home" style="width:100px;color: #f2ffff;background: none;">
                                        <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                            <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/xet-nghiem.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                        </div>
                                        <div>Xét nghiệm</div>
                                    </a>
                                </div>
                                
                                <div class="col-md-3 mb-4" style="display: flex; justify-content: space-between; align-items: flex-start;">
                                    <a href="{{ url('/client/appointmentathome/indexInfusion') }}" type="button" class="btn icon-menu-home" style="width:100px;color: #f2ffff;background: none;">
                                        <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                            <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/truyen-dich.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                        </div>
                                        <div>Truyền dịch</div>
                                    </a>
                                    <!-- <a href="{{ url('/package') }}" type="button" class="btn btn-light icon-menu-home" style="width:100px;color: #f2ffff;background: none;">
                                        <i class="fas fa-file-medical"></i>   <br>
                                        <span>Gói khám</span><br>
                                        </a> -->
                                    <a href="{{ url('/searchschedule') }}" type="button" class="btn icon-menu-home" style="width:100px;color: #f2ffff;background: none;">
                                        <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                            <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/tra-cuu.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                        </div>
                                        <div>Tra cứu</div>
                                    </a>
                                    <a href="{{ url('/contact') }}" type="button" class="btn icon-menu-home" style="width:100px;color: #f2ffff;background: none;">
                                        <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
                                            <div class="icon-dichvu" style="background-image: url(../../../../assets/images/icon/danh-gia.png);background-size: 40px;background-repeat: no-repeat;background-position: center;"></div>
                                        </div>
                                        <div>Đánh giá</div>
                                    </a>
                                </div><!-- End Recent Work -->
                            </div>
                            <!-- <center><span class="famous-saying">"Chỉ khi người giàu ốm họ mới thực hiểu sự bất lực của giàu sang"</span></center> -->

                        </div>
                    </div>
                    <div class=" row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left ">
                            <div class="row g-lg-5 mb-4">
                                <!-- Start Recent Work -->
                                <div class="col-md-6 mb-4">
                                    <a href="{{url('/client/appointmentathome/indexApointment')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                        <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                            <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                <h3 class="card-title" style="font-size: 23 !important;">Dịch vụ lấy máu tại nhà</h3>
                                                <span style="color:#caefff" class="blogReader">Lấy mẫu xét nghiệm tại nhà giúp khách hàng chủ động tầm soát bệnh lý. Đồng thời tiết kiệm thời gian đi lại, chờ đợi kết quả với mức chi phí hợp lý.</span> <br>
                                                <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Recent Work -->
                                <!-- Start Recent Work -->
                                <div class="col-md-6 mb-4">
                                    <a href="{{url('/client/appointmentathome/tab2/')}}/truyendich" class="recent-work card border-0 shadow-lg overflow-hidden">
                                        <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/clients/img/truyentainha.jpeg')}}" alt="Card image">
                                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                            <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                <h3 class="card-title" style="font-size: 23 !important;">Dịch vụ truyền dịch tại nhà</h3>
                                                <span style="color:#caefff" class="blogReader">Truyền dịch tại nhà giúp khách hàng được chăm sóc tại chính ngôi nhà của bạn hơn thế tiết kiệm thời gian đi lại, mức chi phí hợp lý.</span> <br>
                                                <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Recent Work -->
                            </div>
                            <!-- <center><span class="famous-saying">"Chỉ khi người giàu ốm họ mới thực hiểu sự bất lực của giàu sang"</span></center> -->

                        </div>
                    </div>
                    <div class=" row d-flex align-items-center">
                        <div class="rowx">
                            <span class="h2 text-center col-12 py-2">
                                <center> Cơ sở y tế</center>
                            </span>
                        </div>
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left pt-5">
                            <div class="row g-lg-5 mb-4">
                                @foreach ($datas as $key => $data)
                                <div class="col-md-4 mb-4">
                                    <a href="{{url('/facilities')}}/{{$data->code}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                        <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/file-image-client/avatar-hospital/')}}/{{ !empty($data->avatar)?$data->avatar:'' }}" alt="Card image">
                                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                            <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                <h3 class="card-title" style="font-size: 23 !important;">{{$data->name_hospital}}</h3>
                                                <span style="color:#ecfaff;padding:10px;font-size: 14 !important;"><i class="fas fa-map-marker-alt"></i> {{$data->address}}</span><br><br>
                                                <span style="color: #ffd100" class="btn btn-outline-light rounded-pill">Đặt lịch khám</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach

                                <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-center py-2 pb-2">
                                    <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4 " href="{{url('/facilities')}}" role="button">Xem thêm <i class="fas fa-hand-point-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class=" row d-flex align-items-center">
                             <div class="rowx">
                             <span  class="text-title-home pl-2"><center> Bệnh viện</center></span>
                            </div>
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left pt-5">
                                <div class="row g-lg-5 mb-4">
                                @foreach ($datas as $key => $data)
                                    <div class="col-md-6 mb-4">
                                        <a  href="{{url('/facilities')}}/{{$data->code}}" class=" card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/file-image-client/avatar-hospital/')}}/{{ !empty($data->avatar)?$data->avatar:'' }}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background:#f5f6ffe3;border-radius: 5px;width: 100%;" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                <span style="padding:10px">
                                                        <h3 class="card-title" style="font-weight: 600;;color:#365270;padding:10px;font-size: 23 !important;">{{$data->name_hospital}}</h3>
                                                            <span class="card-title" style="color:#365270;padding:10px;font-size: 14 !important;"><i class="fas fa-map-marker-alt"></i> {{$data->address}}</span> <br> <br>
                                                </span>
                                                </div>
                                            </div>
                                        
                                        </a>
                                        <br>
                                        <a href="{{url('/facilities')}}/{{$data->code}}">
                                            <center>
                                                <span style="color: #ffd100;background: #243157;" class="btn btn-outline-light rounded-pill">Đặt lịch khám</span>
                                            </center>
                                        </a>
                                    </div>
                                @endforeach
                                <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-center py-2 pb-2">
                                        <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4 " href="{{url('/facilities')}}" role="button">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Hero -->
<section class="service-wrapper py-3">
    <div class="container-fluid pb-3">
        <div class="row">
            <h2 class="h2 text-center col-12 py-2">Vai trò của Booking</h2>
        </div>
        <p class="col-10 offset-1 col-lg-10 text-start pb-3 text-muted px-2">
            &nbsp; &nbsp;&nbsp; BookingCare giúp bệnh nhân dễ dàng lựa chọn đúng bác sĩ từ mạng lưới bác sĩ chuyên khoa giỏi, với thông tin đã xác thực và đặt lịch nhanh chóng. Bác sĩ chuyên khoa giỏi, được nhiều bệnh nhân tin tưởng, đồng nghiệp đánh giá cao, có uy tín trong ngành. Các bác sĩ đã, đang công tác tại các bệnh viện hàng đầu như: Bệnh viện Bạch Mai, Bệnh Viện Việt Đức, Bệnh viện TW Quân đội 108, Bệnh viện Quân Y 103, Bệnh viện Nhi TW, Bệnh viện Tai Mũi Họng TW, Viện Tim mạch Việt Nam, Bệnh viện Chợ Rẫy, Bệnh viện Đại học Y dược TP.HCM, Bệnh viện Nhân dân 115…
            .Các bác sĩ có lịch khám tại các bệnh viện công lớn hoặc phòng khám tư nhân uy tín, được chọn lọc kỹ lưỡng tại Hà Nội và TP.HCM. Bên cạnh đó, hệ thống ghi nhận ý kiến đánh giá phản hồi của bệnh nhân sau khi đi khám và phương án điều trị của từng bác sĩ. Từ đó chúng tôi có thêm thông tin để giới thiệu trên hệ thống những bác sĩ uy tín, chuyên môn cao. <br>
        </p>
    </div>
</section>

<!-- Start Banner Hero -->
<div class="banner-wrapper">
    <div class="banner-vertical-center-index container-fluid">
        <!-- Start slider -->
        <div id="carouselExampleIndicators1" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <div class="row">
                             <h2 class="h2 text-center col-12">Bài viết nổi bật</h2>
                        </div> -->
                    <div class=" row d-flex align-items-center">
                        <div class="banner-content col-lg-10 col-10 offset-1 m-lg-auto text-left py-5 pb-5">
                            <div id="table-blog-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End slider -->
    </div>
</div>
<!-- End Banner Hero -->
<!-- Start Service -->
<section class="service-wrapper py-3">
    <div class="service-tag py-5 popular-specialties">
        <div class="col-md-12">
            <h2 class="h2 text-center col-12 py-2">Chuyên khoa phổ biến</h2>
        </div>
        <div class="container py-5">
            <div class="row gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
                @foreach ($Specialty as $key => $data)
                <!-- Start Recent Work -->
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
                </div><!-- End Recent Work -->
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Service -->
<!-- Start Service -->
<section class="service-wrapper py-3">
    <div class="service-tag py-5 popular-specialties">
        <div class="col-md-12">
            <h2 class="h2 text-center col-12 py-2">Bác sĩ nổi bật</h2>
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
<!-- End Service -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Home.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Facilities.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_Home = new JS_Home(baseUrl, 'client', 'home');
    $(document).ready(function($) {
        JS_Home.loadIndex(baseUrl);
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