@extends('client.layouts.index')
@section('body-client')
    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light" >
        <div id="index_banner_detail" class="banner-vertical-center-index">
            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner active pt-5" >
                     <div class="list-hispital-home-one pt-5">
                        <section class="banner-bg">
                            <span  class="text-title-home "><center> ĐẶT LỊCH KHÁM NHANH <br>TẠI CÁC TUYẾN TRUNG ƯƠNG</center></span>
                        </section>
                     </div>
                    <!-- End Contact -->
                    <div class="carousel-item active list-hispital-home pt-5" >
                        <div class=" row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left ">
                                <div class="row g-lg-5 mb-4">
                                    <div class="banner-wrapper w-100 py-5" style="background:#11334445">
                                        <div class="card-header pb-0 px-3">
                                            <div class="">
                                                <ul class="list-group">
                                                    <div  class="col-sm-6 col-lg-12 text-decoration-none">
                                                        <div class="pb-3 d-lg-flex gx-5">
                                                            <div class="col-lg-4 ">
                                                                <img class="card-img-top" src="{{url('/file-image-client/avatar-specialty/')}}/{{ !empty($datas->avatar)?$datas->avatar:'' }}" style="height: 150px;object-fit: cover;" alt="...">
                                                            </div>
                                                            <div class="col-lg-1 "></div>
                                                            <form id="frmSpecialty" method="POST"  autocomplete="off">
                                                                @csrf
                                                                <input type="hidden" id="code_Specialty" name="code_Specialty" value="{{ !empty($datas->code)?$datas->code:'' }}">
                                                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                                                    <div class="col-lg-12 ">
                                                                        <h5 style="color:#ffd877;font-size: 40px;font-family: serif;font-weight: 600;">Chuyên khoa: {{ !empty($datas->name_specialty)?$datas->name_specialty:'' }}</h5>
                                                                        <div class="form-wrapper col-md-12">
                                                                            <!-- <select onchange="JS_Specialty.getHospital('{{$datas->code}}',this.value)" class="form-control input-sm chzn-select" name="code_specialty" id="code_specialty">
                                                                                <option value="">--Chọn phòng khám--</option>
                                                                                @foreach($hospital as $key => $values) 
                                                                                    <option value="{{$values['code']}}">{{$values['name_hospital']}}</option>
                                                                                @endforeach 
                                                                            </select> -->
                                                                        </div>  <br>
                                                                        <div id="hospital">
                                                                        <!-- <span  onclick="JS_Specialty.warning()" class="btn rounded-pill btn-success text-light px-4 light-300">
                                                                            Đặt lịch khám
                                                                        </span> -->
                                                                    </div>
                                                                    </div>
                                                            </form>
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
        <span style="color:#00d3ff" class="text-title-home pl-2">
              <center> Phòng khám</center>
        </span>
    </div>
    <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left pt-5">
        <div class="row g-lg-5 mb-4">
        @foreach ($hospital as $key => $data)
            <!-- Start Recent Work -->
            <div class="col-md-6 mb-4">
                <a  href="{{url('/schedule')}}/{{$datas['code']}},{{$data['code']}}" class=" card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" style="height: 250px;object-fit: cover;" src="{{url('/file-image-client/avatar-hospital/')}}/{{ !empty($data['avatar'])?$data['avatar']:'' }}" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div style="background:#f5f6ffe3;border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                           <span style="padding:10px">
                                <h3 class="card-title" style="font-weight: 600;;color:#365270;padding:10px;font-size: 23 !important;">{{$data['name_hospital']}}</h3>
                                    <span class="card-title" style="color:#365270;padding:10px;font-size: 14 !important;"><i class="fas fa-map-marker-alt"></i> {{$data['address']}}</span> <br> <br>
                           </span>

                        </div>
                    </div>
                   
                </a>
                <br>
                <a href="{{url('/schedule')}}/{{$datas['code']}},{{$data['code']}}">
                    <center>
                        <span style="color: #ffd100;background: #00b9e5;" class="btn btn-outline-light rounded-pill">Đặt lịch khám</span>
                    </center>
                </a>
                

            </div><!-- End Recent Work -->
        @endforeach
        </div>
    </div>
    <div class="banner-vertical-center-work container d-flex justify-content-center align-items-center">
        <div class="banner-content col-lg-10 col-10 m-lg-auto text-left">
            <div style="color:#264451" class="light-300">
                    {!! $datas->decision !!} 
            </div>
        </div>
    </div>
    <!-- End Service -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Specialty.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_Specialty = new JS_Specialty(baseUrl, 'client', 'specialty');
    $(document).ready(function($) {
        JS_Specialty.loadIndex(baseUrl);
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