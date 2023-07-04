@extends('client.layouts.index')
@section('body-client')
    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light" >
        <div id="index_banner" class="banner-vertical-center-index">
            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                     <!-- Start Contact -->
                     <div class="list-hispital-home-one pt-2">
                        <section class="banner-bg">
                            <span class="text-title-home "><center> NỀN TẢNG Y TẾ <br>CHĂM SÓC SỨC KHỎE TOÀN DIỆN</center></span>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 mx-auto my-4 p-3">
                                        <form action="#" method="get">
                                        <div class="input-group">
                                            <input name="email" style="background:#ffe000" type="text" class="form-control form-control-lg rounded-pill rounded" id="email" placeholder="Từ khóa" aria-label="Từ khóa">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                     </div>
                    <!-- End Contact -->
                    <div class="carousel-item active list-hispital-home">
                        <div class=" row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left pb-5">
                                <!-- <p class="banner-body text-muted py-3 mx-0 px-0">
                                    Purple Buzz is a corporate HTML template with Bootstrap 5 Beta 1. This CSS template is 100% free to download provided by <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent">TemplateMo</a>. Total 6 HTML pages included in this template. Icon fonts by <a rel="nofollow" href="https://boxicons.com/" target="_blank">Boxicons</a>. Photos are from <a rel="nofollow" href="https://unsplash.com/" target="_blank">Unsplash</a> and <a rel="nofollow" href="https://icons8.com/" target="_blank">Icons 8</a>.
                              </p> -->
                              <div class="row g-lg-5 mb-4">
                                <!-- Start Recent Work -->
                                <div class="col-md-4 mb-3">
                                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                                        <img class="recent-work-img card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                <h3 class="card-title light-300">Bệnh viện đa khoa Bạch mai</h3>
                                                <p class="card-text">xem</p>
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Recent Work -->

                                <!-- Start Recent Work -->
                                <div class="col-md-4 mb-3">
                                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                                        <img class="recent-work-img card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                <h3 class="card-title light-300">Bệnh viện đa khoa Việt Đức</h3>
                                                <p class="card-text">xem</p>
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Recent Work -->

                                <!-- Start Recent Work -->
                                <div class="col-md-4 mb-3">
                                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                                        <img class="recent-work-img card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                <h3 class="card-title light-300">Bệnh viện Qân Y 108</h3>
                                                <p class="card-text">xem</p>
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Recent Work -->
                            </div>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                            
                        </div>
                    </div>
                   
                </div>
                <!-- <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a> -->
            </div>
            <!-- End slider -->

        </div>
    </div>
    <!-- End Banner Hero -->


<!-- Start Service -->
<section class="service-wrapper py-3">
        <div class="container-fluid pb-3">
            <div class="row">
                <h2 class="h2 text-center col-12 py-5 semi-bold-600">Services</h2>
                <div class="service-header col-2 col-lg-3 text-end light-300">
                    <i class='bx bx-gift h3 mt-1'></i>
                </div>
                <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                    <h2 class="h3 pb-4 typo-space-line">Make Success for future</h2>
                </div>
            </div>
            <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
                You are free to use this template for your commercial or business websites. You are not allowed to re-distribute this template ZIP file on any template collection websites. It is too easy to illegally copy and repost this template.
            </p>
        </div>

        <div class="service-tag py-5 bg-secondary">
            <div class="col-md-12">
                <ul class="nav d-flex justify-content-center">
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
                </ul>
            </div>
        </div>

    </section>
   <section class="container overflow-hidden py-5">
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
    </section>
    <!-- End Service -->






    <!-- Start View Work -->
    <section class="bg-secondary">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bx bxs-box bx-lg'></i>
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300">Great transformations successful</h3>
                    <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
                </div>
                <div class="col-lg-3 col-12 pt-4">
                    <a href="#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">View Our Work</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End View Work -->

    <!-- Start Recent Work -->
    <section class="py-5 mb-5">
        <div class="container">
            <div class="recent-work-header row text-center pb-5">
                <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Recent Works</h2>
            </div>
            <div class="row gy-5 g-lg-5 mb-4">

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Social Media</h3>
                                <p class="card-text">Ullamco laboris nisi ut aliquip ex</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Web Marketing</h3>
                                <p class="card-text">Psum officia anim id est laborum.</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">R & D</h3>
                                <p class="card-text">Sum dolor sit consencutur</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Public Relation</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Branding</h3>
                                <p class="card-text">Put enim ad minim veniam</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="../../clients/img/bookingcare-cover-4.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Creative Design</h3>
                                <p class="card-text">Mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

            </div>
        </div>
    </section>
    <!-- End Recent Work -->
<div class="modal" id="reader" role="dialog"></div>
<!-- End Recent Work -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_About.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Home.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_About = new JS_About(baseUrl, 'client', 'about', 'home');
    var JS_Home = new JS_Home(baseUrl, 'client', 'home');
    $(document).ready(function($) {
        JS_Home.loadIndex(baseUrl);
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