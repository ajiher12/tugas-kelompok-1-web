<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/page-update', [App\Http\Controllers\VideoController::class, 'index']);
Route::get('/getdetail/{id}', [App\Http\Controllers\VideoController::class, 'edit']);
Route::get('/get-detail', [App\Http\Controllers\VideoController::class, 'fetch']);
Route::post('/insert_video',[App\Http\Controllers\VideoController::class,'insert'])->name('insert.file');
Route::post('/update_video/{id}',[App\Http\Controllers\VideoController::class,'update'])->name('update.file');
Route::get('/destroy/{id}',[App\Http\Controllers\VideoController::class,'delete'])->name('delete.file');