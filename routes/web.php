<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//User
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/trang-chu', [App\Http\Controllers\HomeController::class, 'index']); 

//Admin
Route::get('/login', [App\Http\Controllers\AdminController::class, 'index']); 
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']); 