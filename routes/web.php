<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\TourController;
// Главная страница
Route::get('/', [StartController::class, 'index'])->name('start.index');


Route::prefix('b')->group(function () {
	Route::get('/{business:slug}', [BusinessController::class, 'show'])
		->name('business.show');

	Route::get('/{business:slug}/{tour:slug}', [TourController::class, 'show'])
		->name('tours.show');
});
// Списки
Route::get('/businesses', [BusinessController::class, 'index'])->name('businesses.index');
Route::get('/tours', [TourController::class, 'index'])->name('tours.index');

// Детальные страницы