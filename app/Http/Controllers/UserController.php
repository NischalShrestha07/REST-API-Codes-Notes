<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
        // return $request;
        echo $request->hello;
        echo '<br>';
        echo $request->email;
        echo '<br>';
        echo $request->cityname;
        echo '<br>';
        // return $request; returns all the details filled inside the form in user-form file.

        // echo "Add User Function Called.";

    }
    public function addGender(Request $request)
    {
        echo $request;
    }
}
