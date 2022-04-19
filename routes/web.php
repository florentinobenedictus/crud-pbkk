<?php

use App\Http\Controllers\SiswaController;
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

//home
Route::get('/', [SiswaController::class, 'index'])->name('home');

//buat
Route::get('/buat', [SiswaController::class, 'create'])->name('siswa.tambah-data');
Route::post('/buat-data', [SiswaController::class, 'store'])->name('siswa.buat-data');

//edit
Route::get('/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');

//detail
Route::get('/detail/{id}', [SiswaController::class, 'show'])->name('siswa.show');

//delete
Route::delete('/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
