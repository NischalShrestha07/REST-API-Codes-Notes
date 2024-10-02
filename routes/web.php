<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/aboutus', function () {
//     return view('manage.about');
// });

// Route::get('/home', function () {
//     return view('manage.home');
// });
Route::post('addUser', [UserController::class, 'addUser']);
Route::view('user-form', 'user-form');

// Route::post('addGender', [UserController::class, 'addGender']);
// Route::view('user2', 'user2');



// Route::view('manage.about', 'aboutus');
// Route::view('manage.home', 'manage'); same huda ni chalena



//ERROR PROBLEMS
// Route::get('/home', function () {
//     return view('manage.home');
// });


///this will give you the __use_state() error closure error

// Route::view('/home', function () {
//     return view('manage.home');
// });






Route::prefix('student')->group(function () {
    Route::get('/show', [UserController::class, 'index']);
});
