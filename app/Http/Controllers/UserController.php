<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    public function index()
    {
        return view('manage.home');
    }
    public function add()
    {
        return view('manage.about');
    }
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

    //NOTE TO BE REMEMBERED

    // public function addGender(Request $request)
    // {
    //     // echo $request;
    //     //all big randon details are returned here in this function

    //     echo $request->city;
    //     echo '<br>';
    //     echo $request->gender;
    //     echo '<br>';
    //     echo $request->skill;
    //     echo '<br>';

    //     //as below subjects[] is an array so we cant convert/access array as string
    //     print_r($request->subjects); // returns all the arrays details of subjects.
    // }

    public function addGender(Request $request)
    {
        $request->validate([
            'subjects' => 'nullable',
            'gender' => 'required',
            'city' => 'required',
            'skill' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'cityname' => 'required|uppercase',
        ]);
        // echo $request;
        echo $request->username;
        echo '<br>';
        echo $request->email;
        echo '<br>';
        echo $request->cityname;
        echo '<br>';
        // echo $request->skill;
        print_r($request->skill);

        echo '<br>';
        print_r($request->subjects);
        echo '<br>';
    }
}
