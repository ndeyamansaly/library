<?php

use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/administrateur', [AdministrateurController::class, 'index']);
//Route::get('/documents', 'DocumentController@index');
//Route::get('/documents/{id}', 'DocumentController@show');
// return view('welcome');

# Reconfiguring project routes
# Auth
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
