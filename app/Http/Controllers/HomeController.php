<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function nepal()
    {
        return "Welcome to Nepal";
    }
    public function add($name)
    {
        // return "Student Added Successfull{name}.";
        // return view('manage.home');
        return $name;
    }
    public function delete()
    {
        return "Student Deleted Successfully.";
    }
    public function show()
    {
        return 'Data is being shown.';
    }
}
