<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InspirationController;
Route::get('/', function () {
    return view('index');
});
Route::get('/products', [ProductController::class, 'index'])->name('product');

Route::get('/inspirations', [InspirationController::class, 'index'])->name('inspiration');
