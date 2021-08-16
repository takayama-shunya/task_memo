<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;
use Illuminate\Support\Facades\Auth;

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



Route::middleware(['auth'])->group(function () {
    Route::resource('memos', MemoController::class);
    //vue表示用
    Route::get('/tasks', [MemoController::class, 'task_index']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 登録外URLでアクセスしてもこのapp.blade.phpが表示させる
Route::get('/{any}', function() {
    return view('index');
    })->where('any', '.*');
