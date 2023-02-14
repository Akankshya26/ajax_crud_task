<?php

use App\Http\Controllers\ProductController;
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



Route::get('/', [ProductController::class, 'products'])->name('products');
Route::post('add-product', [ProductController::class, 'addproduct'])->name('add.product');
Route::post('update-product', [ProductController::class, 'updateProduct'])->name('update.product');
Route::post('delete-product', [ProductController::class, 'deleteProduct'])->name('delete.product');
Route::get('/pagination/paginate-data', [ProductController::class, 'pagination']);
Route::get('/serch-product', [ProductController::class, 'serachProduct'])->name('search.product');
