<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks', [MemoController::class, 'task_index']);
Route::post('/task/create', [MemoController::class, 'task_store']);
Route::get('/task/{id}', [MemoController::class, 'task_show']);
Route::put('/task/{id}', [MemoController::class, 'task_update']);
Route::delete('/task/{id}', [MemoController::class, 'task_delete']);


