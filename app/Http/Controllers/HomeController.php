<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function introductie()
    {
        return view("introductie");
    }

    public function motivatie()
    {
        return view('motivatie');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function beroepsbeeld()
    {
        return view('beroepsbeeld');
    }

    public function blog()
    {
        return view('blog');
    }

}
