<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('login/{email}/{upwd}', [LoginController::class, 'login'])->name('login');
// // Route::post('/login', [ApiController::class, 'login']);
// Route::get('sign_up/{uname}/{nickname}/{upwd}/{uphone}/{email}/{gender}', [SignUpController::class, 'sign_up']);
// // Route::post('/sign_up', [ApiController::class, 'sign_up']);
// Route::get('order', [OrderController::class])->name('order.index')->middleware('auth');
