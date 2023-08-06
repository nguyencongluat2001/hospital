@extends('client.layouts.index')
@section('body-client')
<style>
    form{
        width:80%;
    }
</style>
<style> 
.test {
  width: 100px;
  height: 100px;
  background-color: red;
  position: relative;
  animation-name: example;
  animation-duration: 6s;
}

@keyframes example {
  0%   {background-color:red; left:0px; top:0px;}
  100%  {background-color:yellow; left:50%; top:0px;}
  100%  {background-color:yellow; left:50%; top:0px;}
  100%  {background-color:yellow; left:50%; top:0px;}

}
</style>
<link rel="stylesheet" href="../clients/css/style.css">
    <!-- Start Banner Hero -->
    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light" >
        <div id="index_banner" class="banner-vertical-center-index">
            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                </ol> -->
                <div class="carousel-inner active pt-4" >
                     <!-- Start Contact -->
                     <div class="list-hispital-home-one pt-5">
                        <section class="banner-bg">
                        <!-- style="animation: lights 4s 750ms linear infinite;" -->
                            <span  class="text-title-home "><center> XÉT NGHIỆM TẠI NHÀ </center></span>
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
                     <!-- <div class="test"></div> -->

                    <!-- End Contact -->
                    <div class="carousel-item active list-hispital-home pt-3">
                        <div class=" row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left ">
                                <div class="row g-lg-5 mb-4">
                                    @foreach ($datas as $key => $data)
                                        <!-- Start Recent Work -->
                                        <div class="col-md-4 mb-4">
                                        <!-- recent-work  -->
                                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$data['code']}}" class="card border-0 shadow-lg overflow-hidden">
                                                <img class="recent-work-img card-img" style="height: 150px;object-fit: cover;" src="{{url('/clients/img/laymautainha.jpeg')}}" alt="Card image">
                                                <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                                    <div style="background: #00000045;border-radius: 5px" class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                        <h3 class="card-title" style="font-weight: 600;;padding:10px;font-size: 15px !important;font-family: auto;">{{$data['name']}}</h3>
                                                    </div>
                                                </div>
                                            </a>
                                            <center>
                                                <a href="{{url('/client/appointmentathome/tab1/')}}/{{$data['code']}}">
                                                    <span style="background: #ffba4b; color: #0d1226;" class="btn btn-outline-light rounded-pill">Đặt lịch</span>
                                                 </a>
                                            </center>
                                        </div>
                                        <!-- End Recent Work -->
                                    @endforeach

                                </div>
                                <!-- <center><span class="famous-saying">"Chỉ khi người giàu ốm họ mới thực hiểu sự bất lực của giàu sang"</span></center> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Banner Hero -->
    <section class="bg-light w-100">
        <div class="container">
            <div class="row d-flex align-items-center py-5">
                <div class="col-lg-6 text-start" >
                    <h1 style="color: #7fd6ff!important;font-family: serif;" class="h2 py-5 typo-space-line">ĐIỂM KHÁC BIỆT KHI SỬ DỤNG DỊCH VỤ XÉT NGHIỆM TẠI NHÀ</h1>
                    <p class="">
                    Tiện lợi: Việc làm xét nghiệm tại nhà giúp tiết kiệm thời gian và công sức di chuyển đến cơ sở y tế. Người dùng có thể sắp xếp thời gian và địa điểm phù hợp cho việc làm xét nghiệm.
                    </p>
                    <div class="row g-lg-5 mb-4" >
                        <!-- Start Recent Work -->
                        <div class="col-md-4 mb-4">
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$data['code']}}" class="recent-work card border-0 shadow-lg overflow-hidden">
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
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$data['code']}}" class="recent-work card border-0 shadow-lg overflow-hidden">
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
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$data['code']}}" class="recent-work card border-0 shadow-lg overflow-hidden">
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
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$data['code']}}" class="recent-work card border-0 shadow-lg overflow-hidden">
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
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$data['code']}}" class="recent-work card border-0 shadow-lg overflow-hidden">
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
                            <a href="{{url('/client/appointmentathome/tab1/')}}/{{$data['code']}}" class="recent-work card border-0 shadow-lg overflow-hidden">
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
    <section class="container py-5">
        <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">

            <div class="col-lg-3">
                <h2 style="color: #7fd6ff!important;font-family: serif;" class="h2 py-5 typo-space-line">ĐỘI NGŨ BÁC SĨ CỦA CHÚNG TÔI</h2>
                <p class="text-muted ">
                Đội ngũ y bác sĩ giỏi, giàu kinh nghiệm, tận tâm, nhiệt huyết. Cán bộ lấy mẫu chuyên nghiệp có chứng chỉ hành nghề. Mang lại cho bệnh nhân cảm giác thân thiện, thoải mái nhất.
                </p>
            </div>

            <div class="col-lg-9 row">
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4"style="width:300px;height: 300px;object-fit: cover;" src="{{url('/clients/img/bacsi1.webp')}}" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted ">
                        <li>Văn Chung</li>
                    </ul>
                </div>
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4"style="width:300px;height: 300px;object-fit: cover;" src="{{url('/clients/img/bacsi2.webp')}}" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted ">
                        <li>Hồng Ngân</li>
                    </ul>
                </div>
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4"style="width:300px;height: 300px;object-fit: cover;" src="{{url('/clients/img/bacsi3.webp')}}" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted ">
                        <li>Quốc Anh</li>
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
                        <i class="display-4 bx bxs-bulb text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Khám tổng quát từ medlatec</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class='display-4 bx bx-revision text-light'></i> -->
                        <i class="fas fa-thermometer fa-4x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Truyền dịch y tế</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <i class="display-4 bx bxs-select-multiple text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Cấp cứu hồi sức</h2>
                </div>

            </div>
        </div>
        <div class="container my-4">
            <div class="row text-center">

                <div class="objective col-lg-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class="display-4 bx bxs-bulb text-light"></i> -->
                        <i class="fas fa-heartbeat fa-4x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Đo điện tim</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class='display-4 bx bx-revision text-light'></i> -->
                        <i class="fas fa-video fa-4x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Chụp X-quang</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class="display-4 bx bxs-select-multiple text-light"></i> -->
                        <i class="fas fa-tint fa-4x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Xét nghiệm máu</h2>
                </div>

            </div>
        </div>
    </section>
    <!-- End Aim -->

    <!-- Start Contact -->
    <section class="banner-bg bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto my-4 p-3">
                    <h1 style="color: #7fd6ff!important;font-family: serif;" class="h2 text-center">CHUYÊN GIA</h1>
                    <p><b>PGS TS Nguyễn Nghiêm Luật “Thầy phù thủy” mang lại sự sống với nhiều công trình nghiên cứu y khoa</b></p>
                    <p><b>Ở tuổi 72, PGS.TS Nguyễn Nghiêm Luật vẫn vững bước tiến lên trong sự nghiệp Y tế, vừa là Thầy thuốc, vừa là Thầy giáo, Nhà Nghiên cứu Khoa học được nhiều người yêu mến và quý trọng.</b></p>
                    <img class="recent-work-img card-img" style="object-fit: cover;" src="{{url('/clients/img/giaosu.webp')}}" alt="Card image">
                    <br>
                    <p></p>
                    <p>PGS. TS Nguyễn Nghiêm Luật sinh ngày 14/10/1945, quê ở Lạng Sơn. Từ những năm 1970, sau khi tốt nghiệp, thầy đã là giảng viên bộ môn Hóa Sinh trường Đại học Y Hà Nội và không ngừng học hỏi, tìm tòi nghiên cứu khoa học và tiếp tục học lên cao với những công trình nghiên cứu mang tính ứng dụng và thực tiễn cao trong y học và cuộc sống. Từ tháng 10/1982 - 9/1983, PGS.TS Nguyễn Nghiêm Luật là Nghiên cứu sinh, Khoa Tiếng Anh, Trường Đại học Ngoại ngữ Hà Nội. Từ tháng 10/1983 - 5/1988 là Nghiên cứu sinh, Trường Đại học Y Szemmelweis, Budapest, Hungary. Bằng kinh nghiệm và năng lực của mình, năm 1999, PGS. TS Nguyễn Nghiêm Luật được tín nhiệm chức Phó Trưởng bộ môn Hóa Sinh trường Đại học Y Hà Nội. PGS.TS Nguyễn Nghiêm Luật còn là chủ biên của hai cuốn sách (Thực tập Hóa Sinh, Nhà xuất bản Y học, 2003 và Hóa Sinh Y học, Nhà xuất bản Y học, 2007) và tham gia biên soạn 7 cuốn sách Hóa sinh và Chuyên đề Hóa sinh.</p>
                    <p>Những công trình nghiên cứu khoa học và những cuốn sách về Hóa sinh học của thầy là những tài liệu quý và hữu ích cho nhiều thế hệ sinh viên Y trong toàn quốc. Một trong những công trình của thầy được ứng dụng nhiều nhất là “Nghiên cứu phát hiện biến đổi gen trong ung thư đại trực tràng” (Đề tài Cấp Bộ Y tế 2006 - 2009). Công trình của PGS.TS Nguyễn Nghiêm Luật đã giúp phát hiện sớm ung thư đại trực tràng ở những bệnh nhân và những người thân trong gia đình mang các đột biến trên gen APC để có biện pháp điều trị sớm ngay cả khi bệnh chưa xuất hiện, giúp họ tránh được nguy cơ tử vong.</p>
                    <p>Danh hiệu, giải thưởng:</p>
                    <span>- Nhiều năm là Chiến sĩ Thi đua cấp Trường và Cấp Bộ Y tế;</span><br>
                    <span>- Danh hiệu Nhà giáo Ưu tú (2000);</span><br>
                    <span>- 2 Bằng Lao động Sáng tạo (2000, 2002);</span><br>
                    <span>- Huy chương Vì Sự nghiệp Giáo dục (2004);</span><br>
                    <span>- Huy chương Vì Sự nghiệp Giáo dục (2004);</span><br> <br>
                    <p>PGS TS Nguyễn Nghiêm Luật - Nguyên trưởng Khoa Hóa sinh - Đại học Y Hà Nội, Giám đốc Chuyên môn Bệnh viện Đa khoa MEDLATEC. Ở tuổi 72, PGS.TS Nguyễn Nghiêm Luật vẫn vững bước tiến lên trong sự nghiệp Y tế, vừa là Thầy thuốc, vừa là Thầy giáo, Nhà Nghiên cứu Khoa học được nhiều người yêu mến và quý trọng. Những bài báo cáo khoa học và công trình nghiên cứu Khoa học của thầy đã mang đến những tri thức cho đông đảo các bác sĩ trên mọi miền đất nước. Và giờ đây PGS.TS Nguyễn Nghiêm Luật đã về hỗ trợ và công tác về mặt cố vấn Y Khoa cho MEDHN từ năm 2021.</p>
                   <p>Gần 50 năm miệt mài học tập và nghiên cứu, PGS.TS Nguyễn Nghiêm Luật đã chủ trì và tham gia nhiều công trình nghiên cứu và đã công bố trên 100 bài báo khoa học ở trong nước và quốc tế và vẫn không ngừng học hỏi và nghiên cứu nhiều công trình mới.</p>
                   <p>Với PGS.TS Nguyễn Nghiêm Luật, khoa học phải gắn liền với thực tiễn, phải được ứng dụng trong đời sống chứ không chỉ là trên sách vở vì vậy các đề tài nghiên cứu của thầy cũng mang tính ứng dụng cao.</p>
                   <p>Công trình của PGS.TS Nguyễn Nghiêm Luật đã giúp phát hiện sớm ung thư đại trực tràng ở những bệnh nhân và những người thân trong gia đình mang các đột biến trên gen APC để có biện pháp điều trị sớm ngay cả khi bệnh chưa xuất hiện, giúp họ tránh được nguy cơ tử vong.</p>
                   <p>Với những đóng góp trong lĩnh vực khoa học về y học, Thầy đã được Nhà trước trao tặng nhiều giải thưởng cao quý: - Nhiều năm là Chiến sĩ Thi đua cấp Trường và Cấp Bộ Y tế, Danh hiệu Nhà giáo Ưu tú (2000), 2 Bằng Lao động Sáng tạo (2000, 2002), Huy chương Vì Sự nghiệp Giáo dục,(2004), Huy chương Vì Sức khỏe Nhân dân (2004).</p>
                   <p>Mỗi ngày, PGS.TS Nguyễn Nghiêm Luật vẫn thường dậy sớm để bắt xe bus, đi trên mười cây số đến bệnh viện như bao người lao động bình dân và học sinh sinh viên khác. Trong cuộc sống, thầy cũng rất bình dị và thân thiện. Bất kỳ ai khi tiếp xúc với thầy cũng cảm thấy sự gần gũi, thân thiện và yêu mến thầy từ ấn tượng đầu tiên.</p>
                   <p>PGS.TS Nguyễn Nghiêm Luật luôn quan niệm Ngành Y là một ngành đặc thù, liên quan trực tiếp đến sức khỏe, hạnh phúc và tính mạng con người, vì vậy thầy vẫn thường dạy các học trò của mình 3 điều cần ghi nhớ: Luôn ghi nhớ và làm theo lời thề của ông tổ ngành Y Hippocrates về Y đức: "Coi bệnh nhân như người thân của mình, không bao giờ làm hại ai, giữ tinh khiết cho đời và cho nghề, ..."</p>               
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->
    <!-- End Banner Hero -->
<div class="modal fade" id="editmodal" role="dialog"></div>
<div class="modal " id="addfile" role="dialog"></div>
<div class="modal " id="show" role="dialog"></div>

<div id="dialogconfirm"></div>
    <!-- End Service -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_AppointmentAtHome.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_AppointmentAtHome = new JS_AppointmentAtHome(baseUrl, 'client', 'appointmentathome');
    $(document).ready(function($) {
        JS_AppointmentAtHome.loadIndex(baseUrl);
    })
</script>
@endsection