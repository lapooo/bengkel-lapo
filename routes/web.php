<?php

use App\Http\Controllers\detailservicecontroller;
use App\Http\Controllers\JnsKendaraanController;
use App\Http\Controllers\jnsservicecontroller;
use App\Http\Controllers\kendaraancontroller;
use App\Http\Controllers\mekanikcontroller;
use App\Http\Controllers\pemilikcontroller;
use App\Http\Controllers\serviceController;
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
    return view('dasboard');
});

//Route jnskendaraan
Route::get('/jnskendaraan', [JnsKendaraanController::class, 'index'])->name('jnsKendaraan.index');
Route::get('/jnskendaraan/add', [JnsKendaraanController::class, 'create'])->name('jnsKendaraan.create');
Route::post('/jnskendaraan/add', [JnsKendaraanController::class, 'store'])->name('jnsKendaraan.store');
Route::get('/jnskendaraan/edit/{id}', [JnsKendaraanController::class, 'edit'])->name('jnsKendaraan.edit');
Route::post('/jnskendaraan/edit/{id}', [JnsKendaraanController::class, 'update'])->name('jnsKendaraan.update');
Route::get('/jnskendaraan/delete/{id}', [JnsKendaraanController::class, 'destroy'])->name('jnsKendaraan.delete');

Route::get('/service', [serviceController::class, 'index'])->name('service.index');
Route::get('/service/add', [serviceController::class, 'create'])->name('service.create');
Route::post('/service/add', [serviceController::class, 'store'])->name('service.store');
Route::get('/service/edit/{id}', [serviceController::class, 'edit'])->name('service.edit');
Route::post('/service/edit/{id}', [serviceController::class, 'update'])->name('service.update');
Route::get('/service/delete/{id}', [serviceController::class, 'destroy'])->name('service.delete');

Route::get('/jnsservice', [jnsserviceController::class, 'index'])->name('jnsservice.index');
Route::get('/jnsservice/add', [jnsserviceController::class, 'create'])->name('jnsservice.create');
Route::post('/jnsservice/add', [jnsserviceController::class, 'store'])->name('jnsservice.store');
Route::get('/jnsservice/edit/{id}', [jnsserviceController::class, 'edit'])->name('jnsservice.edit');
Route::post('/jnsservice/edit/{id}', [jnsserviceController::class, 'update'])->name('jnsservice.update');
Route::get('/jnsservice/delete/{id}', [jnsservicecontroller::class, 'destroy'])->name('jnsservice.delete');

Route::get('/detailservice', [detailservicecontroller::class, 'index'])->name('detailservice.index');
Route::get('/detailservice/add', [detailserviceController::class, 'create'])->name('detailservice.create');
Route::post('/detailservice/add', [detailserviceController::class, 'store'])->name('detailservice.store');
Route::get('/detailservice/edit/{id}', [detailserviceController::class, 'edit'])->name('detailservice.edit');
Route::post('/detailservice/edit/{id}', [detailserviceController::class, 'update'])->name('detailservice.update');
Route::get('/detailservice/delete/{id}', [detailservicecontroller::class, 'destroy'])->name('detailservice.delete');

Route::get('/mekanik', [mekanikcontroller::class, 'index'])->name('mekanik.index');
Route::get('/mekanik/add', [mekanikController::class, 'create'])->name('mekanik.create');
Route::post('/mekanik/add', [mekanikController::class, 'store'])->name('mekanik.store');
Route::get('/mekanik/edit/{id}', [mekanikController::class, 'edit'])->name('mekanik.edit');
Route::post('/mekanik/edit/{id}', [mekanikController::class, 'update'])->name('mekanik.update');
Route::get('/mekanik/delete/{id}', [mekanikcontroller::class, 'destroy'])->name('mekanik.delete');

Route::get('/kendaraan', [kendaraancontroller::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/add', [kendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan/add', [kendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/edit/{id}', [kendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::post('/kendaraan/edit/{id}', [kendaraanController::class, 'update'])->name('kendaraan.update');
Route::get('/kendaraan/delete/{id}', [kendaraancontroller::class, 'destroy'])->name('kendaraan.delete');

Route::get('/pemilik', [pemilikcontroller::class, 'index'])->name('pemilik.index');
Route::get('/pemilik/add', [pemilikController::class, 'create'])->name('pemilik.create');
Route::post('/pemilik/add', [pemilikController::class, 'store'])->name('pemilik.store');
Route::get('/pemilik/edit/{id}', [pemilikController::class, 'edit'])->name('pemilik.edit');
Route::post('/pemilik/edit/{id}', [pemilikController::class, 'update'])->name('pemilik.update');
Route::get('/pemilik/delete/{id}', [pemilikcontroller::class, 'destroy'])->name('pemilik.delete');