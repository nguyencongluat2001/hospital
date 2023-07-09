<div id="form_chat">
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
    <section class="icon">
        <div>
            <label for="checkbox1">
                <img width="" height="50px" style="background-color: none"
                    src="../clients/img/zalo.png" alt="">
            </label>
        </div>
        <div>
            <input hidden type="checkbox" id="checkbox1" checked />
        </div>
    </section>
    <section class="avenue-messenger transform" id="pDetails">
        <div class="menu">
            <div class="button" style="padding-right: 15px;padding-top: 5px;">
                <div>
                    <label for="checkbox1">
                        <i class="fa fa-window-close fa-xs" aria-hidden="true" 
                            style="color: rgb(255, 255, 255);"></i>
                    </label>
                </div>
                <div>
                    <input hidden type="checkbox" id="checkbox1" checked />
                </div>
            </div>
            <div class="agent-face">
                <div class="half">
                    <img class="agent circle"
                        src="https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/default_avatar.5b74dc1.png"
                        alt="Jesse Tino">
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
