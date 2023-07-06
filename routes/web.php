<?php

use Illuminate\Support\Facades\Route;
use Modules\Client\Page\Home\Controllers\HomeController as HomeControllers;

use App\Http\Controllers\Auth\LoginController;
use Modules\Client\Auth\Controllers\RegisterController;


//Dashboard
use Modules\System\Dashboard\ApprovePayment\Controllers\ApprovePaymentController;
use Modules\System\Dashboard\Dashboards\Controllers\DashboardController;
use Modules\System\Dashboard\Blog\Controllers\BlogController;
use Modules\System\Dashboard\Category\Controllers\CateController;
use Modules\System\Dashboard\Category\Controllers\CategoryController;
use Modules\System\Dashboard\DataFinancial\Controllers\DataFinancialController;
use Modules\System\Dashboard\Effective\Controllers\EffectiveController;
use Modules\System\Dashboard\Handbook\Controllers\HandbookController;
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
Route::get('/home', [App\Http\Controllers\HomeControllers::class, 'index'])->name('home');
Route::get('/', [HomeControllers::class, 'index']);

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
         //dữ liệu chứng khoán
        Route::prefix('/system/datafinancial')->group(function () {
            //Handbook
            Route::get('/index', [DataFinancialController::class, 'index']);
            Route::get('/loadList',[DataFinancialController::class,'loadList']);
            Route::post('/createForm',[DataFinancialController::class,'createForm']);
            Route::post('/create',[DataFinancialController::class,'create']);
            Route::get('/changeUpdate',[DataFinancialController::class,'changeUpdate']);
            Route::post('/edit',[DataFinancialController::class,'edit']);
            Route::post('/delete',[DataFinancialController::class,'delete']);
            Route::post('/updateDataFinancial',[DataFinancialController::class,'updateDataFinancial']);
            Route::post('/upNdown',[DataFinancialController::class,'upNdown']);
        });
         //Quản trị quyền sủ dụng quản trị
         Route::prefix('/system/permision')->group(function () {
            //Handbook
            Route::get('/index', [PermisionController::class, 'index']);
            Route::get('/loadList',[PermisionController::class,'loadList']);
            Route::post('/createForm',[PermisionController::class,'createForm']);
            Route::post('/create',[PermisionController::class,'create']);
            Route::get('/changeUpdate',[PermisionController::class,'changeUpdate']);
            Route::post('/edit',[PermisionController::class,'edit']);
            Route::post('/delete',[PermisionController::class,'delete']);
            Route::post('/updateDataFinancial',[PermisionController::class,'updateDataFinancial']);
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
        // quản trị danh mục khuyến nghị
        Route::prefix('/recommended')->group(function () {
            //Danh mục khuyến nghị
            Route::get('/index', [RecommendedController::class, 'index']);
            Route::post('/add',[RecommendedController::class,'add']);
            Route::post('/create',[RecommendedController::class,'create']);
            Route::post('/edit',[RecommendedController::class,'edit']);
            Route::post('/delete',[RecommendedController::class,'delete']);
            Route::get('/loadList',[RecommendedController::class,'loadList']);
            Route::post('/updateColumn',[RecommendedController::class,'updateColumn']);
            Route::post('/changeStatus',[RecommendedController::class,'changeStatus']);
        });
        Route::prefix('/effectiveness')->group(function () {
            // Hiệu quả danh mục
            Route::get('/index', [EffectiveController::class, 'index']);
            Route::post('/add',[EffectiveController::class,'add']);
            Route::post('/create',[EffectiveController::class,'create']);
            Route::post('/edit',[EffectiveController::class,'edit']);
            Route::post('/delete',[EffectiveController::class,'delete']);
            Route::get('/loadList',[EffectiveController::class,'loadList']);
            Route::post('/updateColumn',[EffectiveController::class,'updateColumn']);
            Route::post('/changeStatus',[EffectiveController::class,'changeStatus']);
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
        //Cẩm nâng
        Route::prefix('/handbook')->group(function () {
            //Handbook
            Route::get('/index', [HandbookController::class, 'index']);
            Route::get('/loadList',[HandbookController::class,'loadList'])->name('loadList');
            Route::post('/createForm',[HandbookController::class,'createForm']);
            Route::post('/create',[HandbookController::class,'create'])->name('create');
            Route::post('/edit',[HandbookController::class,'edit'])->name('edit');
            Route::post('/delete',[HandbookController::class,'delete'])->name('delete');
            Route::get('/seeVideo',[HandbookController::class,'seeVideo'])->name('seeVideo');
        });
        //Tín hiệu mua
        Route::prefix('signal')->group(function(){
            Route::get('index', [SignalController::class, 'index']);
            Route::post('loadList', [SignalController::class, 'loadList']);
            Route::get('create', [SignalController::class, 'create']);
            Route::get('edit', [SignalController::class, 'edit']);
            Route::post('update', [SignalController::class, 'update']);
            Route::post('delete', [SignalController::class, 'delete']);
            Route::post('updateSignal', [SignalController::class, 'updateSignal']);
            Route::post('changeStatusSignal', [SignalController::class, 'changeStatusSignal']);
        });
        //Tín hiệu mua
        Route::prefix('approvepayment')->group(function(){
            Route::get('index', [ApprovePaymentController::class, 'index']);
            Route::post('loadList', [ApprovePaymentController::class, 'loadList']);
            Route::get('create', [ApprovePaymentController::class, 'create']);
            Route::get('edit', [ApprovePaymentController::class, 'edit']);
            Route::post('update', [ApprovePaymentController::class, 'update']);
            Route::post('delete', [ApprovePaymentController::class, 'delete']);
            Route::post('updateApprovePayment', [ApprovePaymentController::class, 'updateApprovePayment']);
            Route::post('changeStatusApprovePayment', [ApprovePaymentController::class, 'changeStatusApprovePayment']);
            Route::get('getUserVIP', [ApprovePaymentController::class, 'getUserVIP']);
        });
       
    });
});
// Auth::routes();


