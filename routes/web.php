<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
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


Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('/create', [UserController::class, 'create'])->name('users.create');
Route::post('/create', [UserController::class, 'store'])->name('users.store');


Route::middleware('auth')->prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('/{id}/edit', [ProductController::class, 'update'])->name('admin.product.update');
        Route::get('/{id}/destroy', [ProductController::class, 'destroy'])->name('admin.product.destroy');
        Route::post('/search', [ProductController::class, 'search'])->name('admin.product.search');

    });
    Route::prefix('/customer')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('admin.customer.index');
        Route::get('/{id}/delete', [CustomerController::class, 'destroy'])->name('admin.customer.delete');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/{id}/delete', [UserController::class, 'delete'])->name('users.delete');
    });
    Route::prefix('/productDetail')->group(function () {
        Route::get('/', [ProductDetailController::class, 'index'])->name('admin.productDetail.index');
        Route::get('/create', [ProductDetailController::class, 'create'])->name('admin.productDetail.create');
        Route::post('/create', [ProductDetailController::class, 'store'])->name('admin.productDetail.store');
        Route::get('/{product_id}/edit', [ProductDetailController::class, 'edit'])->name('admin.productDetail.edit');
        Route::post('/{product_id}/edit', [ProductDetailController::class, 'update'])->name('admin.productDetail.update');
        Route::get('/{product_id}/destroy', [ProductDetailController::class, 'destroy'])->name('admin.productDetail.destroy');
    });
    Route::prefix('/order')->group(function (){
        Route::get('/',[OrderController::class,'index'])->name('admin.order.index');
        Route::get('/{id}/edit',[OrderController::class,'edit'])->name('admin.order.edit');
        Route::post('/{id}/edit',[OrderController::class,'update'])->name('admin.order.update');
        Route::get('/{id}/delete',[OrderController::class,'destroy'])->name('admin.order.destroy');
    });
});
Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/{id}/detail', [HomeController::class, 'showDetail'])->name('home.showDetail');
    Route::get('/search-samsung', [SearchController::class, 'searchSamsung'])->name('home.searchSamsung');
    Route::get('/search-iphone', [SearchController::class, 'searchApple'])->name('home.searchApple');
    Route::get('/search-vsmart', [SearchController::class, 'searchVsmart'])->name('home.searchVsmart');
    Route::get('/search-10.000.000', [SearchController::class, 'search10'])->name('home.search10');
    Route::get('/search-10.000.000-15.000.000', [SearchController::class, 'search1015'])->name('home.search1015');
    Route::get('/search-15.000.000-20.000.000', [SearchController::class, 'search1520'])->name('home.search1520');
    Route::get('/search-20.000.000~', [SearchController::class, 'search20'])->name('home.search20');
    Route::post('/search', [HomeController::class, 'search'])->name('home.search');
    Route::prefix('/cart')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('cart.index');
        Route::get('/{id}/add-to-cart', [CartController::class, 'addToCart'])->name('cart.addToCart');
        Route::get('/{id}/remove', [CartController::class, 'removeProductIntoCart'])->name('cart.remove');
        Route::get('/Checkout', [CartController::class, 'showFormCheckout'])->name('cart.showFromCheckout');
        Route::post('/Checkout', [CartController::class, 'checkout'])->name('cart.checkout');

    });
});

