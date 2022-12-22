<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/',[ProductController::class,'home'])->name('home');
Route::get('/manage-product',[ProductController::class,'manage'])->name('manage.product');
Route::get('/edit-product',[ProductController::class,'edit'])->name('edit.product');
