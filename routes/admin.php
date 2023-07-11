<?php

//Dashboard

use Modules\Client\Page\Chat\Controllers\ChatController;
use Modules\System\Dashboard\ApprovePayment\Controllers\ApprovePaymentController;
use Modules\System\Dashboard\Dashboards\Controllers\DashboardController;
use Modules\System\Dashboard\Blog\Controllers\BlogController;
use Modules\System\Dashboard\Category\Controllers\CateController;
use Modules\System\Dashboard\Category\Controllers\CategoryController;
use Modules\System\Dashboard\CustomerCare\Controllers\CustomerCareController;
use Modules\System\Dashboard\DataFinancial\Controllers\DataFinancialController;
use Modules\System\Dashboard\Effective\Controllers\EffectiveController;
use Modules\System\Dashboard\Hospital\Controllers\HospitalController;
use Modules\System\Dashboard\Home\Controllers\HomeController;
use Modules\System\Dashboard\Recommended\Controllers\RecommendedController;
use Modules\System\Dashboard\Signal\Controllers\SignalController;
use Modules\System\Dashboard\Users\Controllers\UserController;
use Modules\System\Dashboard\Permision\Controllers\PermisionController;
use Modules\System\Dashboard\Specialty\Controllers\SpecialtyController;


Route::post('/receive', [ChatController::class, 'receive'])->name('receive');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware('checkloginAdmin')->group(function () {
        // quản trị người dùng
        Route::prefix('/system/user')->group(function () {
            Route::get('/index', [UserController::class, 'index']);
            Route::get('/loadList',[UserController::class,'loadList']);
            Route::post('/edit', [UserController::class,'edit']);
            Route::post('/createForm', [UserController::class,'createForm']);
            Route::post('/create', [UserController::class,'create']);
            Route::post('/delete', [UserController::class,'delete']);
            // Cập nhật mật khẩu
            Route::post('/changeStatus', [UserController::class,'changeStatus']);
            Route::get('/changePass', [UserController::class,'changePass'])->name('changePass');
            Route::post('/updatePass', [UserController::class,'updatePass'])->name('updatePass');
        });
    });
    Route::prefix('/system')->group(function () {
        Route::get('/userInfo/changePass', [UserController::class,'changePass'])->name('changePass');
        Route::post('/userInfo/updatePass', [UserController::class,'updatePass'])->name('updatePass');

        // quản trị danh mục - thể loại
        Route::prefix('/category')->group(function () {
            //Danh mục
            Route::post('/createForm',[CateController::class,'createForm']);
            Route::post('/create',[CateController::class,'create']);
            Route::post('/edit',[CateController::class,'edit']);
            Route::post('/delete',[CateController::class,'delete']);
            Route::get('/index', [CateController::class, 'index']);
            Route::get('/loadList',[CateController::class,'loadList']);
            Route::post('/updateCategory',[CateController::class,'updateCategory']);
            Route::post('/changeStatusCate',[CateController::class,'changeStatusCate']);
            //thể loại
            Route::get('/indexCategory', [CategoryController::class, 'indexCategory']);
            Route::get('/loadListCategory',[CategoryController::class,'loadListCategory']);
            Route::post('/createFormCategory',[CategoryController::class,'createFormCategory']);
            Route::post('/createCategory',[CategoryController::class,'createCategory']);
            Route::post('/editCategory',[CategoryController::class,'edit']);
            Route::post('/deleteCategory',[CategoryController::class,'delete']);
            Route::post('/updateCategoryCate',[CategoryController::class,'updateCategoryCate']);
            Route::post('/changeStatusCategoryCate',[CategoryController::class,'changeStatusCategoryCate']);
        });
        //bài viết 
        Route::prefix('/blog')->group(function () {
            Route::get('/index', [BlogController::class, 'index']);
            Route::get('/loadList',[BlogController::class,'loadList']);
            Route::post('/edit', [BlogController::class,'edit']);
            Route::post('/createForm', [BlogController::class,'createForm']);
            Route::post('/create', [BlogController::class,'create']);
            Route::post('/delete', [BlogController::class,'delete']);
            Route::get('/infor',[BlogController::class,'infor']);

        });
        // 
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        //Cập nhật giao diện sáng tối
        Route::get('/userInfo/index', [UserController::class, 'indexUserInfo'])->name('userInfoIndex');
        Route::post('/userInfo/editColorView', [UserController::class, 'editColorView']);
        // Trang chủ Admin
        Route::prefix('/home')->group(function () {
            Route::get('/index', [HomeController::class, 'index']);
            Route::get('/loadList',[HomeController::class,'loadList']);
            Route::get('/loadListTap1',[HomeController::class,'loadListTap1'])->name('loadListTap1');
            Route::get('/realTimeData',[HomeController::class,'realTimeData'])->name('realTimeData');
        });
        //Cẩm nang
        Route::prefix('/hospital')->group(function () {
            //Hospital
            Route::get('/index', [HospitalController::class, 'index']);
            Route::get('/loadList',[HospitalController::class,'loadList'])->name('loadList');
            Route::post('/createForm',[HospitalController::class,'createForm']);
            Route::post('/create',[HospitalController::class,'create'])->name('create');
            Route::post('/edit',[HospitalController::class,'edit'])->name('edit');
            Route::post('/delete',[HospitalController::class,'delete'])->name('delete');
            Route::get('/seeVideo',[HospitalController::class,'seeVideo'])->name('seeVideo');
        });
         //Chuyên khoa
         Route::prefix('/specialty')->group(function () {
            //Hospital
            Route::get('/index', [SpecialtyController::class, 'index']);
            Route::get('/loadList',[SpecialtyController::class,'loadList'])->name('loadList');
            Route::post('/createForm',[SpecialtyController::class,'createForm']);
            Route::post('/create',[SpecialtyController::class,'create'])->name('create');
            Route::post('/edit',[SpecialtyController::class,'edit'])->name('edit');
            Route::post('/delete',[SpecialtyController::class,'delete'])->name('delete');
        });
        // customerCare
        Route::prefix('customerCare')->group(function(){
            Route::get('index', [CustomerCareController::class, 'index']);
            Route::get('loadList', [CustomerCareController::class, 'loadList']);
            Route::post('message', [CustomerCareController::class, 'message']);
        });
        
    });
});