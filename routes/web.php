<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['name'=>request('name','Guest'),
    
    'tasks'=>[
        'Go to the store',
        'Go to the market',
        'Go to the gym'
    ]
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});