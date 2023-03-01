<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\KalendarController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//TEAM ROUTE
Route::get('/team', [TeamController::class, 'index'])->name('teamPlayer');
Route::get('/team/create', [TeamController::class, 'create'])->name('createPlayer');
Route::post('/team', [TeamController::class, 'store'])->name('storePlayer');
Route::get('/team/{id}', [TeamController::class, 'show'])->name('showPlayer');
Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('editPlayer');
Route::patch('/team/{id}', [TeamController::class, 'update'])->name('updatePlayer');
Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('deletePlayer');


//STATISTIKS ROUTE
Route::get('/statistiks', [StatistikController::class, 'index'])->name('statPlayer');
Route::get('/team/create', [TeamController::class, 'create'])->name('createPlayer');
Route::post('/team', [TeamController::class, 'store'])->name('storePlayer');
Route::get('/team/{id}', [TeamController::class, 'show'])->name('showPlayer');
Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('editPlayer');
Route::patch('/team/{id}', [TeamController::class, 'update'])->name('updatePlayer');
Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('deletePlayer');

Route::get('/kalendar', [KalendarController::class, 'index'])->name('kalendar');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/about', [AboutController::class, 'index'])->name('about');
