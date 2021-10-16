<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\penjualController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin-produk', [App\Http\Controllers\customerController::class, 'produk'])->name('admin-produk');

Route::get('/artikel/',  [App\Http\Controllers\ArtikelController::class,'allArtikel'])->name('artikel');
Route::get('/detailArtikel',  [App\Http\Controllers\ArtikelController::class,'detailArtikel'])->name('detailArtikel');
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');



Auth::routes();
Route::prefix('admin')->group(function(){
    Route::get('/produk',[penjualController::class,'produkIndex'])->name('produkIndex');
    Route::get('/produk/add',[penjualController::class,'produkAdd'])->name('produkAdd');
    Route::post('/produk/store',[penjualController::class,'storeProduk'])->name('storeProduk');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
