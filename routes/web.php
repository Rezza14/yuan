<?php

use App\Http\Controllers\PokeController;
use App\Http\Controllers\YuanController;
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

Route::get('/', [YuanController::class, 'index']);
Route::get('/home/about/{id}', [YuanController::class, 'tentang']);
Route::get('/datasiswa', [PokeController::class, 'poke'])->name('poke');
Route::get('/detail/{id}', [PokeController::class, 'detail']);
Route::get('/add', [PokeController::class, 'add']);
Route::post('/insert', [PokeController::class, 'insert']);
Route::get('/edit/{id}', [PokeController::class, 'edit']);
Route::post('/update/{id}', [PokeController::class, 'update']);
Route::get('/delete/{id}', [PokeController::class, 'delete']);
