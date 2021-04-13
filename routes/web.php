<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\User\MainController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\SslCommerzPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/



//----------------------------------------------------------------------------------------------------
// ADMIN ROUTE START

Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){

    Route::get('/login',[AdminController::class, 'loginForm']);
    Route::post('/login',[AdminController::class, 'store'])->name('admin.login');

});

Route::get('admin/logout',[AdminController::class, 'destroy'])->name('admin.logout');  

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin.admin_dashboard'); // login korle admin dashboard a jabe
    })->name('dashboard'); 


// USER ROUTE START
    
Route::get('/',[WelcomeController::class, 'index'])->name('welcome');  


Route::group(['middleware' => ['preventBackButtonHistory']], function () {

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('user.user_dashboard'); // login korle user dashboard page a jabe
})->name('dashboard')->middleware('auth')->middleware('verified');


Route::get('/user/logout',[MainController::class, 'userLogout'])->name('user.logout'); // user logout


    // PROFILE ROUTE

    Route::group(['middleware' => ['auth', 'verified']], function () {
        
        Route::get('/profile',[ProfileController::class, 'myProfile'])->name('user.profile'); 
        Route::get('/password-change-form',[ProfileController::class, 'passwordChangeForm'])->name('password.change.form'); 
        Route::post('/password-change-request',[ProfileController::class, 'passwordChangeRequest'])->name('password.change.request'); 
    });


});


Route::get('/{vue_capture?}',function () {
    return view('welcome');
})->where('vue_capture', '[\/\w\.-]*');

