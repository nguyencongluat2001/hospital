@extends('client.layouts.index')
@section('body-client')
    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light" >
        <div id="index_banner" class="banner-vertical-center-index">
            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                </ol> -->
                <div class="carousel-inner active pt-5" >
                     <!-- Start Contact -->
                     <div class="list-hispital-home-one pt-5">
                        <section class="banner-bg">
                        <!-- style="animation: lights 4s 750ms linear infinite;" -->
                            <span  class="text-title-home "><center> ĐẶT LỊCH KHÁM NHANH <br>TẠI CÁC TUYẾN TRUNG ƯƠNG</center></span>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 mx-auto ">
                                        <form action="#" method="get">
                                        <div class="input-group pt-2 box">
                                        <!-- <div class="box">
                                            <form name="search">
                                                <input type="text" class="input " placeholder="Từ khóa" aria-label="Từ khóa" name="txt">
                                            </form>
                                            <i class="fas fa-search"></i>
                                        </div> -->
                                            <input style="background:#ffffffb5" type="text" class="input form-control form-control-lg rounded-pill rounded" id="email" placeholder="Từ khóa tìm kiếm..." aria-label="Từ khóa tìm kiếm..">
                                            <i class="fas fa-search"></i>

                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </section>
                     </div>
                    <!-- End Contact -->
                    <div class="carousel-item active list-hispital-home pt-5">
                        <div class=" row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left ">
                                <div class="row g-lg-5 mb-4">
                                @foreach ($datas as $key => $data)
                                    <!-- Start Recent Work -->
                                    <div class="col-md-4 mb-4">
                                        <a href="{{url('/facilities')}}/{{$data->code}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                            <img class="recent-work-img card-img" style="height: 150px;object-fit: cover;" src="{{url('/file-image-client/avatar-hospital/')}}/{{ !empty($data->avatar)?$data->avatar:'' }}" alt="Card image">
                                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                <div style="background: radial-gradient(#000000c2, transparent);border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                    <h3 class="card-title" style="font-size: 23 !important;">{{$data->name_hospital}}</h3>
                                                    <span style="color: #ffd100" class="btn btn-outline-light rounded-pill">Đặt lịch khám</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- End Recent Work -->
                                @endforeach
                                    
                                    <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-center py-2 pb-2">
                                        <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4 " href="{{url('/facilities')}}" role="button">Xem thêm</a>
                                    </div>
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
    <section class="service-wrapper py-3">
        <div class="container-fluid pb-3">
            <div class="row">
               <h2 class="h2 text-center col-12 py-2 semi-bold-600">Vai trò của Booking</h2>
            </div>
            <p class="col-10 offset-2 col-lg-8 text-start pb-3 text-muted px-2">
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
                             <h2 class="h2 text-center col-12 semi-bold-600">Bài viết nổi bật</h2>
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
                <!-- <ul class="nav d-flex justify-content-center">
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-300" href="#" data-filter=".project">All</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".graphic">Graphics</a>
                    </li>
                    <li class="filter-btn nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".ui">UI/UX</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".branding">Branding</a>
                    </li>
                </ul> -->
                <h2 class="h2 text-center col-12 py-2 semi-bold-600">Chuyên khoa phổ biến</h2>
            </div>
            <div class="container py-5">
                <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="service card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">UI/UX design</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Social Media</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Marketing</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Graphic</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Digtal Marketing</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Market Research</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Business</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic branding">
                        <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                            <img class="card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                            <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="service-work-content text-left text-light">
                                    <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Branding</span>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Service -->
     <!-- Start Service -->
     <section class="service-wrapper py-3">
        <div class="service-tag py-5 popular-specialties">
            <div class="col-md-12">
                <h2 class="h2 text-center col-12 py-2 semi-bold-600">Bác sĩ nổi bật</h2>
            </div>
            <div class="pt-2 py-5 pb-3 d-lg-flex align-items-center gx-5" style="padding:10%">
                            <!-- <div class="col-lg-3">
                                <h2 class="h2 py-5 typo-space-line">Cố vấn đầu tư</h2>
                                <p class="text-muted light-300">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div> -->
                                <div class="col-lg-12 row align-items-center">
                                    <div class="team-member col-md-3">
                                        <img style="width:300px;height:300px;object-fit: cover;" class="team-member-img img-fluid rounded-circle p-4" src="./../clients/img/carousel-1.jpg" alt="Card image">
                                        <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                            <li class="name_cg"> (Ông) Lê Văn A</li>
                                            <li>Chuyên gia phân tích - Giám đốc tư vấn đầu tư</li>
                                            <li>Công ty cổ phần bảo hiểm GTF</li>
                                        </ul>
                                    </div>
                                    <div class="team-member col-md-3">
                                        <img style="width:300px;height:300px;object-fit: cover;" class="team-member-img img-fluid rounded-circle p-4" src="./../clients/img/carousel-1.jpg" alt="Card image">
                                        <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                            <li class="name_cg">(Ông) Nguyễn Van C</li>
                                            <li>Chief executive officier (CEO) & Founder DHY</li>
                                            <li>Chuyên gia phân tích y học</li>
                                        </ul>
                                    </div>
                                    <div class="team-member col-md-3">
                                        <img style="width:300px;height:300px;object-fit: cover;" class="team-member-img img-fluid rounded-circle p-4" src="./../clients/img/carousel-1.jpg" alt="Card image">
                                        <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                            <li class="name_cg">(Ông) Nguyễn Van A</li>
                                            <li>Chief executive officier (CEO) & Founder JYT</li>
                                            <li>Dữ liệu mẫu xét nghiệm </li>
                                        </ul>
                                    </div>
                                    <div class="team-member col-md-3">
                                        <img style="width:300px;height:300px;object-fit: cover;" class="team-member-img img-fluid rounded-circle p-4" src="./../clients/img/carousel-1.jpg" alt="Card image">
                                        <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                            <li class="name_cg">(Ông) Trần Văn G</li>
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