<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ContacController;

Route::get('/home', [HomeController::class, 'index'])->name('admin.home');

Route::prefix('tours')->name('admin.tours.')->group(function () {
    Route::get('/', [TourController::class, 'index'])->name('index');
    Route::get('/create', [TourController::class, 'create'])->name('create');
    Route::post('/store', [TourController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [TourController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [TourController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [TourController::class, 'destroy'])->name('delete');
    Route::delete('/delete-image/{id}', [TourController::class, 'deleteImage'])->name('delete-image');

});

Route::prefix('bookings')->name('admin.bookings.')->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('index');
    Route::get('/edit/{id}', [BookingController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [BookingController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [BookingController::class, 'destroy'])->name('delete');
});

Route::prefix('users')->name('admin.users.')->group(function () {
    // Danh sách người dùng
    Route::get('/', [UsersController::class, 'index'])->name('index');
    
    // Tạo mới người dùng
    Route::get('/create', [UsersController::class, 'create'])->name('create');
    Route::post('/store', [UsersController::class, 'store'])->name('store');
    
    // Chỉnh sửa thông tin người dùng
    // Sử dụng {user} hoặc {id} tùy theo cách bạn dùng Route Model Binding
    Route::get('/edit/{user}', [UsersController::class, 'edit'])->name('edit'); 
    Route::put('/update/{user}', [UsersController::class, 'update'])->name('update');
    
    // Xóa người dùng (hoặc cập nhật status/isActive)
    Route::delete('/delete/{user}', [UsersController::class, 'destroy'])->name('delete');
});

Route::prefix('blogs')->name('admin.blogs.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/create', [BlogController::class, 'create'])->name('create');
    Route::post('/store', [BlogController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [BlogController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [BlogController::class, 'destroy'])->name('delete');
    Route::get('/toggle/{id}', [BlogController::class, 'toggleStatus'])->name('toggle');
});

Route::prefix('contacts')->name('admin.contacts.')->group(function () {
    Route::get('/', [ContacController::class, 'index'])->name('index');
    
    // THÊM ROUTE NÀY: Dùng phương thức POST để cập nhật trạng thái
    Route::post('/mark-read/{id}', [ContacController::class, 'markAsRead'])->name('mark_read'); 

    Route::get('/edit/{id}', [ContacController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ContacController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ContacController::class, 'destroy'])->name('delete');
});