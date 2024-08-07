<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\SubTaskController;
use App\Http\Controllers\TaskGroupController;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/penugasan', function () {
    return view('pages.penugasan.penugasan');
});

Route::get('/task', function () {
    return view('pages.penugasan.task');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/penugasan/d1t1', function () {
    return view('pages.penugasan.day1.tugas1');
});


// Tugas Controller
Route::resource('task-group', TaskGroupController::class);
Route::resource('task', SubTaskController::class);
Route::get('/task-manager', [SubTaskController::class, 'list_tugas']);



Route::post('/upload', [FileUploadController::class, 'store'])->name('file.upload');
