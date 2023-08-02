<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Offer;
use App\Models\food_type;
use Cart;

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

    public function add_to_cart(Offer $offer)
    {

        $userId = Auth::user()->id;
        foreach($offer as $item)
        {
            Cart::session($userId)->add([
                'id'=>$item->id,
                'name'=>$item->offer_name,
                'price'=>$item->price,
                'quantity'=>1,
            ]);
        }

        $cart = Cart::session($userId)->getContent();
        return dd($cart);
    }
}
