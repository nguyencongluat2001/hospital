<?php

use Illuminate\Support\Facades\Route;
use Modules\Client\Page\Home\Controllers\HomeController as ClientHomeController;

use App\Http\Controllers\Auth\LoginController;
use Modules\Client\Auth\Controllers\RegisterController;
use Modules\Client\Page\Chat\Controllers\ChatController;
use Modules\Client\Page\Facilities\Controllers\FacilitiesController;
use Modules\Client\Page\Specialty\Controllers\SpecialtyController;

//Dashboard
use Modules\System\Dashboard\Users\Controllers\UserController;

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

// Auth::routes();

// Trang chủ
Route::get('/', [ClientHomeController::class, 'index']);
// Trang chủ cơ sở bệnh viện
Route::get('/facilities', [FacilitiesController::class, 'index']);
Route::get('/facilities/{code}', [FacilitiesController::class, 'detailIndex']);
Route::get('/schedule/{code}', [FacilitiesController::class, 'schedule']);
Route::get('/client/schedule/createForm', [FacilitiesController::class,'createForm']);
Route::get('/client/schedule/loadList', [FacilitiesController::class,'loadList']);
Route::get('/client/schedule/getHuyen',[FacilitiesController::class,'getHuyen']);
Route::get('/client/schedule/getXa',[FacilitiesController::class,'getXa']);


// chuyên khoa
Route::get('/specialty', [SpecialtyController::class, 'index']);
Route::get('/specialty/{code}', [SpecialtyController::class, 'specialty']);

Route::prefix('chat')->group(function () {
    Route::get('', 'Client\ChatController@index')->name('index');
    Route::post('/broadcast', [ChatController::class, 'broadcast'])->name('broadcast');
    Route::post('/receive', [ChatController::class, 'receive'])->name('receive');
    
});
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


