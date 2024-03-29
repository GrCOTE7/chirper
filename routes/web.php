<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {

	return Inertia::render('Welcome', [
		'canLogin'       => Route::has('login'),
		'canRegister'    => Route::has('register'),
		'laravelVersion' => Application::VERSION,
		'phpVersion'     => PHP_VERSION,
	]);
});

// Route::get('/', function () {
// 	return inertia('Test');
// })->name('testi');

Route::get('/t', [TestController::class, 'index'])->name('test');
Route::get('/create', [UserController::class, 'create'])->name('create');
Route::post('/users', [UserController::class, 'store'])->name('store');

Route::get('/dashboard', function () {
	return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])
	->name('dashboard');

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])
		->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])
		->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])
		->name('profile.destroy');
});

Route::resource('chirps', ChirpController::class)
	->only(['index', 'store'])
	->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
