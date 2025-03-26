<?php

use App\Http\Controllers\PrestasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;
use App\Models\Prestasi;

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

Route::get('/index', function(){
    return view('index');
});
Route::get('/index', [PrestasiController::class, 'index']);
// Route::get('/index', [KegiatanController::class, 'kegiatan']);
// Route::get('/index', [PrestasiController::class, 'tambah']);
Route::post('/index', [PrestasiController::class, 'create'])->name('create');