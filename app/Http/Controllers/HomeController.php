<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.index');
    }

    public function profile($id)
    {
        return view('Home.profile');
    }
}
