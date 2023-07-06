<?php

use Illuminate\Support\Facades\Route;
use Modules\Client\Page\Home\Controllers\HomeController as ClientHomeController;

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
use Modules\System\Dashboard\Hospital\Controllers\HospitalController;
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
        //Cẩm nâng
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




// route phía người dùng
Route::prefix('/client')->group(function () {
    $arrModules = config('menuClient');
        $this->arrModules = $arrModules;
    view()->composer('*', function ($view) {
        $view->with('menuItems', $this->arrModules);
    });
   
    // Trang chủ client
    Route::get('/home/index', [ClientHomeController::class, 'index']);
    Route::get('/home/loadList',[ClientHomeController::class,'loadList']);
    Route::get('/home/loadListBlog',[ClientHomeController::class,'loadListBlog']);
    Route::get('/home/loadListTap1',[ClientHomeController::class,'loadListTap1']);
    Route::get('/home/loadListTop',[ClientHomeController::class,'loadListTop']);
    Route::get('/home/loadListChartNen',[ClientHomeController::class,'loadListChartNen']);
    // Route::middleware('permissionCheckLoginClient')->group(function () {
        Route::get('introduce/index', [IntroduceController::class, 'index']);
        Route::prefix('infor')->group(function(){
            Route::get('/index', [InforController::class, 'index']);
            Route::post('update', [InforController::class, 'update']);
            Route::post('loadList', [InforController::class, 'loadList']);
            Route::post('updateCustomer', [InforController::class, 'updateCustomer']);
            Route::get('/changePass', [UserController::class,'changePass']);
            Route::post('/updatePass', [UserController::class,'updatePass']);
        });
        // Route::middleware('checkloginDatafinancial')->group(function () {
            Route::prefix('datafinancial')->group(function () {
                // Tra cứu cổ phiếu
                Route::get('/index', [ClientDataFinancialController::class, 'index']);
                Route::post('/loadData', [ClientDataFinancialController::class, 'loadData']);
                Route::post('/fireAntChart', [ClientDataFinancialController::class, 'fireAntChart']);
                Route::post('/searchDataCP', [ClientDataFinancialController::class, 'searchDataCP']);
                Route::get('/noteTaFa', [ClientDataFinancialController::class, 'noteTaFa']);
                // tín hiệu mua
                Route::get('/signalIndex', [ClientDataFinancialController::class, 'signalIndex']);
                Route::post('/loadList_signal', [ClientDataFinancialController::class, 'loadList_signal']);
                // khuyến nghị vip
                Route::get('/recommendationsIndex', [ClientDataFinancialController::class, 'recommendationsIndex']);
                Route::post('/loadList_recommendations', [ClientDataFinancialController::class, 'loadList_recommendations']);
            
                // Danh mục Fintop
                Route::get('/categoryFintopIndex', [ClientDataFinancialController::class, 'categoryFintopIndex']);
                Route::post('/loadList_categoryFintop_vip', [ClientDataFinancialController::class, 'loadList_categoryFintop_vip']);
                Route::post('/loadList_categoryFintop_basic', [ClientDataFinancialController::class, 'loadList_categoryFintop_basic']);
            });
        // });
        Route::prefix('about')->group(function () {
            // Tra cứu cổ phiếu
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
        // Thư viện đầu tư
        Route::get('/library/index', [LibraryController::class, 'index']);
        Route::post('/library/loadList',[LibraryController::class,'loadList']);
        Route::get('/library/seeVideo',[LibraryController::class,'seeVideo']);
        // Đặc quyền hội viên
        Route::get('/privileges/index', [PrivilegesController::class, 'index']);

        // Nâng cấp tk 
        Route::get('/upgradeAcc/index', [UpgradeAccController::class, 'index']);
        Route::get('/upgradeAcc/viewForm', [UpgradeAccController::class, 'registerVip']);
        Route::post('/upgradeAcc/updateVip', [UpgradeAccController::class, 'updateVip']);

        // Đọc thông báo
        Route::get('readNotification', [ReadNotificationController::class, 'readNotification']);
    // });
    
    Route::prefix('des')->group(function () {
        Route::get('index', [DesController::class, 'index']);
    });
});


