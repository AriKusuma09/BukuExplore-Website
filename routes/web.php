<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\AllProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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


Route::get('/', function () {
    return view('home-page.home', [
        "title" => "Home"
    ]);
});


// Product
Route::get('/all-product', [AllProductController::class, 'goallproduct']);
Route::get('/product-page/product', [AllProductController::class, 'goproduct']);


// Login
Route::get('/login-page/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login-page/login', [LoginController::class, 'authenticate']); 
Route::post('/logout', [LoginController::class, 'logout']);


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index']);
    
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('add-category', [CategoryController::class, 'add']);

    Route::post('insert-category', [CategoryController::class, 'insert']);
    Route::get('edit-product/{id}', [CategoryController::class, 'edit']);
    Route::put('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'delete']);
});



// Register
Route::get('/register-page/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register-page/register', [RegisterController::class, 'store']);



// Cart
Route::get('/cart', function () {
    return view('cart.cart', [
        "title" => "Cart"
    ]);
});


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Dashboard All Product
Route::get('/dashboard/category/product-dashboard', function () {
    return view('dashboard.product-dashboard');
});

// Dashboard Categories
Route::get('/dashboard/category-dashboard', function () {
    return view('dashboard.category.category-dashboard');
});