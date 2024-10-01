<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/about', function () {
    return view('about');
});

// Route::post('/user', function () {
//     return response()->json('Post API hit successfully.');
// });
// Route::delete('/user/{id}', function ($id) {
//     return response($id, 200);
// });
