<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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

Route::get('/databarang', [BarangController::class, 'index'])->name('databarang');

Route::get('/tambahbarang', [BarangController::class, 'tambahbarang'])->name('tambahbarang');
Route::post('/insertbarang', [BarangController::class, 'insertbarang'])->name('insertbarang');  

Route::get('/tampilbarang/{id}', [BarangController::class, 'tampilbarang'])->name('tampilbarang');
Route::post('/updatebarang/{id}', [BarangController::class, 'updatebarang'])->name('updatebarang');  

Route::get('/delete/{id}', [BarangController::class, 'delete'])->name('delete'); 


Route::get('/datakasir', [BarangController::class, 'indexkasir'])->name('datakasir');