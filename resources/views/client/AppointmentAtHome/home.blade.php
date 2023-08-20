@extends('client.layouts.index')
@section('body-client')
<style>
    form{
        width:80%;
    }
    .form-control:disabled{
        background-color:#ffffff
    }
    .hiddel{
        display: none;
    }
    .show{
        display: block;
    }

      .scrollbar
    {
      margin-left: 30px;
      /* float: left; */
      height: 300px;
      /* width: 65px; */
      /* background: #F5F5F5; */
      overflow-y: scroll;
      margin-bottom: 25px;
    }

    .force-overflow
    {
      min-height: 300px;
    }

    #wrapper
    {
      text-align: center;
      width: 500px;
      margin: auto;
    }

    /*
    *  STYLE 2
    */

    #style-2::-webkit-scrollbar-track
    {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      border-radius: 10px;
      background-color: #F5F5F5;
    }

    #style-2::-webkit-scrollbar
    {
      width: 12px;
      background-color: #F5F5F5;
    }

    /* #style-2::-webkit-scrollbar-thumb
    {
      border-radius: 10px;
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
      background-color: #D62929;
    } */
    .tv-lightweight-charts{
      width: 100%;
      padding-right: var(--bs-gutter-x, 0.5rem) !important;
      padding-left: var(--bs-gutter-x,0.5rem)!important;
      margin-right: auto!important;
      margin-left: auto!important;
    }
    /* .table{
        border-color: #670000;
    } */
    .table-responsive.pmd-card.pmd-z-depth{
      height: 100%;
      max-height: 300px;
    }
    #style-1 #table-data thead tr td{
      position: sticky;
      top: 0;
      background: #92241a;
    }

    #frmSendSchedule{
        width: 100%;
    }
    #carouselExampleIndicators input[type=text], input[type=email], input[type=password], input[type=date] {
        padding: 12px 40px;
        display: inline-block;
        border: 1px solid #ccc;
    }
    #carouselExampleIndicators textarea{
        padding: 5px 40px;
        display: inline-block;
        border: 1px solid #ccc;
    }

    /* Set a style for the buttons*/
    #carouselExampleIndicators button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Set a hover effect for the button*/
    #carouselExampleIndicators button:hover {
        opacity: 0.8;
    }

    /* Set extra style for the cancel button*/
    #carouselExampleIndicators .container {
        padding: 16px;
    }

    #carouselExampleIndicators .form-input {
        position: relative;
    }

    #carouselExampleIndicators .form-input i {
        position: absolute;
        left: 24px;
        top: 12px;
        color: gray;
    }
    .message-error{
        display: none;
        color: red;
    }
    .error-input{
        border: 1px solid red;
    }
    .error-icon{
        color: red !important;
    }
    .error-input::placeholder{
        color: red;
    }
    .padding-style{
        padding-top:15px
    }
