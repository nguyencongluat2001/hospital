@extends('client.layouts.index')
@section('body-client')
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

    <!-- Start Banner Hero -->
    <form action="" method="GET" id="frmHospital">
    <input style="display:none" type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <div class="banner-wrapper bg-light" >
            <div id="index_banner_facilities" class="banner-vertical-center-index">
            <!-- <div class="banner-vertical-center-index" style="background:#163048d4"> -->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner active pt-4" >
                        <div class="list-hispital-home-one pt-5">
                            <section class="banner-bg">
                                <span  class="text-title-home "><center> BỆNH VIỆN PHÒNG KHÁM <br>TẠI CÁC TUYẾN TRUNG ƯƠNG</center></span>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 mx-auto " style="display:flex">
                                            <div class="input-group pt-2 box">
                                                  <input id="myInput" onkeyup="myFunction()"style="background:#ffffffb5" type="text" class="input form-control form-control-lg rounded-pill rounded" placeholder="Từ kiếm tên bệnh viện..." aria-label="Từ kiếm tên bệnh viện..">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- <div class="carousel-item active list-hispital-home pt-5">
                            <div class=" row d-flex align-items-center">
                                <div class="banner-content col-lg-10 col-10 offset-1 m-lg-auto text-left ">
                                        <section class="container">
                                            <div class="row gx-lg-5">
                                                 <div class="row" id="table-container" style="padding-top:10px">
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="carousel-item active list-hispital-home pt-5">
                            <div class=" row d-flex ">
                                <div class="banner-content col-lg-12 col-12 m-lg-auto text-left ">
                                        <!-- Start Our Work -->
                                        <section class="container">
                                            <table id="myTable" class="table  table-bordered table-striped table-condensed dataTable no-footer">
                                                <tbody>
                                                    @foreach ($datas as $key => $data)
                                                        <tr>
                                                            <td style="background: #ffffffeb;width:30%;vertical-align: middle;" align="center">
                                                                <a class="pb-5" style="text-decoration: none" href="{{url('/facilities')}}/{{$data->code}}">
                                                                    <img  src="{{url('/file-image-client/avatar-hospital/')}}/{{ !empty($data->avatar)?$data->avatar:'' }}" alt="Image" style="height: 200px;width: 250px;object-fit: cover;">
                                                                    <span style="padding-left:10px;font-size: 30px;font-family: -webkit-body;color: #1d3952;">{{ $key + 1 }}.&nbsp;{{$data->name_hospital}}</span>
                                                                    <span style="padding-left:10px;font-size: 18px;font-family: -webkit-body;color: #ff0000;">({{$data->address}})</span><br>
                                                                </a>
                                                            </td>
                                                            
                                                        </tr> 
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </section>
                                        <!-- <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left pt-5">
                                            <div class="row g-lg-5 mb-4">
                                            <table id="myTable" class="table  table-bordered table-striped table-condensed dataTable no-footer">

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
                                            @endforeach
                                            </table>

                                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-center py-2 pb-2">
                                                    <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4 " href="{{url('/facilities')}}" role="button">Xem thêm</a>
                                                </div>
                                            </div>
                                        </div> -->
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