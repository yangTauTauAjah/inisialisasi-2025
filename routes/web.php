<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileManagerController;
use App\Http\Middleware\MabaMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MabaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SubTaskController;
use App\Http\Controllers\TaskGroupController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;


// temp
Route::get('/penugasan/pra', function () {
    return view('pages.penugasan.pra.index
    ');
});

Route::get('/task', function () {
    return view('pages.penugasan.task');
});

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/index', function () {
    return view('pages.index');
});

// admin aja yang bisa akses
Route::middleware(AdminMiddleware::class)->group(function () {
    // dashboard
    Route::get('/dashboard', [AdminController::class, 'index']);

    // Tugas Controller
    Route::get('/task-manager', [SubTaskController::class, 'list_tugas']);
    Route::resource('task', SubTaskController::class);
    Route::resource('task-group', TaskGroupController::class);

});

// maba aja yang bisa akses
Route::middleware(MabaMiddleware::class)->group(function () {
    // User Controller
    Route::get('/penugasan/index', [UserController::class, 'index']);
    Route::get('/penugasan/{task_group_name}/{id}', [UserController::class, 'show'])->name('task_group.detail');
    Route::get('/penugasan/task_detail/{task_name}/{id}', [UserController::class, 'task_detail'])->name('task.detail');

    // Upload file
    Route::post('/upload-file/{id}', [FileUploadController::class, 'fileUpload'])->name('file.upload');
    Route::post('/upload-links/{id}', [FileUploadController::class, 'store'])->name('upload.link');
});


// admin & maba bisa akses
Route::group([], function () {

    // penugasan
    Route::get('/penugasan/index', [UserController::class, 'index']);
    Route::get('/penugasan/{task_group_name}/{id}', [UserController::class, 'show'])->name('task_group.detail');
    Route::get('/penugasan/task_detail/{task_name}/{id}', [UserController::class, 'task_detail'])->name('task.detail');

    // Upload file
    Route::post('/upload-file/{id}', [FileUploadController::class, 'fileUpload'])->name('file.upload');
    Route::post('/upload-links/{id}', [FileUploadController::class, 'store'])->name('upload.link');
});


// News Controller
Route::resource('/admin/berita-dan-pengumuman', NewsController::class);

// login
Route::get('/login', [LoginController::class, 'index']);
Route::get('/login-maba', [LoginController::class, 'Mabaindex']);
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/set-password', [MabaController::class, 'setPassword'])->name('setPassword');


