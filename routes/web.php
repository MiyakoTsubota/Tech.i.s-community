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
Route::get('/new_community', [App\Http\Controllers\New_communityController::class, 'index'])->name('new_community');
//退会画面
Route::get('/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'index'])->name('withdrawal');
Route::post('/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'index'])->name('withdrawal');
//退会完了画面
Route::get('/withdrawal_completion', [App\Http\Controllers\Withdrawal_CompletionController::class, 'index'])->name('withdrawal_completion');
//設定画面
Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('/settngs');
//プロフィール編集画面
Route::get('/profile_edit', [App\Http\Controllers\Profile_editController::class, 'index'])->name('profile_edit');
//チャット画面
Route::get('/chats', [App\Http\Controllers\ChatController::class, 'index'])->name('chats');
Route::post('/chat', [App\Http\Controllers\ChatController::class, 'store'])->name('chat');
//削除
Route::delete('/chat/{chat}', [App\Http\Controllers\ChatController::class, 'destroy'])->name('/chat/{chat}');
//編集
// Route::get('/edit/{id}/', [App\Http\Controllers\ChatController::class, 'edit'])->name('/edit/{id}'); 
// Route::patch('/edit/{id}/', [App\Http\Controllers\ChatController::class, 'edit_confirm'])->name('/edit/{id}'); 
// Route::post('/edit/{id}/', [App\Http\Controllers\ChatController::class, 'edit_finish'])->name('/edit/{id}'); 

//更新
Route::get('/edit/{id}', [App\Http\Controllers\ChatController::class, 'edit_index']); //入力
Route::patch('/edit/{id}', [App\Http\Controllers\ChatController::class, 'edit_confirm']); //確認
Route::post('/edit/{id}', [App\Http\Controllers\ChatController::class, 'edit_finish']); //完了