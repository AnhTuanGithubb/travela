<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\FlightController;
use App\Http\Controllers\clients\HotelController;
use App\Http\Controllers\clients\BlogController;
use App\Http\Controllers\clients\ToursController;
use App\Http\Controllers\clients\ContactController;
use App\Http\Controllers\clients\TourDetailController;
use App\Http\Controllers\clients\BlogDetailController;
use App\Http\Controllers\clients\ReviewsController;
use App\Http\Controllers\clients\CheckOutController;
use App\Http\Controllers\clients\BookingController;
use App\Http\Controllers\clients\LoginController;
use App\Http\Controllers\clients\RegisterController;
use App\Http\Controllers\clients\ToursBookingController;

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

// Route::get('/', function () {
//     return view('home');
// });
//Route::get(url: '/', action: [HomeController::class, 'index']) ->name(name: 'home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/flight', [FlightController::class, 'index'])->name('flight');
Route::get('/hotel', [HotelController::class, 'index'])->name('hotel');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/tour-detail/{id}', [TourDetailController::class, 'index'])->name('tour-detail');
Route::get('/blog-detail', [BlogDetailController::class, 'index'])->name('blog-detail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/checkout', [CheckOutController::class, 'index'])->name('checkout');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');


Route::get('/toursbooking', [ToursBookingController::class, 'index'])->name('toursbooking');

Route::post('/toursbooking/cancel/{id}', [ToursBookingController::class, 'cancel'])->name('toursbooking.cancel');


// lọc tuor bằng get 
Route::get('/tours', [ToursController::class, 'index'])->name('tours');
Route::get('/filter-tours', [ToursController::class, 'filterTours'])->name('filter-tours');


// comment post
Route::post('/review/store', [ReviewsController::class, 'store'])->name('review.store');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/tour/{id}', [TourDetailController::class, 'index'])->name('clients.tour.detail');


// Trang form booking
Route::get('/booking/{id}', [BookingController::class, 'create'])->name('clients.booking.create');

// Submit form
//Route::post('/booking/store', [BookingController::class, 'store'])->name('clients.booking.store');

Route::post('/booking/store', [BookingController::class, 'store'])
    ->middleware('checklogin') // ✅ thêm middleware
    ->name('clients.booking.store');

//loginnn route


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Route đăng xuất
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//đăng kí
// Register routes
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

