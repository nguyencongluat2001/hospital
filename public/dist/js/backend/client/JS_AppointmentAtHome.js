function JS_AppointmentAtHome(baseUrl, module, controller) {
    this.module = module;
    this.baseUrl = baseUrl;
    this.controller = controller;
    NclLib.loadding();
    this.urlPath = baseUrl + '/' + module + '/' + controller;//Biên public lưu tên module
}
JS_AppointmentAtHome.prototype.alerMesage = function(nameMessage,icon,color){
    Swal.fire({
        position: 'top-start',
        icon: icon,
        title: nameMessage,
        color: color,
        showConfirmButton: false,
        width:'30%',
        timer: 2500
      })
}

/**
 * Hàm load màn hình index
 *
 * @return void
 */
JS_AppointmentAtHome.prototype.loadIndex = function () {
    var myClass = this;
    var oForm = 'form#frmHospital';
    $('.chzn-select').chosen({ height: '100%', width: '100%' });

    // myClass.loadList(oForm);

    // $('form#frmAdd').find('#btn_create').click(function () {
    //     myClass.store('form#frmAdd');
    // })
    //  // form load
    //  $('form#frmLoadlist_list').find('#type_code').change(function () {
    //     myClass.loadList();
    // });
    //  // form load
    //  $('form#frmLoadlist_list').find('#limit').change(function () {
    //     myClass.loadList();
    // });
    //  // form load
    //  $('form#frmLoadlist_Bank').find('#type_code').change(function () {
    //     myClass.loadListTap1();
    // });
    // // form load
    // $(oFormBlog).find('#category').change(function () {
    //     myClass.loadListBlog(oFormBlog);
    // });
    $(oForm).find('#txt_search').click(function () {
        var page = $(oForm).find('#limit').val();
        var perPage = $(oForm).find('#cbo_nuber_record_page').val();
        myClass.loadList(oForm, page, perPage);
        // return false;
    
    });
}
JS_AppointmentAtHome.prototype.loadevent = function (oForm) {
    var myClass = this;
    $('form#frmAdd').find('#btn_create').click(function () {
        myClass.store('form#frmAdd');
    })
}
/**
 * Load màn hình danh sách
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_AppointmentAtHome.prototype.loadList = function (oForm) {
    var myClass = this;
    var url = this.urlPath + '/loadList';
    var data = $(oForm).serialize();
    $.ajax({
        url: url,
        type: "GET",
        cache: true,
        data: data,
        success: function (arrResult) {
            $("#table-container").html(arrResult);
            myClass.loadevent(oForm);
        }
    });
}
/** 
 * @param oForm (tên form)
 *
 * @return void
 */
