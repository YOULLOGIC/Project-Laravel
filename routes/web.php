<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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
Route::get('/sewa', [SewaController::class, 'index']);
Route::get('/sewa/create', [SewaController::class, 'create']);
Route::post('/sewa', [SewaController::class, 'store']);
Route::get('/sewa/show/{id}', [SewaController::class, 'show']);
Route::get('/sewa/edit/{id}', [SewaController::class, 'edit']);
Route::patch('/sewa/{id}', [SewaController::class, 'update']);
Route::delete('/sewa/{id}', [SewaController::class, 'destroy']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit']);
Route::patch('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

Route::get('/user', [UserController::class, 'index']);
