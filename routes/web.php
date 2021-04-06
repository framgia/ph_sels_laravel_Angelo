<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'showDashboardPage'])->name('dashboard');

Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'showCategoriesPage'])->name('categories');

Route::get('/words-learned', [App\Http\Controllers\WordsLearnedController::class, 'showWordsLearnedPage'])->name('words-learned');
 
Route::get('/profile-page', [App\Http\Controllers\UserProfileController::class, 'showUserProfilePage'])->name('profile-page');
 
Route::get('/quiz/{quiz}', [App\Http\Controllers\QuizzesController::class, 'showQuiz'])->name('quiz');

Route::get('/quiz/{quiz}/result', [App\Http\Controllers\QuizzesController::class, 'showResult'])->name('quizResult');
