<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
// Главная страница
Route::get('/', [StartController::class, 'index'])->name('start.index');


Route::prefix('b/me')->group(function () {
	// Главная ЛК (разные view для гостей и авторизованных)
	Route::get('/', [AccountController::class, 'dashboard'])
		->name('account');

	// Регистрация/логин (только для гостей)
	Route::middleware('guest')->group(function () {

		Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
		Route::post('/register', [AuthController::class, 'register']);


		Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
		Route::post('/login', [AuthController::class, 'login']);
	});

	// Функционал ЛК (только для авторизованных)
	Route::middleware('auth')->group(function () {
		// Создание бизнеса
		Route::get('/create', [BusinessController::class, 'create'])
			->name('business.create');

		Route::post('/store', [BusinessController::class, 'store']);

		// Управление турами
		Route::get('/add-tour', [TourController::class, 'create'])
			->name('tours.create');

		Route::post('/store-tour', [TourController::class, 'store']);

		// Выход
		Route::post('/logout', [AuthController::class, 'logout'])
			->middleware('auth')
			->name('logout');
	});
});


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