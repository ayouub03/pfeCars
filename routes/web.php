<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::view('/Login','Login');

Route::get('/Login',[AuthController::class,'showLoginPage'])->name('login');
Route::post('/Login',[AuthController::class,'validerLogin'])->name('login.submit');
Route::get('/SignUp',[AuthController::class,'showSignupPage'])->name('signupView');
Route::post('/SignUp',[AuthController::class,'signup'])->name('signup');

Route::get('/profile',[AuthController::class,'showProfile'])->name('profile');
Route::get('/profileClient',[AuthController::class,'showProfile'])->name('profileClient');

Route::view('/AddCar','AddCar');
 Route::view('/admin','admin');
 Route::view('/editProfile','editProfile');
 Route::view('/HOME','HOME');

 Route::view('/MarketCar','MarketCar');
Route::view('/profile','profile');
 Route::view('/profileClient','profileClient');
 Route::view('/reserverCar','reserverCar');
 Route::view('/test','test');
