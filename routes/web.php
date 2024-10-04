<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
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
    Route::get('showData', 'show');
    // Route::get('deletedata', 'delete')->middleware('check1');
    route::get('deleteData', 'delete');
    Route::get('addData', 'add');
    // Route::get('name/{name}', 'add ');
});

// Route::get('/about/{name}', [HomeController::class, 'add'])


/**
 * gohome -> /path
 * home -> name of view
 */
//when multiple middleware need to be passed in single route
Route::view('goHome', 'home')->middleware('check1');

//GROUP MIDDLEWARE
//when multiple middleware need to be passed in multiple route
Route::middleware('check1')->group(function () {
    Route::view('letsGo', 'welcome');
    Route::view('goManage', 'manage.home');
    Route::view('aboutPage', 'about');
});

//Route Middleware use
//1.Single Middleware
// Route::view('hihome', 'home')->middleware(AgeCheck::class);

//2. Multiple Middlewares can be
Route::view('hiHome', 'home')->middleware(AgeCheck::class, CountryCheck::class);
Route::view('aboutHome', 'about');




Route::get('/users', [ManageController::class, 'users']);
