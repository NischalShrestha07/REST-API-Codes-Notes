<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'addGender']);
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hello', function () {
//     return view('hello');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::post('addUser', [UserController::class, 'addUser']);
// Route::view('user-form', 'user-form');



// Route::post('addGender', [UserController::class, 'addGender']);
// Route::view('user2', 'user2');



// Route::get('/home', function () {
//     return view('manage.home');
// });
