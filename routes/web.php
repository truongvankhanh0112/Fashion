<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', 'HomeController@index');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/trangchu', 'HomeController@index');