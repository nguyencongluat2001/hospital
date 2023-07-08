function JS_Facilities(baseUrl, module, controller) {
    this.module = module;
    this.baseUrl = baseUrl;
    this.controller = controller;
    NclLib.menuActive('.link-facilities');
    NclLib.loadding();
    this.urlPath = baseUrl + '/' + module + '/' + controller;//Biên public lưu tên module
}
JS_Facilities.prototype.alerMesage = function(nameMessage,icon,color){
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
JS_Facilities.prototype.loadIndex = function () {
    var myClass = this;
    var oForm = 'form#frmHospital';
    NclLib.menuActive('.link-facilities');
    $('.chzn-select').chosen({ height: '100%', width: '100%' });

    myClass.loadList(oForm);

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
JS_Facilities.prototype.loadevent = function (oForm) {
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
JS_Facilities.prototype.loadList = function (oForm) {
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
// /**
//  * Load màn hình danh sách
//  *
//  * @param oForm (tên form)
//  *
//  * @return void
//  */
// JS_Facilities.prototype.inFor = function (id) {
//     var myClass = this;
//     console.log(id)
//     var url = this.urlPath + '/loadList';
//     var data = $(oForm).serialize();
//     $.ajax({
//         url: url,
//         type: "GET",
//         cache: true,
//         data: data,
//         success: function (arrResult) {
//             $("#table-container").html(arrResult);
//             myClass.loadevent(oForm);
//         }
//     });
// }