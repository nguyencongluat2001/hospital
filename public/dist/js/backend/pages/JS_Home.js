function JS_Home(baseUrl, module, controller) {
    this.module = module;
    this.baseUrl = baseUrl;
    this.controller = controller;
    NclLib.active('.link-home');
    this.urlPath = baseUrl + '/' + module + '/' + controller;//Biên public lưu tên module
}
JS_Home.prototype.alerMesage = function(nameMessage,icon,color){
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
 * Hàm load các sử kiện cho màn hình index
 *
 * @return void
 */
JS_Home.prototype.loadIndex = function () {
    var myClass = this;
    // $('.chzn-select').chosen({ height: '100%', width: '100%' });
    var oForm = 'form#frmHome_index';
    var oFormCreate = 'form#frmAdd';
    // myClass.loadList(oForm);

    $(oForm).find('#btn_add').click(function () {
        myClass.add(oForm);
    });
    $('form#frmAdd').find('#btn_create').click(function () {
        myClass.store('form#frmAdd');
    })
    $(oForm).find('#btn_edit').click(function () {
        myClass.edit(oForm);
    });
     // form load
     $(oForm).find('#type_code').change(function () {
        var page = $(oForm).find('#limit').val();
        var perPage = $(oForm).find('#cbo_nuber_record_page').val();
        myClass.loadList(oForm, page, perPage);
    });
    $(oForm).find('#txt_search').click(function () {
        /* ENTER PRESSED*/
            var page = $(oForm).find('#limit').val();
            var perPage = $(oForm).find('#cbo_nuber_record_page').val();
            myClass.loadList(oForm, page, perPage);
            // return false;
        
    });
    // Xoa doi tuong
    $(oForm).find('#btn_delete').click(function () {
        myClass.delete(oForm)
    });
}
JS_Home.prototype.loadevent = function (oForm) {
    var myClass = this;
    // jQuery(document).ready(function ($) {
    //     jQuery('div[data-ace-editor-id]').each(function () {
    //         new PHPEditor(this);
    //     });
    // });
    $('form#frmAdd').find('#btn_create').click(function () {
        myClass.store('form#frmAdd');
    })
}