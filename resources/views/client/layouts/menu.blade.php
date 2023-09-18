<style>
    .navbar-nav .nav-link {
        padding-right: 10px !important;
        padding-left: 10px !important;
    }

    .tooltip-text {
        visibility: hidden;
        position: absolute;
        z-index: 2;
        width: 100px;
        color: white;
        font-size: 12px;
        background-color: #192733;
        border-radius: 10px;
        padding: 10px 15px 10px 0px;
    }

    .tooltip-text::before {
        content: "";
        position: absolute;
        transform: rotate(45deg);
        background-color: #192733;
        padding: 5px;
        z-index: 1;
    }

    .hover-text:hover .tooltip-text {
        visibility: visible;
    }

    #top::before {
        top: 80%;
        left: 45%;
    }

    @media (max-width: 512px) {
        #navbar-toggler-success {
            display: none;
        }
    }

    #menu-list {
        position: relative;
        display: none;
        overflow: auto;
    }

    #navbar-toggler {
        position: absolute;
        left: 0;
    }

    #navbar-toggler {
        display: none;
        transition: ease-in .5s;
    }

    #navbar-toggler.show {
        display: block;
        background-color: #fff;
        width: 200px;
        animation: menu-show .5s;
    }

    @keyframes menu-show {
        0% {
            left: -200px;
        }

        100% {
            left: 0;
        }
    }
