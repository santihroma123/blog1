<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckSession;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware(CheckSession::class);

Route::get('/login', function () {
    return view('login');
});

Route::post('/login/open', [UserController::class, 'loginUser']);

Route::post('/register/create', [UserController::class, 'createUser'])->middleware(CheckSession::class);

Route::get('/register', function () {
    return view('register');
});

Route::get('/post', function () {
    return view('createPost');
})->middleware(CheckSession::class);

Route::post('/post/create', [PostController::class, 'createPost'])->middleware(CheckSession::class);

Route::get('/logout', [UserController::class, 'cerrarSesion'])->middleware(CheckSession::class);