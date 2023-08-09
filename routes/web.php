<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

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

/* WEB API Routes: */
//--------------------------------------------------------------------------
// Auth API:
Route::post('/user-registration',[UserController::class, 'UserRegistration']);
Route::post('/user-login',[UserController::class, 'UserLogin']);
Route::post('/send-otp',[UserController::class, 'SendOTPCode']);
Route::post('/verify-otp',[UserController::class, 'VerifyOTP']);
Route::post('/reset-password ',[UserController::class, 'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/user-profile ',[UserController::class, 'UserProfile'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/user-update ',[UserController::class, 'UpdateProfile'])->middleware([TokenVerificationMiddleware::class]);

// User Logout:
Route::get('/logout',[UserController::class, 'UserLogout']);
