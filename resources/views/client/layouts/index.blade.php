<!DOCTYPE html>
<html lang="en">

<head>
    <title>BOOKING CALENDAR</title>
    <meta charset="utf-8">
    <base href="{{ asset('') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../clients/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../clients/img/logo.png">
    <!-- Load Require CSS -->
    {{-- @yield('css') --}}
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="../clients/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="../clients/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="../clients/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../clients/css/custom.css">
    <link rel="stylesheet" href="../assets/chosen/chosen.min.css">
    <script src="https://unpkg.com/lightweight-charts@3.4.0/dist/lightweight-charts.standalone.production.js"></script>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
</head>
<style>
    b,
    span,
    strong {
        font-size: 14px;
    }

    body {
        /* background-image: url("../clients/img/bgctys.jpg"); */
        /* background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        background-position: 40% -200px;
        background-attachment: fixed; */
        padding-right:0px;
        padding-left:0px;
    }

    .bgs {
        /* background-image: url("../clients/img/background2.jpg") !important; */
        width: 100%;
        background: #700e13;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bgft {
        /* background-image: url("../clients/img/sequel-background-1.png") !important; */
        width: 100%;
        background: #731b1bde !important;
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    #menuClient {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    .menuClient {
        display: none;
    }

    @media (min-width: 992px) {
        #menuClient {
            display: block;
        }

        .header-logo {
            margin-left: 10%;
        }

        #navbar-toggler-success {
            display: block;
        }
    }

    .navbar-toggler.border-0:focus {
        outline: none;
        box-shadow: none;
    }

    .loader_bg {
        position: fixed;
        z-index: 9999999;
        /* background: #fff; */
        width: 100%;
        height: 100%;
    }

    .loader {
        height: 100%;
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .loader img {
        width: 100px;
    }

    .loader_bg_of {
        display: none;
    }
</style>
<script src="../clients/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets\js\NclLibrary.js') }}"></script>

<script type="text/javascript">
    $('.button').click(function() {
        $('.menu .items span').toggleClass('active');
        $('.menu .button').toggleClass('active');
    });

    $(document).ready(function() {
        // $('#textbox1').val(this.checked);
        $('#checkbox1').change(function() {
            if (this.checked) {
                $('#pDetails').removeClass("hidden");
                $('#pDetails').addClass("transform");
            } else {
                $('#pDetails').removeClass("transform");
                $('#pDetails').addClass("hidden");
            }

        });
    });
</script>

<body style="position: relative;">
    <div id="imageLoading" class="loader_bg_of">
        <div class="loader_bg">
            <div class="loader"><img src="../assets/images/loading.gif" alt="#" /></div>
        </div>
    </div>
    @include('client.layouts.menu')
    @yield('body-client')
    <!-- Start Footer -->
    @include('client.layouts.footer')
    <!-- End Footer -->
    <!-- Bootstrap -->
    <script src="../clients/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="../clients/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="../clients/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <script>
        setTimeout(() => {
            $('#imageLoading').addClass("loader_bg_of");
        }, 2000)
    </script>
    <script type="text/javascript" charset="utf-8">
        let a;
        let time;
        var date = new Date().toLocaleDateString()
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
    <script type="text/jscript" src="../assets/chosen/chosen.min.js"></script>
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css" />
    <script src="../assets/js/sweetalert2.min.js"></script>
    <!-- Templatemo -->
    <script src="../clients/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="../clients/js/custom.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>

    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script type="text/javascript">
        var pusher = new Pusher("{{ env('PUSHER_APP_KEY', '0141c9557203d59309b9') }}", {
            encrypted: true,
            cluster: "ap1"
        });
        var channel = pusher.subscribe('NotificationEvent');
        channel.bind('send-message', function(data) {
            var newNotificationHtml = `<div class="card-body">
            <div class="d-flex flex-row justify-content-start mb-4 avatarMessage">
            <img src="https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/default_avatar.5b74dc1.png" alt="avatar 1" style="width: 30px; height: 100%;">
            <div style="padding-left:5px">
            <div class="p-3 ms-3" style="border-radius: 15px; background-color: #e1ebe6;width:100%">
            <p style="font-size:14px;font-family:auto" class="small mb-0"></p>
            <h5>${data.title}</h5>
            <span>Giá mua: ${data.price_buy}</span><br>
            <span>Mục tiêu: ${data.target}</span><br>
            <span>Dừng lỗ: ${data.stop_loss}</span><br>
            <span>Thời gian: ` + formatDate(data.created_at) + `</span><br>
            <p></p>
            </div>
            </div>
            </div>
            <div id="messages-content"></div>
            </div>`;

            $('.testsss').prepend(newNotificationHtml);
            $("#alertNotifi").attr('class', 'form-control alertNotifi');
            $("#alertNotifi").html('Bạn có ' + data.count + ' thông báo mới');
            $("#alertNotifi").removeAttr('hidden');
            $("#icon-bell").addClass('animate');
        });

        function formatDate(date) {
            var d = new Date(date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear(),
                hour = d.getHours(),
                minute = d.getMinutes(),
                second = d.getSeconds();

            if (month.length < 2) month = '0' + month;
            if (day.length < 2) day = '0' + day;

            return hour + ':' + minute + ':' + second + ' ' + day + '-' + day + '-' + day;
        }

        function readNotification() {
            var baseUrl = "{{ url('') }}";
            var url = baseUrl + '/client/readNotification';
            $.ajax({
                url: url,
                type: "GET",
                success: function() {
                    $("#alertNotifi").html('');
                    $("#alertNotifi").removeAttr('class');
                    $("#icon-bell").removeClass('animate');
                }
            });
        }
    </script>
</body>

</html>