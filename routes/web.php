<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/penugasan', function () {
    return view('pages.penugasan.penugasan');
});

Route::get('/penugasan/d1t1', function () {
    return view('pages.penugasan.day1.tugas1');
});

Route::post('/upload', [FileUploadController::class, 'store'])->name('file.upload');
