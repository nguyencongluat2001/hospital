<style>
    #form_chat {
        position: fixed;
        right: 0;
        bottom: 90px;
    }

    #customerCare {
        position: fixed;
        right: 0;
        bottom: 0;
        width: 90px;
        height: 90px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<div>
    <div id="form_chat">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <section class="">
            <div id="chatZalo" class="chatZaloClose">
                <label for="checkbox1">
                <img width="" height="50px" style="background-color: none"
                    src="../clients/img/zalo.png" alt="">
                </label>
            </div>
        </section>
        <section class="avenue-messenger chatZalo transform" id="pDetails">
            <div class="menu">
                <div class="button" style="padding-right: 15px;padding-top: 5px;">
                    <div>
                        <label for="checkbox1" class="chatZaloClose">
                            <i class="fa fa-window-close fa-xs" aria-hidden="true" style="color: rgb(255, 255, 255);"></i>
                        </label>
                    </div>
                </div>
                <div class="agent-face">
                    <div class="half">
                        <img class="agent circle" src="https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/default_avatar.5b74dc1.png" alt="Jesse Tino">
                    </div>
                </div>
            </div>
            <div class="chat">
                <div class="chat-title">
                    <span style="color: #fff;font-weight: 600;font-size: 20px;letter-spacing: 1px;font-family: Trocchi, serif;">ZALO CHAT</span> <br>
                    <span style="text-transform:none;color: yellow;">Quét mã QR zalo của nhân viên tư vấn!</span>
                </div>

                <div class="testsss">
                    <center>
                    <div class="">
                        <div id="messages-content"></div>
                        <img class="card-img " src="../clients/img/QRZalo.jpg" alt="Card image">

                    </div>
                    </center>
                   
                </div>
            </div>
            <div id="message-alert" class="content">
                <h4 class="m-0 p-0"><strong><i id="message-icon"></i> <span id="message-label"></span></strong></h4>
                <span id="message-infor"></span>
            </div>

        </section>
    </div>
    <div id="customerCare">
        <form action="" method="POST" id="frmChat_box" autocomplete="off">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <span class="form-group input-group" style="align-items: center;">
                @if(isset($notification))
                <div id="alertNotifi" class="form-control alertNotifi" @if(count($notification) <=0) hidden @endif>
                    <span>Bạn có {{count($notification)}} thông báo mới</span>
                </div>
                @endif
                <div class="input-group-btn messageClose" id="messageCustomer">
                    <label class="" for="message">
                        <img width="70px" height="70px" style="background-color: none" src="https://vcdn.subiz-cdn.com/file/fiqtarohdurccuocnccb-27.png" alt="">
                    </label>
                </div>
            </span>

            <section class="avenue-messenger messageCustomer transform" id="">
                <div class="chat">
                    <div class="chat-title-customer">
                        <span class="title-header">
                            <span class="text-uppercase" style="color: #fff;font-size: 18px;letter-spacing: 1px;font-family: Trocchi, serif;">Chào mừng bạn đã đến với Booking Fast</span>
                            <p class="text-capitalize mb-0">Nhập số điện thoại để liên hệ Dịch vụ Khách hàng, chúng tôi luôn túc trực 24/7</p>
                        </span>
                        <span class="messageClose">
                            <i class="fa fa-window-close fa-xs" aria-hidden="true" style="color: rgb(255, 255, 255);font-size: 22px;"></i>
                        </span>
                    </div>
                </div>
                <!-- Màn hình danh sách -->
                <div class="table-responsive">
                    <div id="table-container-box">
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Nhập số điện thoại">
                            <p class="errorPhone"></p>
                        </div>
                    </div>
                    <div id="body-message"></div>
                </div>
                <div class="start col-md-12">
                    <button type="button" id="start" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Bắt đầu cuộc hội thoại</button>
                </div>
                <div class="sendMessage" style="display: none;">
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" name="txt-message" id="txt-message" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" id="sendMessage" class="btn btn-primary"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/8.2.0/pusher.min.js"></script>
<script>
    
    $(document).ready(function() {
        $(".chatZaloClose").click(function() {
            if($(".messageCustomer").hasClass('hidden')){
                $(".messageCustomer").toggleClass('transform');
                $('.messageCustomer').toggleClass("hidden");
            }
            $(".chatZalo").toggleClass('transform');
            $('.chatZalo').toggleClass("hidden");
            $("#customerCare").attr('style', 'z-index:9;transition: ease .4s;');
            $("#form_chat").attr('style', 'z-index:10;transition: ease .4s;');
        });

        $(".messageClose").click(function() {
            if($(".chatZalo").hasClass('hidden')){
                $(".chatZalo").toggleClass('transform');
                $('.chatZalo').toggleClass("hidden");
            }
            $(".messageCustomer").toggleClass('transform');
            $('.messageCustomer').toggleClass("hidden");
            $("#customerCare").attr('style', 'z-index:10;transition: linear .4s;');
            $("#form_chat").attr('style', 'z-index:9;transition: linear .4s;');
        });

        $("#start").click(function(){
            var phone = $("#frmChat_box #phone").val();
            if(phone == ''){
                $(".errorPhone").html('<span style="color:red;">Mời bạn nhập số điện thoại!</span>');
                $("#frmChat_box #phone").focus();
                $("#frmChat_box #phone").attr('style', 'border: 1px solid red');
                return false;
            }
            var check = isVietnamesePhoneNumber(phone);
            if(check == false){
                $(".errorPhone").html('<span style="color:red;">Số điện thoại không đúng định dạng!</span>');
                $("#frmChat_box #phone").focus();
                $("#frmChat_box #phone").attr('style', 'border: 1px solid red');
                return false;
            }
            $("#table-container-box").hide();
            $(".sendMessage").show();
            $(".start").hide();
            $("#body-message").append(`<div class="left-message"><div class="text">
                                            <p>Chào mừng bạn đến với trang web của chúng tôi, hãy gửi tin nhắn để được trợ giúp.</p>
                                        </div></div>
                                        `);
            $(".title-header").html('<span class="text-uppercase" style="color: #fff;font-size: 18px;letter-spacing: 1px;font-family: Trocchi, serif;">Chat Booking Fast</span>');
        });
        // Check số điện thoại
        function isVietnamesePhoneNumber(number) {
            return /(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/.test(number);
        }
        // chat ng dung
        const pusher = new Pusher("{{config('chat.pusher.key')}}", {
            cluster: 'ap1'
        });
        const chanel = pusher.subscribe('public');

        chanel.bind('chat', function(data) {
            $.ajax({
                url: '/chat/receive',
                type: 'POST',
                data: {
                    _token: '{{csrf_token()}}',
                    message: data.message,
                    phone: data.phone,
                },
                success: function(res) {
                    $("#body-message").append(res);
                }
            });
        });


        $('#sendMessage').click(function(event) {
        // $('form').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: '/chat/broadcast',
                method: 'POST',
                headers: {
                    'X-Socket-Id': pusher.connection.socket_id
                },
                data: {
                    _token: '{{csrf_token()}}',
                    message: $("#frmChat_box #txt-message").val(),
                    phone: $("#frmChat_box #phone").val(),
                },
                success: function(res) {
                    $("#body-message").append(res);
                    $("#frmChat_box #txt-message").val('');
                }
            });
        });
    });
</script>