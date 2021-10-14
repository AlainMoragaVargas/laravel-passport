<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/


Route::prefix('/user')->group(function() {

    Route::POST('/login', [ App\Http\Controllers\LoginController::class, 'login' ]);
    Route::middleware('auth:api')->get('/all', [ App\Http\Controllers\UserController::class, 'all' ]);

});
