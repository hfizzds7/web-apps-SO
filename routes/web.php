<?php

use App\Models\post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rootbash']);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/posts', function () {
    return view('post', ['title' => 'Blog', 'posts' => post::all()]);
});