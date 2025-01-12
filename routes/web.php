<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/kredential', function () {
    return view('kredential.index');
});


Route::get('/data', [App\Http\Controllers\MonitoringController::class, 'index'])->name('data.index');
Route::post('/data', [App\Http\Controllers\MonitoringController::class, 'store'])->name('data.store');
Route::get('/data/{id}', [App\Http\Controllers\MonitoringController::class, 'show_update'])->name('data.edit');
Route::post('/update/{id}', [App\Http\Controllers\MonitoringController::class, 'update'])->name('data.update');
Route::get('/data/delete/{id}', [App\Http\Controllers\MonitoringController::class, 'destroy'])->name('data.destroy');



Route::get('/progres/{id}', [App\Http\Controllers\MonitoringController::class, 'show'])->name('progres.index');
Route::post('/progres', [App\Http\Controllers\MonitoringController::class, 'store'])->name('progres.store');

Route::post('/update', [App\Http\Controllers\MonitoringController::class, 'updateProgress'])->name('progresuser.update');