<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/ideas', [IdeaController::class, 'index']);

Route::get('/ideas/create', [IdeaController::class, 'create']);

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/ideas', [IdeaController::class, 'store']);

Route::get('/ideas/{idea}', [IdeaController::class, 'show']);

Route::get('/ideas/edit/{idea}', [IdeaController::class, 'edit']);

Route::put('/ideas/{idea}', [IdeaController::class, 'update']);

Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);

Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [RegistrationController::class, 'logout']);