</style>
<!-- Header -->
<nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow" style="top:0;padding-top:0px !important;padding-bottom: 0px !important;background:#ffffff!important;position: fixed;width: 100%;z-index: 1000;">
    <div class="container d-flex justify-content-between align-items-center">
        {{--<div style="background: #ffffff00;font-family: ui-monospace;width: 50px;color: black;height: 30px;margin: 0 !important;" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fas fa-bars"></i></div>
        </div>--}}

        <span id="menu-toggle"><i class="fas fa-bars"></i></span>
        <!-- <a class="" style="width: 7%;" href="{{url('/')}}">
                <img class="card-img " src="../clients/img/logo.png" alt="Card image">
            </a> -->
        <div style="width:8%">
            <img class="card-img " src="../clients/img/logo.png" alt="Card image">
        </div>

        <a class="navbar-brand h1" href="{{ url('/') }}">
            <!-- <img class="card-img " src="../clients/img/logo.png" alt="Card image"> -->
            <!-- <i class='bx bx-buildings bx-sm text-dark'></i> -->
            <span style="color: #ffbc00!important;" class="text-dark h5">Booking</span> <sup style="color:#32a5c2"></sup>
        </a>


        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
            <div class="flex-fill mx-xl-2">
                <ul class="nav navbar-nav d-flex justify-content-between mx-xl-2 text-center text-dark">
                    <li class="nav-item">
                        <a class="nav-link link-home btn-outline-info rounded-pill" href="{{ url('/') }}"> <span class="text-menu-header"> <i class="fas fa-home"></i> Trang chủ </span> <br> <span class="text-12">Hạng mục nổi bật</span> </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link-specialty btn-outline-info rounded-pill" href="{{ url('/specialty') }}"> <span class="text-menu-header"><i class="fas fa-suitcase"></i> Chuyên khoa </span> <br> <span class="text-12">Tìm theo chuyên khoa</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-facilities btn-outline-info rounded-pill" href="{{ url('/facilities') }}"> <span class="text-menu-header"><i class="fas fa-clinic-medical"></i> Cơ sở y tế</span> <br> <span class="text-12">Chọn bệnh viện</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-bloodtest btn-outline-info rounded-pill" href="{{ url('/client/appointmentathome/indexApointment') }}"> <span class="text-menu-header"><i class="fas fa-tint"></i> Xét nghiệm </span> <br> <span class="text-12">Lấy máu tại nhà</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-infusion btn-outline-info rounded-pill" href="{{ url('/client/appointmentathome/indexInfusion') }}"> <span class="text-menu-header"><i class="fas fa-thermometer"></i> Truyền dịch </span> <br> <span class="text-12">Truyền dịch tại nhà</span> </a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link btn-outline-info rounded-pill" href="work.html"> <span class="text-menu-header">Bác sĩ </span> <br> <span class="text-12">Chọn bác sĩ giỏi</span></a>
                        </li> -->
                    <!-- <li class="nav-item">
                            <a class="nav-link link-package btn-outline-info rounded-pill" href="{{ url('/package') }}"> <span class="text-menu-header"><i class="fas fa-file-medical"></i> Gói khám </span> <br> <span class="text-12">Khám sức khỏe tổng quát</span></a>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link link-searchschedule btn-outline-info rounded-pill" href="{{ url('/searchschedule') }}"> <span class="text-menu-header"><i class="fas fa-search-plus"></i> Tra cứu </span> <br> <span class="text-12">Tra cứu lịch hẹn</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-contact btn-outline-info rounded-pill" href="{{ url('/contact') }}"> <span class="text-menu-header"><i class="fas fa-comment-medical"></i> Đánh giá </span> <br> <span class="text-12">Đánh giá dịch vụ</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <center>
            <div id="btn_addMenu" class="navbar navbar-expand-md shadow-sm menu_layout">
                <!-- <button type="button" onclick="Js_Main.addMenu(this)" class="btn btn-light icon-menu-home" >Menu</button>  -->
                <ul class="navbar-nav ms-auto acc_auth">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <div class="hover-text">
                        <a style="color:#ff4d00" class="nav-link " href="{{ route('login') }}"><i class="fas fa-sign-in-alt fa-1x"></i></a>
                    </div>
                    <!-- <span class="tooltip-text" id="top">Đăng nhập</span> -->

                    @endif

                    <!-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                            </li>
                        @endif -->
                    @else
                    @if (!empty($_SESSION['name']) && Auth::check())
                    <li class="nav-item dropdown">
                        <!-- <span id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img  src="{{url('/file-image/avatar/')}}/{{ Auth::user()->avatar }}" alt="Image" style="border-radius:50%;height: 30px;width: 30px;object-fit: cover;">
                                    </span>    -->
                        <span style="color:#ff9d00" id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span>
                                @if(!empty($_SESSION['name']))
                                {{ $_SESSION['name'] }}
                                @endif
                            </span>
                        </span>


                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <!-- <a class="dropdown-item" href="{{ URL::asset('/system/userInfo/index') }}">
                                            <p>
                                                {{ __('Thông tin cá nhân') }}
                                            </p>
                                    </a> -->
                            <a class="dropdown-item" href="{{ URL::asset('appointmentathome/tainha') }}">
                                <p>
                                    {{ __('Nhập chỉ định xét nghiệm') }}
                                </p>
                            </a>
                            <!-- <a class="dropdown-item">
                                            <p>
                                                {{ __('Đăng ký lấy máu') }}
                                            </p>
                                    </a>
                                    <a class="dropdown-item" href="{{ URL::asset('client/appointmentathome/tab2/truyendich') }}">
                                            <p>
                                                {{ __('Đăng ký lịch truyền') }}
                                            </p>
                                    </a> -->
                            <a class="dropdown-item">
                                <p>
                                    {{ __('Mã CTV:') }} <span style="color:red;font-weight: 500;"> @if(!empty($_SESSION['code'])){{ $_SESSION['code'] }}@endif</span>
                                </p>
                            </a>
                            <a class="dropdown-item" href="{{ URL::asset('client/appointmentathome/chart')}}">
                                <p>
                                    {{ __('Quản lý kinh doanh') }}
                                </p>
                            </a>
                            <a class="dropdown-item" href="{{ URL::asset('client/appointmentathome/list_Indications')}}">
                                <p>
                                    {{ __('Danh sách chỉ định') }}
                                </p>
                            </a>
                            <a class="dropdown-item" href="{{ URL::asset('client/infor/index')}}">
                                <p>
                                    {{ __('Thông tin cá nhân') }}
                                </p>
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">

                                <p>
                                    <i class="fas fa-sign-out-alt"></i>
                                    {{ __('Đăng xuất') }}
                                </p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a style="color:#ff9d00" class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                    </li>
                    @endif
                    @endguest
                </ul>
            </div>
        </center>
        <!-- <a class="" style="width: 4%;" href="{{url('/')}}">
                <img class="card-img " src="../clients/img/support.jpg" alt="Card image">
            </a>
            <span style="color:#ffd979">&nbsp;+84.386.358.006</span> -->


    </div>
