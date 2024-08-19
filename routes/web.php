<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level',[LevelController::class, 'index']);
Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/barang',[BarangController::class,'index']);
Route::get('/stok',[StokController::class,'index']);
Route::get('/penjualan',[PenjualanController::class,'index']);

Route::group(['prefix' => 'user'], function(){
    Route::get('/',[UserController::class,  'index']);
    Route::get('/create',[UserController::class,  'create']);
    Route::post('/list',  [UserController::class, 'list']);
    Route::post('/',   [UserController::class, 'store']);
    Route::get('/{id}',[UserController::class, 'show']);
    Route::get('/{id}/edit',[UserController::class, 'edit']);
    Route::put('/{id}',[UserController::class, 'update']);
    Route::delete('/{id}',[UserController::class, 'destroy']);
});

Route::get('/', [WelcomeController::class,'index']);