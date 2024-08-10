<?php

use App\Http\Controllers\FileManagerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SubTaskController;
use App\Http\Controllers\TaskGroupController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/index', function () {
    return view('pages.index');
});

// Penugasan
Route::get('/penugasan/index', function () {
    return view('pages.penugasan.penugasan');
});

// pra
Route::get('/penugasan/idcard', function () {
    return view('pages.penugasan.pra.idcard');
});
Route::get('/penugasan/angkatan', function () {
    return view('pages.penugasan.pra.angkatan');
});
Route::get('/penugasan/booklet', function () {
    return view('pages.penugasan.pra.booklet');
});
Route::get('/penugasan/dbangkatan', function () {
    return view('pages.penugasan.pra.dbangkatan');
});

//day1
Route::get('/penugasan/catatan1', function () {
    return view('pages.penugasan.day1.catatan');
});
Route::get('/penugasan/boundaries', function () {
    return view('pages.penugasan.day1.beyondboundaries');
});
Route::get('/penugasan/dbkating', function () {
    return view('pages.penugasan.day1.dbkating');
});

//day2
Route::get('/penugasan/catatan2', function () {
    return view('pages.penugasan.day2.catatan');
});
Route::get('/penugasan/expresscreativity', function () {
    return view('pages.penugasan.day2/expresscreativity');
});
Route::get('/penugasan/vlog', function () {
    return view('pages.penugasan.day2.vlog');
});

//day3
Route::get('/penugasan/catatan3', function () {
    return view('pages.penugasan.day3.catatan');
});
Route::get('/penugasan/essay', function () {
    return view('pages.penugasan.day3.essay');
});
Route::get('/penugasan/expresscreativity2', function () {
    return view('pages.penugasan.day3/expresscreativity2');
});

//day4
Route::get('/penugasan/catatan4', function () {
    return view('pages.penugasan.day4.catatan');
});
Route::get('/penugasan/dbkating2', function () {
    return view('pages.penugasan.day4/dbkating2');
});
Route::get('/penugasan/ethicalleader', function () {
    return view('pages.penugasan.day4/ethicalleader');
});

Route::get('/task', function () {
    return view('pages.penugasan.task');
});


Route::get('/penugasan/d1t1', function () {
    return view('pages.penugasan.day1.tugas1');
});


// ADMIN
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

// News Controller
Route::resource('/admin/berita-dan-pengumuman', NewsController::class);

// Tugas Controller
Route::get('/task-manager', [SubTaskController::class, 'list_tugas']);
Route::resource('task', SubTaskController::class);
Route::resource('task-group', TaskGroupController::class);



// login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/authenticate', [LoginController::class, 'login'])->name('login');

Route::post('/upload', [FileUploadController::class, 'store'])->name('file.upload');