JS_AppointmentAtHome.prototype.add = function (oForm) {
    var url = this.urlPath + '/sendPayment';
    var myClass = this;
    var oForm = 'form#frmSendSchedule';
    var code_indications = [];
    $('input[name="code_indications"]:checked').each(function() {
        code_indications.push(this.value); 
    });
    var data = $(oForm).serialize();
    data += '&code_indications=' + code_indications;
    console.log(data);
    if ($("#name").val() == '') {
        var nameMessage = 'Họ và tên không được để trống!';
        var icon = 'warning';
        var color = '#ffd200';
        var background = 'rgb(33 41 68)';
        NclLib.alerMesageClient(nameMessage,icon,color,background);
        return false;
    }
    if ($("#phone").val() == '') {
        var nameMessage = 'Số điện thoại không được để trống!';
        var icon = 'warning';
        var color = '#ffd200';
        var background = 'rgb(33 41 68)';
        NclLib.alerMesageClient(nameMessage,icon,color,background);
        return false;
    }
    // if ($("#code").val() == '') {
    //     var nameMessage = 'Loại xét nghiệm không được để trống!';
    //     var icon = 'warning';
    //     var color = '#ffd200';
    //     var background = 'rgb(33 41 68)';
    //     NclLib.alerMesageClient(nameMessage,icon,color,background);
    //     return false;
    // }
    if ($("#sex").val() == '') {
        var nameMessage = 'Giới tính không được để trống!';
        var icon = 'warning';
        var color = '#ffd200';
        var background = 'rgb(33 41 68)';
        NclLib.alerMesageClient(nameMessage,icon,color,background);
        return false;
    }
    if ($("#date_sampling").val() == '') {
        var nameMessage = 'Ngày lấy mẫu không được để trống!';
        var icon = 'warning';
        var color = '#ffd200';
        var background = 'rgb(33 41 68)';
        NclLib.alerMesageClient(nameMessage,icon,color,background);
        return false;
    }
    if ($("#hour_sampling").val() == '') {
        var nameMessage = 'Giờ lấy mẫu không được để trống!';
        var icon = 'warning';
        var color = '#ffd200';
        var background = 'rgb(33 41 68)';
        NclLib.alerMesageClient(nameMessage,icon,color,background);
        return false;
    }
    if ($("#address").val() == '') {
        var nameMessage = 'Địa chỉ chi tiết không được để trống!';
        var icon = 'warning';
        var color = '#ffd200';
        var background = 'rgb(33 41 68)';
        NclLib.alerMesageClient(nameMessage,icon,color,background);
        return false;
    }
    if ($("#reason").val() == '') {
        var nameMessage = 'Bạn chưa nêu lý do khám!';
        var icon = 'warning';
        var color = '#ffd200';
        var background = 'rgb(33 41 68)';
        NclLib.alerMesageClient(nameMessage,icon,color,background);
        return false;
    }
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (arrResult) {
            if (arrResult['status'] == true) {
                var nameMessage = 'Thông báo , Đặt lịch thành công';
                var icon = 'success';
                var color = '#344767';
                NclLib.alerMesage(nameMessage,icon,color);
                $('#editmodal').modal('hide');
                setTimeout(() => {
                    window.location.replace(myClass.baseUrl+'/searchschedule');
                }, 2000)
            } else {
                var nameMessage = 'Đặt lịch thất bại';
                var icon = 'warning';
                var color = '#344767';
                NclLib.alerMesage(nameMessage,icon,color);
            }
        }
    });
}
/**
 * Load màn hình danh sách huyện
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_AppointmentAtHome.prototype.getPrice = function (code_blood) {
    var myClass = this;
    var url = this.urlPath + '/getPrice';
    var data = '&code_blood=' + code_blood;
    NclLib.loadding();
    $.ajax({
        url: url,
        type: "GET",
        cache: true,
        data: data,
        success: function (arrResult) {

            var html = `<input id="price" disabled type="text" class="form-control" value="`+ arrResult.data.total +` VND" autofocus>`
            html += `<input disabled type="hidden" class="form-control" id="money" name="money" value="`+ arrResult.data.money +` VND" autofocus>`

            $("#price").html(html);
            var htmls = `<div id="infor" class="form-wrapper col-md-4">`
            htmls += `<label style="width: 150px;" for="">Gồm `+ arrResult.data.count +` chỉ số</label>`
            htmls += `<button onclick="JS_AppointmentAtHome.showInfor('`+ arrResult.data.code_blood +`')" type="button" style="width: 120px;display: inline-block;" class="btn-warning"><i class="fas fa-hand-point-right"></i> Chi tiết</button>`
            htmls += `</div">`
            $("#infor").html(htmls);
        }
    });
}
/**
 * Load màn hình danh sách
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_AppointmentAtHome.prototype.showInfor = function (code_blood) {
    var myClass = this;
    NclLib.loadding();
    var url = this.urlPath + '/showInfor';
    var oForm = 'form#frmView';
    var data = '&code_blood=' + code_blood;
    $.ajax({
        url: url,
        type: "GET",
        // cache: true,
        data: data,
        success: function (arrResult) {
            $('#editmodal').html(arrResult);
            $('#editmodal').modal('show');
            myClass.loadevent(oForm);
        }
    });
}
/**
 * Hàm hiển thị modal thanh toán 
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_AppointmentAtHome.prototype.getTypeBank = function (type) {
    if(type=='BANK'){
        $('#bank').removeClass("hiddel");
        $('#tienmat').removeClass("show");
        $('#tienmat').addClass("hiddel");
        $('#bank').addClass("show");
    }
    else{
        $('#tienmat').removeClass("hiddel");
        $('#bank').removeClass("show");
        $('#bank').addClass("hiddel");
        $('#tienmat').addClass("show");
    }
    this.type_bank = type;
}
/**
 * Load chỉ số
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_AppointmentAtHome.prototype.showPack = function () {
    NclLib.loadding();
    var url = this.urlPath + '/showPack';
    var myClass = this;
    var oForm = 'form#frmSendSchedule';
    var code_indications = [];
    $('input[name="code_indications"]:checked').each(function() {
        code_indications.push(this.value); 
    });
    // var data = $(oForm).serialize();
    var data = '&code_indications=' + code_indications;
    console.log(data);
    $.ajax({
        url: url,
        type: "GET",
        // cache: true,
        data: data,
        success: function (arrResult) {
            console.log(arrResult)
            // var  html = `<br>`
            var html = `&nbsp; Tổng đã chọn: <span style="font-weight: 600;color: #ff6400;">`+ arrResult.data.total +` </span>VND`
            html += '<div class="table-responsive pmd-card pmd-z-depth table-container">'
                html += `<table id="myTable" class="table  table-bordered table-striped table-condensed dataTable no-footer">`
                    html += `<tbody id="body_data" style="background: #47aa28;">`
                    $(arrResult.data.chiso).each(function(index,el) {
                        html += `<tr>`
                            html += `<td>`
                                html += `<span style="color: white;"> `+ el.code +` - ` + el.price + ` VND</span>`
                            html += `</td>`
                        html += `</tr>`
                    });
                    html += `</tbody>`
                html += `</table>`
            html += `</div>`
            $("#iss").html(html);
        }
    });
}
/**
 * Load màn hình danh sách
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_AppointmentAtHome.prototype.flow = function (code) {
    var myClass = this;
    NclLib.loadding();
    var url = this.urlPath + '/flow';
    var oForm = 'form#frmView';
    var data = '&code=' + code;
    console.log(code)
    $.ajax({
        url: url,
        type: "GET",
        // cache: true,
        data: data,
        success: function (arrResult) {
            $('#show').html(arrResult);
            $('#show').modal('show');
            myClass.loadevent(oForm);
        }
    });
}