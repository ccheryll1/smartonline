<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

// Route untuk preview dummy
Route::get('/preview', function () {
    return view('pages.preview'); // Sesuaikan dengan folder "pages"
});

// Halaman statis dari folder "pages"
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/harga', function () {
    return view('pages.harga');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/solusi', function () {
    return view('pages.solusi');
});

Route::get('/footer', function () {
    return view('pages.footer');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

// CRUD Absensi dari folder "attendances"
Route::get('/attendances', [AttendanceController::class, 'index'])->name('attendances.index');
Route::get('/attendances/create', [AttendanceController::class, 'create'])->name('attendances.create');
Route::post('/attendances', [AttendanceController::class, 'store'])->name('attendances.store');
Route::get('/attendances/{attendance}/edit', [AttendanceController::class, 'edit'])->name('attendances.edit');
Route::put('/attendances/{attendance}', [AttendanceController::class, 'update'])->name('attendances.update');
Route::delete('/attendances/{attendance}', [AttendanceController::class, 'destroy'])->name('attendances.destroy');
