<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function (){
    Route::controller(LoginController::class)->group(function (){
        Route::get('login-form','showLoginForm')->name('login-Form');
        Route::post('login','login')->name('login');
        Route::post('logout','logout')->name('logout');
    });
    Route::get('', [ HomeController::class,'home' ])->name('home');
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/project', ProjectController::class);

    Route::get('/profile', [HomeController::class, 'profile'])->name('profile-page');
    Route::put('/profile_update/{id}', [HomeController::class, 'update'])->name('update-profile-page');
    // Route::post('/validate-otp', [ComfirmOtpController::class, 'ValidateOtp'])->name('validateotp');
    Route::put('change-passwprd', [HomeController::class, 'validatepassword'])->name('change-password-page');

    Route::get('optimize',function (){
        \Illuminate\Support\Facades\Artisan::call('optimize');
        return 1;
    });
    Route::get('clear',function (){
        \Illuminate\Support\Facades\Artisan::call('optimize:clear');
        return 1;
    });
});
