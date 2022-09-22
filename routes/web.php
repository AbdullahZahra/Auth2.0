<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [UsersController::class, 'create']);
Route::post('/register', [UsersController::class, 'store']);
