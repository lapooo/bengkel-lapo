<?php

use App\Http\Controllers\JnsKendaraanController;
use App\Http\Controllers\jnsservicecontroller;
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