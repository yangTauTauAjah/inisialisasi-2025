<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileManagerController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MabaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SubTaskController;
use App\Http\Controllers\TaskGroupController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/index', function () {
    return view('pages.index');
});

// admin aja yang bisa akses
Route::middleware(AdminMiddleware::class)->prefix("admin")->group(function () {
    // dashboard
    Route::get('/dashboard', [AdminController::class, 'index']);

    // Tugas Controller
    Route::get('/task-manager', [SubTaskController::class, 'list_tugas']);
    Route::resource('task', SubTaskController::class);
    Route::resource('task-group', TaskGroupController::class);
    Route::resource('berita-dan-pengumuman', NewsController::class);
});

// maba aja yang bisa akses
Route::middleware(AuthMiddleware::class)->group(function () {
    // User Controller
    Route::get('/tugas', [UserController::class, 'index']);
    Route::get('/tugas/{group}', [UserController::class, 'show'])->name('task_group.detail');
    Route::get('/tugas-detail/{id}', [UserController::class, 'task_detail'])->name('task.detail');

    // Upload file
    Route::post('/upload-file/{id}', [FileUploadController::class, 'fileUpload'])->name('file.upload');
    Route::post('/upload-links/{id}', [FileUploadController::class, 'store'])->name('upload.link');
});

// login
Route::get('/login', [LoginController::class, 'index']);
Route::get('/login-maba', [LoginController::class, 'Mabaindex']);
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/set-password', [MabaController::class, 'setPassword'])->name('setPassword');


