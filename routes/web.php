<?php

use App\Livewire\CreatePost;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Guest.index');
});
Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});
Route::get('/admin-penugasan', function () {
    return view('Admin.penugasan');
});
Route::get('/create-post', function () {
    return view('Admin.contentList');
});


// Route::get('/create-post', CreatePost::class);