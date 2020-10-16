<?php

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

Route::get('/', [App\Http\Controllers\WebController::class, 'Logon'])->name('web.logon');
Route::post('/', [\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('web.post.logon');

Route::get('/incident/new', [App\Http\Controllers\WebController::class, 'newIncident'])->name('web.incident.new');
Route::get('/profile', [App\Http\Controllers\WebController::class, 'profile'])->name('web.profile')
    ->middleware('auth');

Route::get('/register', [App\Http\Controllers\WebController::class, 'register'])->name('web.register');
Route::post('/register', [\App\Http\Controllers\Auth\UserController::class, 'register'])->name('web.post.register');
