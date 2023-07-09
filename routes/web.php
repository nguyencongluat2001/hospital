<?php

use Illuminate\Support\Facades\Route;
use Modules\Client\Page\Home\Controllers\HomeController as ClientHomeController;

use App\Http\Controllers\Auth\LoginController;
use Modules\Client\Auth\Controllers\RegisterController;
use Modules\Client\Page\Facilities\Controllers\FacilitiesController;
use Modules\Client\Page\Specialty\Controllers\SpecialtyController;



//Dashboard
use Modules\System\Dashboard\ApprovePayment\Controllers\ApprovePaymentController;
use Modules\System\Dashboard\Dashboards\Controllers\DashboardController;
use Modules\System\Dashboard\Blog\Controllers\BlogController;
use Modules\System\Dashboard\Category\Controllers\CateController;
use Modules\System\Dashboard\Category\Controllers\CategoryController;
use Modules\System\Dashboard\DataFinancial\Controllers\DataFinancialController;
use Modules\System\Dashboard\Effective\Controllers\EffectiveController;
use Modules\System\Dashboard\Hospital\Controllers\HospitalController;
use Modules\System\Dashboard\Specialty\Controllers\SpecialtyController as SystemSpecialtyController;


use Modules\System\Dashboard\Home\Controllers\HomeController;
use Modules\System\Dashboard\Recommended\Controllers\RecommendedController;
use Modules\System\Dashboard\Signal\Controllers\SignalController;
use Modules\System\Dashboard\Users\Controllers\UserController;
use Modules\System\Dashboard\Permision\Controllers\PermisionController;

// use Modules\Client\Page\Home\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [HomeController::class, 'index']);


Route::post('/system/home', [LoginController::class, 'checkLogin'])->name('checkLogin');
Route::get('/login', [LoginController::class, 'logout'])->name('login');
Route::get('/system/login', [LoginController::class, 'logout'])->name('fromLogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('register/send-otp/sent_OTP', [UserController::class, 'sent_OTP']);
Route::get('/home', [App\Http\Controllers\ClientHomeController::class, 'index'])->name('home');
Route::get('/', [ClientHomeController::class, 'index']);

// Auth::routes();
Route::prefix('register')->group(function () {
    Route::get('', [RegisterController::class, 'index'])->name('register');
    Route::get('tab1', [RegisterController::class, 'tab1']);
    Route::get('tab2', [RegisterController::class, 'tab2']);
    Route::get('tab3', [RegisterController::class, 'tab3']);
    Route::get('tab4', [RegisterController::class, 'tab4']);
    Route::get('checkEmail', [RegisterController::class, 'checkEmail']);
});

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
            Route::get('/index', [SystemSpecialtyController::class, 'index']);
            Route::get('/loadList',[SystemSpecialtyController::class,'loadList'])->name('loadList');
            Route::post('/createForm',[SystemSpecialtyController::class,'createForm']);
            Route::post('/create',[SystemSpecialtyController::class,'create'])->name('create');
            Route::post('/edit',[SystemSpecialtyController::class,'edit'])->name('edit');
            Route::post('/delete',[SystemSpecialtyController::class,'delete'])->name('delete');
        });
       
    });
});
// Auth::routes();

// Trang chủ
Route::get('/', [ClientHomeController::class, 'index']);
// Trang chủ cơ sở bệnh viện
Route::get('/facilities', [FacilitiesController::class, 'index']);
Route::get('/facilities/{code}', [FacilitiesController::class, 'detailIndex']);
Route::get('/schedule/{code}', [FacilitiesController::class, 'schedule']);
// chuyên khoa
Route::get('/specialty', [SpecialtyController::class, 'index']);
Route::get('/specialty/{code}', [SpecialtyController::class, 'specialty']);

// route phía người dùng
Route::prefix('/client')->group(function () {
        $arrModules = config('menuClient');
            $this->arrModules = $arrModules;
        view()->composer('*', function ($view) {
            $view->with('menuItems', $this->arrModules);
        });
        // Trang chủ client
        Route::prefix('home')->group(function(){
            Route::get('/loadList',[ClientHomeController::class,'loadList']);
            Route::get('/loadListBlog',[ClientHomeController::class,'loadListBlog']);
            Route::get('/loadListTap1',[ClientHomeController::class,'loadListTap1']);
            Route::get('/loadListTop',[ClientHomeController::class,'loadListTop']);
        });
        // Trang chủ cơ sở bệnh viện
        Route::prefix('facilities')->group(function(){
            // Route::get('/index',[FacilitiesController::class,'index']);
            Route::get('/loadList',[FacilitiesController::class,'loadList']);
            Route::get('/loadListBlog',[FacilitiesController::class,'loadListBlog']);
            Route::get('/loadListTap1',[FacilitiesController::class,'loadListTap1']);
            Route::get('/loadListTop',[FacilitiesController::class,'loadListTop']);
            Route::get('/getHuyen',[FacilitiesController::class,'getHuyen']);
            Route::get('/getXa',[FacilitiesController::class,'getXa']);

             // Trang chủ chi tiết cơ sở bệnh viện
            Route::prefix('detail')->group(function(){
                Route::get('/index',[FacilitiesController::class,'detailIndex']);
                Route::get('/loadList',[FacilitiesController::class,'loadList']);
                Route::get('/loadListBlog',[FacilitiesController::class,'loadListBlog']);
                Route::get('/loadListTap1',[FacilitiesController::class,'loadListTap1']);
                Route::get('/loadListTop',[FacilitiesController::class,'loadListTop']);
            });
        });
         // chuyên khoa
         Route::prefix('specialty')->group(function(){
            Route::get('/loadList',[SpecialtyController::class,'loadList']);
            Route::get('/loadListBlog',[SpecialtyController::class,'loadListBlog']);
            Route::get('/loadListTap1',[SpecialtyController::class,'loadListTap1']);
            Route::get('/loadListTop',[SpecialtyController::class,'loadListTop']);
        });









        Route::prefix('infor')->group(function(){
            Route::get('/index', [InforController::class, 'index']);
            Route::post('update', [InforController::class, 'update']);
            Route::post('loadList', [InforController::class, 'loadList']);
            Route::post('updateCustomer', [InforController::class, 'updateCustomer']);
            Route::get('/changePass', [UserController::class,'changePass']);
            Route::post('/updatePass', [UserController::class,'updatePass']);
        });
        Route::prefix('about')->group(function () {
            Route::get('/index', [AboutController::class, 'index']);
            Route::get('/loadListTHTT', [AboutController::class, 'loadListTHTT']);
            Route::prefix('/session')->group(function(){
                Route::get('', [AboutController::class, 'session']);
                Route::get('/loadListTKP', [AboutController::class, 'loadListTKP']);
            });
            Route::prefix('/industry')->group(function(){
                Route::get('', [AboutController::class, 'industry']);
                Route::get('/loadListPTN', [AboutController::class, 'loadListPTN']);
            });
            Route::prefix('/stock')->group(function(){
                Route::get('', [AboutController::class, 'stock']);
                Route::get('/loadListPTCP', [AboutController::class, 'loadListPTCP']);
            });
            Route::get('/reader/{id}', [AboutController::class, 'reader']);
        });
        // Đọc thông báo
        Route::get('readNotification', [ReadNotificationController::class, 'readNotification']);
    
    Route::prefix('des')->group(function () {
        Route::get('index', [DesController::class, 'index']);
    });
});


