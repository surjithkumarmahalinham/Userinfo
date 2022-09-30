<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/logincheck', [LoginController::class,'login'])->name('login.check');
Route::any('/', [LoginController::class,'register'])->name('view.register');
Route::post('/registerstore', [LoginController::class,'registerstore'])->name('register.store');
Route::post('/otpvalid', [LoginController::class,'otpvalidate'])->name('otp.valid');
Route::get('/login', [LoginController::class,'loginform'])->name('login.view');
Route::get('/dashboard', [LoginController::class,'home'])->name('view.home');
Route::get('/pdf-download', [LoginController::class,'download'])->name('download');
Route::any('/logout', [LoginController::class,'logout'])->name('logout');
