 <!-- Header -->
 <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow" style="top:0;padding-top:0px !important;padding-bottom: 0px !important;background:#243649!important;position: fixed;width: 100%;z-index: 1000;">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="" style="width: 7%;" href="{{url('/')}}">
                <!-- <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white"><i class="fa fa-bars"></i></span>
                </button> -->
                <img class="card-img " src="../clients/img/logo.png" alt="Card image">
            </a>
            <a class="navbar-brand h1" href="{{ url('/') }}">
                <!-- <i class='bx bx-buildings bx-sm text-dark'></i> -->
                <span style="color: #ffbc00!important;" class="text-dark h5">Booking</span> <sup style="color:#32a5c2">Fast</sup>
            </a>
            <button style="background: #ffea71" class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-2 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link link-home btn-outline-dark rounded-pill" href="{{ url('/') }}"> <span class="text-menu-header"> <i class="fas fa-home"></i> Trang chủ </span> <br> <span class="text-12">Hạng mục nổi bật</span> </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link link-bloodtest btn-outline-dark rounded-pill" href="{{ url('/client/appointmentathome/indexApointment') }}"> <span class="text-menu-header"><i class="fas fa-suitcase"></i> Xét nghiệm </span> <br> <span class="text-12">Lấy máu tại nhà</span> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-infusion btn-outline-dark rounded-pill" href="{{ url('/client/appointmentathome/indexInfusion') }}"> <span class="text-menu-header"><i class="fas fa-suitcase"></i> Truyền dịch </span> <br> <span class="text-12">Truyền dịch tại nhà</span> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-specialty btn-outline-dark rounded-pill" href="{{ url('/specialty') }}"> <span class="text-menu-header"><i class="fas fa-suitcase"></i> Chuyên khoa </span> <br> <span class="text-12">Tìm theo chuyên khoa</span> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-facilities btn-outline-dark rounded-pill" href="{{ url('/facilities') }}"> <span class="text-menu-header"><i class="fas fa-clinic-medical"></i> Cơ sở y tế</span> <br> <span class="text-12">Chọn bệnh viện</span> </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link btn-outline-dark rounded-pill" href="work.html"> <span class="text-menu-header">Bác sĩ </span> <br> <span class="text-12">Chọn bác sĩ giỏi</span></a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link link-package btn-outline-dark rounded-pill" href="{{ url('/package') }}"> <span class="text-menu-header"><i class="fas fa-file-medical"></i> Gói khám </span> <br> <span class="text-12">Khám sức khỏe tổng quát</span></a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link link-searchschedule btn-outline-dark rounded-pill" href="{{ url('/searchschedule') }}"> <span class="text-menu-header"><i class="fas fa-search-plus"></i> Tra cứu </span> <br> <span class="text-12">Tra cứu lịch hẹn</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-contact btn-outline-dark rounded-pill" href="{{ url('/contact') }}"> <span class="text-menu-header"><i class="fas fa-comment-medical"></i> Đánh giá </span> <br> <span class="text-12">Đánh giá dịch vụ</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <a class="" style="width: 4%;" href="{{url('/')}}">
                <img class="card-img " src="../clients/img/support.jpg" alt="Card image">
            </a>
            <span style="color:#ffd979">&nbsp;+84.386.358.006</span> -->
            

        </div>
</nav>
    <!-- Close Header -->