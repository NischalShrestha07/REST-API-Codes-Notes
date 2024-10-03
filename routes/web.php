<?php

use App\Http\Controllers\HomeController;
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
    Route::get('/add', [UserController::class, 'add']);
});
Route::prefix('country')->group(function () {
    Route::get('/nepal', [HomeController::class, 'nepal']);
});



// Route::get('/show', [HomeController::class, 'show']);
// Route::get('/add', [HomeController::class, 'add']);
// Route::get('/delete', [HomeController::class, 'delete']);


//  multiple times HomeController is being called so to make it more convinent we can do this:
Route::controller(HomeController::class)->group(function () {
    Route::get('showdata', 'show');
    Route::get('deletedata', 'delete');
    // Route::get('adddata', 'add');
    Route::get('name/{name}', 'add ');
});

// Route::get('/about/{name}', [HomeController::class, 'add']);
