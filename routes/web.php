<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\yuancontroller;
use App\Http\Controllers\pokecontroller;
use App\Http\Controllers\gurucontroller;

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

Route::get('/',[yuancontroller::class,'index']);
Route::get('/home/about/{id}',[yuancontroller::class,'tentang']);
Route::get('/datasiswa',[pokecontroller::class,'poke'])->name('poke');
Route::get('/detail/{id}',[pokecontroller::class,'detail']);
Route::get('/add',[pokecontroller::class,'add']);
Route::post('/insert',[pokecontroller::class,'insert']);
Route::get('/edit/{id}',[pokecontroller::class,'edit']);
Route::post('/update/{id}',[pokecontroller::class,'update']);
Route::get('/delete/{id}',[pokecontroller::class,'delete']);

Route::get('/dataguru',[gurucontroller::class,'index']);
