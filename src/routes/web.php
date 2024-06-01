<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModalController;

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

//お客様画面
Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'show']);
Route::get('/confirm', [ContactController::class, 'check']);
Route::post('/confirm', [ContactController::class, 'store']);
Route::get('/thanks', [ContactController::class, 'complete']);
Route::post('/thanks', [ContactController::class, 'return']);

//ログイン画面
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'check']);

//管理者画面
Route::get('/admin', [AuthController::class, 'index']);
Route::get('/admin/search', [AuthController::class, 'search']);


//モーダル
Route::get('/modal', [ModalController::class, 'modal']);