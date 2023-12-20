<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth_Controller;
use App\Http\Controllers\Home_Controller;
use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\EmailVerification_Controller;
use App\Http\Controllers\PasswordReset_Controller;

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

Route::get("/", [Home_Controller::class, "index"]);

// ! AUTH SECTION
Route::controller(Auth_Controller::class)->group(function () {
    // TODO | LOGIN SESSION
    Route::get("session_users", "login_index")->name('login');
    // Route::get("login", "login_index");

    Route::post("session_users/login", "login_code");

    // TODO | LOGOUT SESSION
    Route::get("session_users/logout", "logout");

    // TODO | REGIISTER SESSION
    Route::get("session_users/registrasi", "registrasi");
    Route::post("session_users/signup", "registrasi_code");
});

// ! EMAIL VERIFICATION
Route::controller(EmailVerification_Controller::class)->group(function () {
    // Route::get("/email/verify", "index");
    
    // TODO | NOTICE MESSAGE NOTIFICATION
    Route::get("/email/verify", "notice")->middleware('auth')->name('verification.notice');

    // TODO | AFTER TOUCH BUTTON VERIF ON EMAIL
    Route::get("/email/verify/{id}/{hash}", "verify")->middleware(['auth', 'signed'])->name('verification.verify');

    // TODO | RE-SEND EMAIL VERIF
    Route::post('/email/verify/resend-email-verification', 'resendEmailVerif')->middleware(['auth', 'throttle:6,1'])->name('verification.send');
});

// ! FORGET PASSWORD
Route::controller(PasswordReset_Controller::class)->group(function(){
    // TODO || VIEW RESET
    Route::get('/forgot-password', 'index')->middleware('guest')->name('password.request');

    // TODO || SEND THE PASSWORD FROM EMAIL FORM
    Route::post('/forgot-password', 'resetPassword')->middleware('guest')->name('password.email');

    // TODO || REDIRECT FORM PASSWORD WHEN CLICK BUTTON IN INBOX EMAIL
    Route::get('/reset-password/{token}', 'resetPasswordForm')->middleware('guest')->name('password.reset');

    // TODO || 
});

// ! DASHBOARD SECTION
Route::get("dashboard", [Dashboard_Controller::class, "index"])->middleware(['auth', 'auth.session', 'verified']);
