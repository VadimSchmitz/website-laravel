<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function dePersoonlijkeIntroductiepagina()
    {
        return view("de-persoonlijke-introductiepagina");
    }

    public function motivatie()
    {
        return view('motivatie');
    }

    public function persoonlijkDashboard()
    {
        return view('persoonlijk-dashboard');
    }

    public function beroepsbeeld()
    {
        return view('beroepsbeeld');
    }

    public function grades()
    {
        return view('grades');
    }
}
