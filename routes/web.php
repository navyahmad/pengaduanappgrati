<?php

use App\Models\Bayar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RegisterController;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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

Route::get('/beranda', function () {
    return view('beranda',[
        "image" => "logopln.jpg",
        "active" => "beranda"
    ]);
})->middleware('auth');

// Route::get('/data',  function(){
//     return view('data.data',[
//         "image" => "logopln.jpg",
//         "active" => "data"
//     ]);
// });




Route::get('lapor/lapor1/{pid}', [LaporanController::class,'lapor1']);

Route::get('data/export/excel', [DataController::class, 'export_excel']);

Route::get('/search',[DataController::class, 'search']);


Route::resource('/data', DataController::class)->middleware('auth');
Route::delete('/data', [DataController::class, 'deleteAll'])->name('data.deleteAll');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

