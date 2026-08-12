<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['name'=>request('name','Guest')]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});