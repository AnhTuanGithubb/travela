<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\{
    HomeController,
    AboutController,
    FlightController,
    HotelController,
    ToursController,
    TourDetailController,
    BlogController,
    BlogDetailController,
    BlogCommentsController,
    ReviewsController,
    ContactController,
    BookingController,
    CheckOutController,
    ToursBookingController,
    LoginController,
    RegisterController,
    InforController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Đây là nơi định nghĩa tất cả route của client.
| Được chia theo nhóm: Trang chính, Tour, Blog, Booking, User...
|--------------------------------------------------------------------------
*/

// 🏠 TRANG CHÍNH --------------------------------------------------------------
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// ✈️ FLIGHT & HOTEL -----------------------------------------------------------
Route::get('/flight', [FlightController::class, 'index'])->name('flight');
Route::get('/hotel', [HotelController::class, 'index'])->name('hotel');

// 🗺️ TOUR --------------------------------------------------------------------
Route::get('/tours', [ToursController::class, 'index'])->name('tours');
Route::get('/filter-tours', [ToursController::class, 'filterTours'])->name('filter-tours');

// Chi tiết tour + tăng view
Route::get('/tour-detail/{id}', [TourDetailController::class, 'index'])->name('tour-detail');
Route::get('/tour/{id}', [TourDetailController::class, 'index'])->name('clients.tour.detail'); // alias (nếu cần)

// Đánh giá tour
Route::post('/review/store', [ReviewsController::class, 'store'])->name('review.store');

// 📰 BLOG --------------------------------------------------------------------
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-detail/{id}', [BlogDetailController::class, 'index'])->name('blog-detail');

// Bình luận blog
Route::post('/blogcomment/store', [BlogCommentsController::class, 'store'])->name('blogcomment.store');
Route::get('/blogcomment/{blogId}', [BlogCommentsController::class, 'getComments'])->name('blogcomment.get');

// 🧾 BOOKING & CHECKOUT -------------------------------------------------------
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/booking/{id}', [BookingController::class, 'create'])->name('clients.booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])
    ->middleware('checklogin')
    ->name('clients.booking.store');

Route::get('/checkout', [CheckOutController::class, 'index'])->name('checkout');

// Quản lý booking tour
Route::get('/toursbooking', [ToursBookingController::class, 'index'])->name('toursbooking');
Route::post('/toursbooking/cancel/{id}', [ToursBookingController::class, 'cancel'])->name('toursbooking.cancel');

// 👤 USER (Login / Register / Info) ------------------------------------------
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Trang thông tin cá nhân
Route::get('/infor', [InforController::class, 'index'])->name('infor');
Route::post('/infor/update', [InforController::class, 'update'])->name('infor.update');