</nav>

<div id="menu-list" style="position: fixed;top: 0;right: 0;left: 0;bottom: 0;background: rgba(0,0,0,0.7);z-index: 1000;">
    <!-- <span class="navbar-toggler-icon"></span> -->
    <div class="" id="navbar-toggler">
        <div class="flex-fill mx-xl-2 menu-navigate">
            <ul class="nav navbar-nav justify-content-between mx-xl-2 text-dark">
                <li class="nav-item" style="text-align: right; padding: .5rem">
                    <span class="menu-close"><i class="fas fa-times"></i></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-home btn-outline-info" href="{{ url('/') }}"> <span class="text-menu-header"> <i class="fas fa-home"></i> Trang chủ </span> <br> <span class="text-12">Hạng mục nổi bật</span> </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link-specialty btn-outline-info" href="{{ url('/specialty') }}"> <span class="text-menu-header"><i class="fas fa-suitcase"></i> Chuyên khoa </span> <br> <span class="text-12">Tìm theo chuyên khoa</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-facilities btn-outline-info" href="{{ url('/facilities') }}"> <span class="text-menu-header"><i class="fas fa-clinic-medical"></i> Cơ sở y tế</span> <br> <span class="text-12">Chọn bệnh viện</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-bloodtest btn-outline-info" href="{{ url('/client/appointmentathome/indexApointment') }}"> <span class="text-menu-header"><i class="fas fa-tint"></i> Xét nghiệm </span> <br> <span class="text-12">Lấy máu tại nhà</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-infusion btn-outline-info" href="{{ url('/client/appointmentathome/indexInfusion') }}"> <span class="text-menu-header"><i class="fas fa-thermometer"></i> Truyền dịch </span> <br> <span class="text-12">Truyền dịch tại nhà</span> </a>
                </li>
                <!-- <li class="nav-item">
                            <a class="nav-link btn-outline-info" href="work.html"> <span class="text-menu-header">Bác sĩ </span> <br> <span class="text-12">Chọn bác sĩ giỏi</span></a>
                        </li> -->
                <!-- <li class="nav-item">
                            <a class="nav-link link-package btn-outline-info" href="{{ url('/package') }}"> <span class="text-menu-header"><i class="fas fa-file-medical"></i> Gói khám </span> <br> <span class="text-12">Khám sức khỏe tổng quát</span></a>
                        </li> -->
                <li class="nav-item">
                    <a class="nav-link link-searchschedule btn-outline-info" href="{{ url('/searchschedule') }}"> <span class="text-menu-header"><i class="fas fa-search-plus"></i> Tra cứu </span> <br> <span class="text-12">Tra cứu lịch hẹn</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-contact btn-outline-info" href="{{ url('/contact') }}"> <span class="text-menu-header"><i class="fas fa-comment-medical"></i> Đánh giá </span> <br> <span class="text-12">Đánh giá dịch vụ</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Close Header -->
@section('js')
<script>
    $('#menu-toggle').click(function() {
        $("#navbar-toggler").toggleClass('show');
        $("#menu-list").toggle();
        $("body").attr('style', 'overflow: hidden');
    })
    $(".menu-close").click(function(){
        $("#navbar-toggler").toggleClass('show');
        $("#menu-list").toggle();
        $("body").removeAttr('style');
    })
</script>
@endsection