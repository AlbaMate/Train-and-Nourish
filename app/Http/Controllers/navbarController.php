<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('log in');
    }

    public function contact()
    {
        return view('register');
    }
}