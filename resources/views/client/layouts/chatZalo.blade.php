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
                    <span style="color: white;font-weight: 600;font-size: 20px;letter-spacing: 1px;font-family: Trocchi, serif;">ZALO CHAT</span> <br>
                    <span style="text-transform:none;color: yellow;">Quét mã QR zalo của nhân viên tư vấn để giải đáp thắc mắc, nhu cầu khách hàng!</span>
                </div>

                <div class="testsss">

                    <div class="">
                        <div id="messages-content"></div>
                        <img class="card-img " src="../clients/img/QRZalo.jpg" alt="Card image">

                    </div>
                </div>
            </div>
            <div id="message-alert" class="content">
                <h4 class="m-0 p-0"><strong><i id="message-icon"></i> <span id="message-label"></span></strong></h4>
                <span id="message-infor"></span>
            </div>

        </section>
    </div>
    <div id="customerCare">
        <form action="" method="POST" id="frmChat_box">
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
                        <span style="color: #ffd2c4;font-size: 17px;letter-spacing: 1px;font-family: Trocchi, serif;">CHAT</span>
                        <span class="messageClose">
                            <i class="fa fa-window-close fa-xs" aria-hidden="true" style="color: rgb(255, 255, 255);font-size: 22px;"></i>
                        </span>
                    </div>
                </div>
                <!-- Màn hình danh sách -->
                <div class="table-responsive">
                    <div id="table-container-box">
                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="text" name="phone" id="phone" class="form-control">
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
                            <button type="button" id="sendMessage" class="btn btn-primary"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>