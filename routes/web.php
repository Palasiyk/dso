<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//TEAM ROUTE
Route::get('/team', [TeamController::class, 'index'])->name('teamPlayer');
Route::get('/team/create', [TeamController::class, 'create'])->name('createPlayer');
Route::post('/team', [TeamController::class, 'store'])->name('storePlayer');
Route::get('/team/{player_id}', [TeamController::class, 'show'])->name('showPlayer');
Route::get('/team/{player_id}/edit', [TeamController::class, 'edit'])->name('editPlayer');
Route::patch('/team/update', [TeamController::class, 'update'])->name('updatePlayer');
Route::get('/team/dalete', [TeamController::class, 'dalete'])->name('daletePlayer');

