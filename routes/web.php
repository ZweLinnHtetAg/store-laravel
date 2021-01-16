<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('categories',[CategoryController::class,'index']);

Route::get('create-category',[CategoryController::class,'create']);

Route::post('create-category',[CategoryController::class,'store']);

Route::get('delete-category/{category}',[CategoryController::class,'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
