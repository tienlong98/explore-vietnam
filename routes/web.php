<?php

use App\Http\Controllers\Admin\BookedController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\BookedTourController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListTourController;
use App\Http\Controllers\ListyamaController;
// them mot aboutController
use  App\Http\Controllers\aboutController;
// them mot contactController
use App\Http\Controllers\contactController;

use App\Http\Controllers\travelTipsController;

use App\Http\Controllers\UserCategoryController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('change/{locale}', [HomeController::class, 'change_language'])->name('change_language');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('listyama', [ListyamaController::class, 'index'])->name('listyama');
Route::get('listditich', [ListyamaController::class, 'index1'])->name('listditich');
Route::get('listumi', [ListyamaController::class, 'index2'])->name('listumi');
// list review
Route::get('sapa', [ListyamaController::class, 'sapa'])->name('sapa');
Route::get('phuquoc', [ListyamaController::class, 'phuquoc'])->name('phuquoc');
Route::get('camau', [ListyamaController::class, 'camau'])->name('camau');
Route::get('phanxipang', [ListyamaController::class, 'phanxipang'])->name('phanxipang');
Route::get('rungduabaymau', [ListyamaController::class, 'rungduabaymau'])->name('rungduabaymau');
// about
Route::get('about', [aboutController::class, 'about'])->name('about');
// contact
Route::get('contact', [contactController::class, 'contact'])->name('form');
// list travel tips
Route::get('transport',[travelTipsController::class, 'transport'])->name('transport');
Route::get('safety',[travelTipsController::class, 'safety'])->name('safety');
Route::get('weather',[travelTipsController::class, 'weather'])->name('weather');

Route::get('camnangdulich',[ListTourController::class, 'camnangdulich'])->name('camnangdulich');


Route::get('listtour', [ListTourController::class, 'index'])->name('listtour');
Route::get('user-category/{slug}', [UserCategoryController::class, 'index']);
Route::get('listtour/{slug}', [ListTourController::class, 'detailtour'])->name('tour.detail');
Route::get('search', [ListTourController::class, 'search']);

Route::post('addcart/{id}', [CartController::class, 'addcart']);
Route::middleware(['auth'])->group(function () {
    Route::get('view-cart', [CartController::class, 'index']);
    Route::get('delete-cart/{id}', [CartController::class, 'delete']);
    Route::get('booked', [BookedTourController::class, 'showbooked']);
    Route::get('thank', [CartController::class, 'submit']);
    Route::post('booked-tour', [BookedTourController::class, 'bookeditem']);
    Route::post('rating', [ListTourController::class, 'addrate']);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index'])->name('dashboard');
    Route::get('categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('add-category', [CategoryController::class, 'add'])->name('add-category');
    Route::post('insert-category', [CategoryController::class, 'insert'])->name('insert-category');
    Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('edit-category');
    Route::put('update-category/{id}', [CategoryController::class, 'update'])->name('update-category');
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy'])->name('delete-category');
    Route::get('tours', [TourController::class, 'index'])->name('tours');
    Route::get('add-tour', [TourController::class, 'add'])->name('add-tour');
    Route::post('insert-tour', [TourController::class, 'insert'])->name('insert-tour');
    Route::get('edit-tour/{id}', [TourController::class, 'edit'])->name('edit-tour');
    Route::put('update-tour/{id}', [TourController::class, 'update'])->name('update-tour');
    Route::get('delete-tour/{id}', [TourController::class, 'destroy'])->name('delete-tour');
    Route::get('hotels', [HotelController::class, 'index'])->name('hotels');
    Route::get('add-hotel', [HotelController::class, 'add'])->name('add-hotel');
    Route::post('insert-hotel', [HotelController::class, 'insert'])->name('insert-hotel');
    Route::get('edit-hotel/{id}', [HotelController::class, 'edit'])->name('edit-hotel');
    Route::put('update-hotel/{id}', [HotelController::class, 'update'])->name('update-hotel');
    Route::get('delete-hotel/{id}', [HotelController::class, 'destroy'])->name('delete-hotel');
    Route::get('cars', [CarController::class, 'index'])->name('cars');
    Route::get('add-car', [CarController::class, 'add'])->name('add-car');
    Route::post('insert-car', [CarController::class, 'insert'])->name('insert-car');
    Route::get('edit-car/{id}', [CarController::class, 'edit'])->name('edit-car');
    Route::put('update-car/{id}', [CarController::class, 'update'])->name('update-car');
    Route::get('delete-car/{id}', [CarController::class, 'destroy'])->name('delete-car');
    Route::get('users', [FrontendController::class, 'user'])->name('users');
    Route::get('delete-user/{id}', [FrontendController::class, 'destroy'])->name('delete-user');
    Route::get('admin-booked', [BookedController::class, 'index'])->name('booked');
    Route::get('admin-booked/{id}', [BookedController::class, 'view']);
    Route::put('update-status/{id}', [BookedController::class, 'update']);
});