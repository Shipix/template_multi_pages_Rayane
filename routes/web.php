<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/about', [AboutController::class,'index'])->name('about');

Route::get('/product', [ProductController::class,'index'])->name('product');

Route::get('/store', [StoreController::class,'index'])->name('store');