<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\food_type;

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

    public function food_offer()
    {
        $offers = Offer::all();
        $food_type = food_type::all();
        return view('Home.offers',compact('offers','food_type'));
    }
}
