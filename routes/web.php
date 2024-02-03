<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController as BackendProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/details', [ProductController::class, 'details'])->name('products.details');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/products', [BackendProductController::class, 'index'])->name('admin.products');
Route::get('/admin/products/create', [BackendProductController::class, 'create'])->name('admin.products.create');
Route::get('/admin/products/{product}/edit', [BackendProductController::class, 'edit'])->name('admin.products.edit');

Route::post('/admin/products/store', [BackendProductController::class, 'store'])->name('admin.products.store');

Route::get('/admin/products/{product}/destroy', [BackendProductController::class, 'destroy'])->name('admin.products.destroy');










Route::get('/product', function () {
    return view('backend.product.index');
});

Route::get('/product/details', function () {
    return "Product Details";
})->name('product.details');



