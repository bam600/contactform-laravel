<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;

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

//新規登録画面
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'create'])->name('register');



//入力画面用
Route::get('/', [ContactController::class, 'contact']);

// 確認画面用
Route::post('/confirm', [ContactController::class, 'confirm']);

//完了ページの送信ボタン処理
// Route::post('/contacts', [ContactController::class, 'store']);

// 送信ボタン押下処理
Route::post('/thanks', [ContactController::class, 'store']);

// ログイン画面表示
Route::get('/login', [LoginController::class, 'find'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

