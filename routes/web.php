<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;
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


Route::prefix('spp')->group(function () {
    Route::get('/',[SppController::class,'index']);
    Route::post('/',[SppController::class,'store']);
    Route::get('edit/{id}',[SppController::class,'show']);
    Route::post('edit/{id}',[SppController::class,'update']);
    Route::get('delete/{id}',[SppController::class,'delete']);
});
Route::prefix('kelas')->group(function () {
    Route::get('/',[KelasController::class,'index']);
    Route::post('/',[KelasController::class,'store']);
    Route::get('edit/{id}',[KelasController::class,'show']);
    Route::post('edit/{id}',[KelasController::class,'update']);
    Route::get('delete/{id}',[KelasController::class,'delete']);
});

Route::prefix('siswa')->group(function () {
    Route::get('/',[SiswaController::class,'index']);
    Route::get('create',[SiswaController::class,'create']);
    Route::post('create',[SiswaController::class,'store']);
    Route::get('edit/{id}',[SiswaController::class,'show']);
    Route::post('edit/{id}',[SiswaController::class,'update']);
    Route::get('delete/{id}',[SiswaController::class,'delete']);
});

Route::prefix('petugas')->group(function () {
    Route::get('/',[PetugasController::class,'index']);
    Route::get('create',[PetugasController::class,'create']);
    Route::post('create',[PetugasController::class,'store']);
    Route::get('edit/{id}',[PetugasController::class,'show']);
    Route::post('edit/{id}',[PetugasController::class,'update']);
    Route::get('delete/{id}',[PetugasController::class,'delete']);
});
Route::get('login',[AutentikasiController::class,'login'])->name('login');
Route::post('admin/login',[AutentikasiController::class,'adminLogin']);
Route::post('siswa/login',[AutentikasiController::class,'siswaLogin']);