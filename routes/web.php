<?php

use App\Models\post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rootbash']);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/cart', function () {
    return view('cart');
});

// Route::get('/product', function () {
//     return view('product'); 
// });

Route::get('/product', [ProdukController::class, 'index']);

Route::get('/posts', function () {
    return view('post', ['title' => 'Blog', 'posts' => post::all()]);
});