</style>
<link rel="stylesheet" href="../clients/css/style.css">
    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light" >
        <div id="index_banner" class="banner-vertical-center-index">
            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner active pt-5" >
                     <!-- <div class="list-hispital-home-one pt-5">
                        <section class="banner-bg">
                            <span  class="text-title-home "><center> ĐĂNG KÝ KHÁM NHANH</center></span>
                        </section>
                        
                     </div> -->
                     
                    <!-- End Contact -->
                    <div class="carousel-item active list-hispital-home" >
                        <div class=" row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-10 offset-1 m-lg-auto text-left ">
                                <div class="row g-lg-5 mb-4">
                                    <div class="banner-wrapper w-100" style="background:#ffffffba;color:black">
                                        <div class="row g-lg-5 mb-4">
                                            <div class="banner-wrapper w-100 py-3" style="background:#15283dd6">
                                                <div class="list-group wrapper pb-0 px-3">
                                                    <a class="col-sm-6 col-lg-12 text-decoration-none text-light">
                                                        <div class="d-lg-flex gx-5">
                                                            <div class="col-lg-3">
                                                                <img class="card-img-top" src="{{url('/clients/img/laymautainha.jpeg')}}" style="width:250px;height:150px;object-fit: cover;" alt="...">
                                                            </div>
                                                            <div class="col-lg-1 "></div>
                                                            <div class="col-lg-8 ">
                                                            <span  class="text-title-home" style="color:#ff9300"><center> Lấy mẫu tại nhà</center></span>
                                                            <span  style="font-size:20px">Lấy mẫu xét nghiệm tại nhà giúp khách hàng chủ động tầm soát bệnh lý. Đồng thời tiết kiệm thời gian đi lại, chờ đợi kết quả với mức chi phí hợp lý.</span>
                                                        </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" pb-0 px-3">
                                        <span  class="text-title-home" style="color:#226c28c9" ><center> Thông tin</center></span>

                                        <div class="wrapper" style="display: flex; justify-content: center;">
                                            <form id="frmSendSchedule" method="POST"  autocomplete="off">
                                                @csrf
                                                <!-- <input type="hidden" id="code" name="code" value="{{ !empty($datas->code)?$datas->code:'' }}"> -->
                                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" id="type_at_home" name="type_at_home" value="XET_NGHIEM">
                                                <div id="iss_money"></div>
                                                <!-- <div class="row">
                                                    <div class="form-wrapper col-md-6">
                                                        <label for="">Họ và tên <span class="request_star">*</span></label>
                                                        <input placeholder="Nhập tên..." id="name" type="text" class="form-control" name="name" value="" autofocus>
                                                    </div>
                                                    <div class="form-wrapper col-md-6">
                                                        <label for="">Số điện thoại <span class="request_star">*</span></label>
                                                        <input placeholder="Số điện thoại..." id="phone" type="phone" class="form-control" name="phone" value="">
                                                    </div>
                                                    @if (isset($_SESSION['role']) && $_SESSION['role'] == 'CTV')
                                                    <div class="form-wrapper col-md-12">
                                                        <label for="">Mã bệnh nhân trên ống nghiệm</label>
                                                        <input required placeholder="Nhập mã..." id="code_patient" type="code_patient" class="form-control" name="code_patient" value="">
                                                    </div>
                                                    @endif
                                                </div> -->
                                                 <div class="row mt-3">
                                                    <div class="form-input col-md-6 padding-style">
                                                        <input type="text" class="form-control required" placeholder="Họ và tên bệnh nhân..." name="name" id="name" oninput="inValid(this.id)">
                                                        <i class="fa fa-user uname-icon padding-style"></i>
                                                        <span class="message-error uname-error">Họ và tên bệnh nhân không được để trống!</span>
                                                    </div>
                                                    <div class="form-input col-md-6 padding-style">
                                                        <input type="text" class="form-control required" placeholder="Số điện thoại..." name="phone" id="phone" oninput="inValid(this.id)">
                                                        <i class="fas fa-phone phone-icon padding-style"></i>
                                                        <span class="message-error phone-error">Số điện thoại không được để trống!</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="form-input col-md-6">
                                                        <input type="text" 
                                                            onfocus="(this.type='date')"
                                                            onblur="(this.type='text')" class="form-control required" placeholder="Ngày sinh..." name="date_birthday" id="date_birthday" oninput="inValid(this.id)">
                                                        <i class="fa fa-calendar-alt uname-icon"></i>
                                                        <!-- <i class="fas fa-calendar-alt"></i> -->
                                                        <span class="message-error uname-error">Ngày sinh không được để trống!</span>
                                                    </div>
                                                    <div class="form-input col-md-6 padding-style">
                                                        <input type="radio" value="1" name="sex" id="sex" />  <span style="padding-left:5px" >Nam</span>&emsp;
                                                        <input  type="radio" value="2" name="sex" id="sex"  /> <span style="padding-left:5px" >Nữ</span>
                                                        <span class="message-error phone-error">Giới tính không được để trống!</span>
                                                    </div>
                                                </div>
                                                @if (isset($_SESSION['role']) && $_SESSION['role'] == 'CTV')
                                                <div class="row mt-3">
                                                    <div class="form-input col-md-6 padding-style">
                                                        <input type="text" class="form-control required" placeholder="Mã bệnh nhân trên ống nghiệm..." name="code_patient" id="code_patient" oninput="inValid(this.id)">
                                                        <i class="fa fa-vial uname-icon padding-style"></i>
                                                        <span class="message-error uname-error">Mã bệnh nhân trên ống nghiệm không được để trống!</span>
                                                    </div>
                                                    <div class="form-input col-md-6 padding-style">
                                                        <input type="text" class="form-control required" placeholder="Mã bác sĩ..." name="code_doctor" id="code_doctor" oninput="inValid(this.id)">
                                                        <i class="fa fa-user-nurse uname-icon padding-style"></i>
                                                        <span class="message-error uname-error">Mã bác sĩ không được để trống!</span>
                                                    </div>
                                                </div>
                                                <div class="form-wrapper col-md-12">
                                                    <!-- <label for="">Loại xét nghiệm chỉ định</label> -->
                                                    <div class="row">
                                                        <div class="col-lg-6 mx-auto " style="display:flex">
                                                            <div class="input-group pt-2 box">
                                                                <input id="myInput" onkeyup="myFunction()"style="background:#ffffffb5" type="text" class="input form-control form-control-lg" placeholder="Tìm kiếm gói - tên chỉ số" aria-label="Tìm kiếm gói - tên chỉ số">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="style-1" style="padding-right:10px;">
                                                        <div class="table-responsive pmd-card pmd-z-depth table-container" style="padding:0px">
                                                            <table id="myTable" class="table  table-bordered table-striped table-condensed dataTable no-footer">
                                                                <!-- <thead>
                                                                    <tr>
                                                                        <td style="white-space: inherit;vertical-align: middle;" align="center"><b>Chọn chỉ mục</b></td>
                                                                        <td style="white-space: inherit;vertical-align: middle;" align="center"><b>Tên chỉ số</b></td>
                                                                        <td style="white-space: inherit;vertical-align: middle;" align="center"><b>Giá chỉ số</b></td>
                                                                    </tr>
                                                                </thead> -->
                                                                <tbody id="body_data" style="background: #fdffff;">
                                                                        @foreach ($type_chidinh as $key => $values)
                                                                            <tr>
                                                                                <!-- <td style="white-space: inherit;vertical-align: middle;" align="center"></td> -->
                                                                                <td style="white-space: inherit;vertical-align: middle;" >
                                                                                <input onclick="JS_AppointmentAtHome.showPack('{{$code_blood}}')" type="checkbox" value="{{ isset($values['code']) ? $values['code'] : '' }}" name="code_indications" id="code_indications"/> 
                                                                                <span style="color:red">{{ isset($values['code']) ? $values['code'] : '' }}</span> - <span style="color:#ff8a06">{{ isset($values['price']) ? $values['price'] : '' }}  </span> <span style="font-size:10px">VND </span>  <br>
                                                                                <span style="font-size:12px"> ( {{ isset($values['name']) ? $values['name'] : '' }} )</span> 
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="iss"></div>
                                                @else
                                                <div class="form-wrapper col-md-12 padding-style">
                                                    <label for="">Loại xét nghiệm</label>
                                                    <select onchange="JS_AppointmentAtHome.getPrice(this.value)" class="form-control input-sm chzn-select" name="code" id="code">
                                                        <option value="">--Chọn loại--</option>
                                                        @foreach($type_xetnghiem as $key => $values) 
                                                            <option value="{{$values['code']}}" {{($values['code'] == $code) ? 'selected' : ''}}>{{$values['name']}}</option>
                                                        @endforeach 
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="form-wrapper col-md-4">
                                                        <label for="">Giá gói khám <span class="request_star">*</span></label>
                                                        <div id="price">
                                                             <input  type="hidden" class="form-control" id="money" name="money" value="{{$money}}" autofocus> 
                                                             <input  disabled type="text" class="form-control" value="{{$total}} VND" autofocus> 
                                                        </div>
                                                    </div>
                                                    <div id="infor" class="form-wrapper col-md-3">
                                                        <label for="">Gồm {{$count}} chỉ số</label>
                                                        <button onclick="JS_AppointmentAtHome.showInfor('{{$code_blood}}')" type="button" style="width: 120px;" class="btn-warning"><i class="fas fa-hand-point-right"></i> &nbsp;Chi tiết</button>
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="row mt-3">
                                                    <div class="form-input col-md-6 padding-style">
                                                        <select style="color:#757e87" class="form-control input-sm chzn-select required" name="hour_sampling" id="hour_sampling">
                                                            <option  value=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chọn giờ lấy mẫu  </option>
                                                            <option value="05h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;05 giờ 30 phút</option>
                                                            <option value="06h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;06 giờ 00 phút</option>
                                                            <option value="06h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;06 giờ 30 phút</option>
                                                            <option value="07h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;07 giờ 00 phút</option>
                                                            <option value="07h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;07 giờ 30 phút</option>
                                                            <option value="08h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08 giờ 00 phút</option>
                                                            <option value="08h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08 giờ 30 phút</option>
                                                            <option value="09h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;09 giờ 00 phút</option>
                                                            <option value="09h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00 giờ 30 phút</option>
                                                            <option value="10h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10 giờ 00 phút</option>
                                                            <option value="10h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10 giờ 30 phút</option>
                                                            <option value="11h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11 giờ 00 phút</option>
                                                            <option value="11h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11 giờ 30 phút</option>
                                                            <option value="13h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13 giờ 30 phút</option>
                                                            <option value="14h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14 giờ 00 phút</option>
                                                            <option value="14h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14 giờ 30 phút</option>
                                                            <option value="15h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15 giờ 00 phút</option>
                                                            <option value="15h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15 giờ 30 phút</option>
                                                            <option value="16h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 giờ 00 phút</option>
                                                            <option value="16h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 giờ 30 phút</option>
                                                            <option value="17h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17 giờ 00 phút</option>
                                                            <option value="17h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17 giờ 30 phút</option>
                                                            <option value="18h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18 giờ 00 phút</option>
                                                            <option value="17h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17 giờ 30 phút</option>
                                                            <option value="18h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18 giờ 00 phút</option>
                                                            <option value="18h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18 giờ 30 phút</option>
                                                            <option value="19h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19 giờ 00 phút</option>
                                                            <option value="19h30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19 giờ 30 phút</option>
                                                            <option value="20h00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20 giờ 00 phút</option>
                                                        </select>
                                                        <i class="fa fa-hourglass-half uname-icon padding-style"></i>
                                                        <span class="message-error uname-error">Giờ lấy mẫu không được để trống!</span>
                                                    </div>

                                                    <div class="form-input col-md-6 padding-style">
                                                    <!-- onfocus="(this.type='date')"
                                                            onblur="(this.type='text')" -->
                                                        <input  type="date" class="form-control required" placeholder="Ngày lấy mẫu..." name="date_sampling" id="date_sampling" oninput="inValid(this.id)">
                                                        <i class="fa fa-calendar-alt uname-icon padding-style"></i>
                                                        <span class="message-error uname-error">Ngày lấy mẫu không được để trống!</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="form-input col-md-12 padding-style">
                                                        <textarea style="height:70px" type="text" class="form-control required" placeholder="Địa chỉ chi tiết..." name="address" id="address" oninput="inValid(this.id)"></textarea>
                                                        <i class="fa fa-map-marker-alt uname-icon padding-style"></i>
                                                        <span class="message-error uname-error">Địa chỉ chi tiết không được để trống!</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="form-input col-md-12 padding-style">
                                                        <textarea style="height:100px" class="form-control required" placeholder="Triệu chứng lâm sàng ..." name="reason" id="reason" oninput="inValid(this.id)"rows="4" cols="50"></textarea>
                                                        <i class="fas fa-comment-dots uname-icon padding-style"></i>
                                                        <span class="message-error uname-error">Triệu chứng lâm sàng không được để trống!</span>
                                                    </div>
                                                </div>
                                                <!-- // -->
                                                @if (isset($_SESSION['role']) && $_SESSION['role'] == 'CTV')
                                                <div class="row form-group pt-4" id="div_hinhthucgiai">
                                                    <div class="col-md-12" >
                                                        <label style="font-size:20px;font-family: math;" for="">Chọn hình thức thanh toán <span class="request_star">*</span></label> <br>
                                                        
                                                    </div>
                                                </div>
                                                <input type="radio" onchange="JS_AppointmentAtHome.getTypeBank(this.value)" value="BANK" name="type_payment" id="type_payment"/> <span style="padding-left:5px" >Chuyển khoản ngân hàng bằng mã QR</span><br>
                                                <!-- <div id="bank"></div> -->
                                                <div id="bank" class="hiddel">
                                                    <div class="row" style="background: #ffc686;">
                                                        <div class="form-wrapper col-md-3 pt-3">
                                                            <img style="width:100%;" class="card-img " src="../clients/img/qrluatnc.jpg" alt="Card image">
                                                        </div>
                                                        <div class="form-wrapper col-md-9 pt-3">
                                                            <span>Số Tài khoản: 097871279812</span><br>
                                                            <span>Tên chủ Tài khoản: Công ty Cổ phần Công nghệ Booking</span><br>
                                                            <span>Ngân Hàng: Ngân hàng Thương mại cổ phần kỹ Thương Việt Nam (techcombank)</span><br>
                                                            <span>Chi nhánh: Hội sở chính</span><br>
                                                            <span>Nội dung thanh toán:Tên khách hàng - số điện thoại - mã đặt lịch</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <input  type="radio" onchange="JS_AppointmentAtHome.getTypeBank('tienmat')" value="TIEN_MAT" name="type_payment" id="type_payment"/> <span style="padding-left:5px" >Thanh toán tiền mặt</span>
                                                <div id="tienmat" class="hiddel">
                                                </div>
                                                @endif
                                                <!-- // -->
                                                @if (isset($_SESSION['role']) && $_SESSION['role'] == 'CTV')
                                                <div class="pt-3 mb-3">
                                                    <button type="button" onclick="JS_AppointmentAtHome.add()" class=" btn-primary" id="btn_register" style="background-color: slategrey">
                                                        {{ __('Thanh toán') }}
                                                    </button>
                                                </div>
                                                @else
                                                <div class="pt-3 mb-3">
                                                    <button type="button" onclick="JS_AppointmentAtHome.add()" class=" btn-primary" id="btn_register" style="background-color: slategrey">
                                                        {{ __('Đặt lịch') }}
                                                    </button>
                                                </div>
                                                @endif
                                            </form>
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
<div class="modal fade" id="editmodal" role="dialog"></div>
<div class="modal " id="addfile" role="dialog"></div>
<div class="modal " id="show" role="dialog"></div>

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
<div id="dialogconfirm"></div>
    <!-- End Service -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_AppointmentAtHome.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    function inValid(id){
        console.log(id);
        if($("#" + id).val() != ''){
            $('.' + id + '-error').css("display", "none");
            $('.' + id + '-icon').removeClass("error-icon");
        }
    }
    $("#frmSendSchedule div.form-input").each(function(key, value){
        $(this,'input').focusout(function(){
            if($(this).find('input').hasClass('required') && $(this).find('input').val() == ''){
                $(this).find('.message-error').css("display", "block");
                $(this).find('input').addClass('error-input');
                $(this).find('i').addClass('error-icon');
            }else if($(this).find('textarea').hasClass('required') && $(this).find('textarea').val() == ''){
                $(this).find('.message-error').css("display", "block");
                $(this).find('input').addClass('error-input');
                $(this).find('i').addClass('error-icon');
            }
        });
    });
    var baseUrl = "{{ url('') }}";
    var JS_AppointmentAtHome = new JS_AppointmentAtHome(baseUrl, 'client', 'appointmentathome');
    $(document).ready(function($) {
        JS_AppointmentAtHome.loadIndex(baseUrl);
    })
</script>
@endsection