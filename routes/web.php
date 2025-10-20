<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\FlightController;
use App\Http\Controllers\clients\HotelController;
use App\Http\Controllers\clients\BlogController;
use App\Http\Controllers\clients\TourController;
use App\Http\Controllers\clients\ContactController;

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
Route::get('/tour', [TourController::class, 'index'])->name('tour');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
