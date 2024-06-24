<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);