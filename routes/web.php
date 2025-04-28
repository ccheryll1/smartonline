<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;


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

