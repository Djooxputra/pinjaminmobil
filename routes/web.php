<?php

use App\Http\Controllers\AuthC;
use App\Http\Controllers\CarC;
use App\Http\Controllers\HomeC;
use App\Http\Controllers\RentC;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeC::class, 'index']);
Route::get('/login', [AuthC::class, 'login']);
Route::post('/login', [AuthC::class, 'loginAttempt']);
Route::get('/register', [AuthC::class, 'register']);
Route::post('/register', [AuthC::class, 'registerAttempt']);
Route::get('/logout', [AuthC::class, 'logout']);

Route::get('/car', [CarC::class, 'index']);
Route::post('/addcar', [CarC::class, 'add']);
Route::post('/deletecar', [CarC::class, 'delete']);

Route::get('/debug', [RentC::class, 'checkAvailability']);
