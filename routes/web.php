<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

//ini dummy cuma buat preview
Route::get('/preview', function () {
    return view('preview');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/harga', function () {
    return view('harga');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/solusi', function () {
    return view('solusi');
});

Route::get('/footer', function () {
    return view('footer');
});


//crud absensi
Route::get('/', [AttendanceController::class, 'index'])->name('attendances.index');
Route::get('/attendances/create', [AttendanceController::class, 'create'])->name('attendances.create');
Route::post('/attendances', [AttendanceController::class, 'store'])->name('attendances.store');
Route::get('/attendances/{attendance}/edit', [AttendanceController::class, 'edit'])->name('attendances.edit');
Route::put('/attendances/{attendance}', [AttendanceController::class, 'update'])->name('attendances.update');
Route::delete('/attendances/{attendance}', [AttendanceController::class, 'destroy'])->name('attendances.destroy');
