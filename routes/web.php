<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;


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


//static

Route::get('/weddingkippa',function(){
    return view('index');
})->name('home');
Route::get('/weddingkippa/gallery',[UserController::class,'viewGallery'])->name('gallery');
Route::get('/weddingkippa/services',[UserController::class,'viewServices'])->name('services');
Route::get('/weddingkippa/services/wedding',[UserController::class,'viewWedding'])->name('services.wedding');

//bookings
Route::middleware('auth')->group(function () {
    Route::get('/weddingkippa/booking/date',[BookingController::class,'checkDate'])->name('booking.date');
    Route::get('/weddingkippa/checkdate',[BookingController::class,'checkAvailable'])->name('booking.available');
    Route::post('/weddingkippa/booking/verify',[BookingController::class,'validateBooking'])->name('booking.verify');
    Route::get('/weddingkippa/booking/confirm',[BookingController::class,'confirmBooking'])->name('booking.confirm');
    Route::post('/weddingkippa/booking/store',[BookingController::class,'store'],)->name('booking.store');
    Route::get('/weddingkippa/user/bookings',[BookingController::class,'viewUserBookings'])->name('user.bookings');
    Route::get('/weddingkippa/user/edit',[UserController::class,'editUser'])->name('user.edit');
    Route::post('/weddingkippa/user/update',[UserController::class,'updateUser'])->name('user.update');
});

// Route::get('/home/booking/form',[BookingController::class,'viewBooking'])->name('booking.form');





//login/register
Route::get('/weddingkippa/user/login',[UserController::class,'viewLogin'])->name('login');
Route::get('/weddingkippa/user/register',[UserController::class,'viewRegister'])->name('user.register');
Route::post('/weddingkippa/user/verify',[UserController::class,'verifyLogin'])->name('user.verify');
Route::post('/weddingkippa/user/signup',[UserController::class,'store'])->name('user.signup');
Route::get('/weddingkippa/user/logout',[UserController::class,'logout'])->name('user.logout');



//admin
Route::middleware('admin')->group(function(){
    Route::get('/weddingkipa/admin/bookings',[BookingController::class,'viewAllBookings'])->name('admin.bookings');
    Route::get('/weddingkippa/services/prices',[UserController::class,'viewAllServices'])->name('admin.services');
    Route::post('/weddingkippa/services/update',[UserController::class,'editPrices'])->name('services.update');
    Route::post('/weddingkippa/admin/bookings/update',[BookingController::class,'update'])->name('update.booking');
});
