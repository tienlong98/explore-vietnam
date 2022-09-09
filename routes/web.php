<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\BookedTourController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListTourController;
use App\Http\Controllers\ListyamaController;
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
Route::get('sapa', [ListyamaController::class, 'sapa'])->name('sapa');
Route::get('phuquoc', [ListyamaController::class, 'phuquoc'])->name('phuquoc');
Route::get('listtour', [ListTourController::class, 'index'])->name('listtour');
Route::get('user-category/{slug}', [UserCategoryController::class, 'index']);
Route::get('listtour/{slug}', [ListTourController::class, 'detailtour'])->name('tour.detail');
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
});
