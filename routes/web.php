<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/user',[User::class,'index']);