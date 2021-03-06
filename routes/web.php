<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::group(['prefix'=>'/'], function(){
    Route::get('', [TodoController::Class,'index']);
    Route::post('todo/create', [TodoController::Class,'create']);
    Route::post('todo/update', [TodoController::Class,'update']);
    Route::post('todo/delete', [TodoController::Class,'delete']);
});
