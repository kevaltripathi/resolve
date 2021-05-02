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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/patient-page-1', function () {
    return view('patient1');
})->middleware(['auth']);

Route::get('/pharm-1', function () {
    return view('pharm1');
})->middleware(['auth']);

Route::get('/pharm-2', function () {
    return view('pharm2');
})->middleware(['auth']);

Route::post('sql', '\App\Http\Controllers\SQL@db')->name('sql');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

require __DIR__.'/auth.php';

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
