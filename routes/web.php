<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    Route::get('/ideas', [IdeaController::class, 'index']);
    Route::get('/ideas/create', [IdeaController::class, 'create']);
    Route::post('/ideas', [IdeaController::class, 'store']);
    Route::get('/ideas/edit/{idea}', [IdeaController::class, 'edit']);
    Route::put('/ideas/{idea}', [IdeaController::class, 'update']);
    Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
    Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);
    Route::post('/logout', [RegistrationController::class, 'logout']);
});

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return 'admin area';
})->middleware('can:view-admin');


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    Route::get('/register', [RegistrationController::class, 'create']);
    Route::post('/register', [RegistrationController::class, 'store']);
});
