<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home',[App\Http\Controllers\AdminController::class,'homePage']);
Route::get('/contact/page',[App\Http\Controllers\AdminController::class,'contactPage']);
Route::get('/chartjs/page',[App\Http\Controllers\AdminController::class,'loadChartJsPage']);
