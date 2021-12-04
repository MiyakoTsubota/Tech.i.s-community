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

Route::get('/', function () {
    return view('adminlte');
});

Auth::routes();
Route::get('/adminlte', [App\Http\Controllers\HomeController::class, 'index'])->name('adminlte');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/new_community', [App\Http\Controllers\new_communityController::class, 'index'])->name('new_community');
Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settngs/index');
