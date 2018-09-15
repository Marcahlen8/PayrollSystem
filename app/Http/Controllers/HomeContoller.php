<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    public function __construct()

    {


    }
    public function myHome()

    {

        return view('Home');

    }
}
