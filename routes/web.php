<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'showDashboardPage'])->name('dashboard');

Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'showCategoriesPage'])->name('categories');
