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

/*
 * Hero Routes
 */

Route::get('/', function () {
    return view('web.home');
})->name('web.home');

Route::get('/hero', [\App\Http\Controllers\HeroController::class, 'home'])->name('web.hero.home');


/*
 * ONG Routes
 */

// Auth Routes
Route::get('/login', [App\Http\Controllers\WebController::class, 'Logon'])->middleware('guest')
    ->name('web.logon');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('web.post.logon');

Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('web.logout');

Route::get('/register', [App\Http\Controllers\WebController::class, 'register'])->middleware('guest')
    ->name('web.register');
Route::post('/register', [\App\Http\Controllers\Auth\UserController::class, 'register'])->name('web.post.register');

// User Routes
Route::get('/profile', [App\Http\Controllers\WebController::class, 'profile'])->name('web.profile')
    ->middleware('auth');

Route::get('/incident/new', [App\Http\Controllers\WebController::class, 'newIncident'])->middleware('auth')
    ->name('web.incident.new');
Route::post('/incident', [App\Http\Controllers\WebController::class, 'storeIncident'])->middleware('auth')
    ->name('web.incident.store');

Route::delete('/incident/{incident}',
    [App\Http\Controllers\WebController::class, 'destroyIncident'])->middleware('auth')
    ->name('web.incident.destroy');

