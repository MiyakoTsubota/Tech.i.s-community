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
//ホーム画面





Route::get('/adminlte', [App\Http\Controllers\HomeController::class, 'index'])->name('adminlte');
//必要なし（Laravelホーム画面）
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//コミュニティ新規作成画面
Route::get('/new_community', [App\Http\Controllers\new_communityController::class, 'index'])->name('new_community');

//退会画面
Route::get('/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'index'])->name('withdrawal');
Route::post('/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'index'])->name('withdrawal');
//退会完了画面
Route::get('/withdrawal_completion', [App\Http\Controllers\Withdrawal_CompletionController::class, 'index'])->name('withdrawal_completion');

