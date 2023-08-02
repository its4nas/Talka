<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreOfferInCartRequest;
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

    public function add_to_cart(StoreOfferInCartRequest $request,Offer $offer)
    {

        // return dd($offer);

        $userId = Auth::user()->id;
        // foreach($offer as $item)
        // {
            Cart::session($userId)->add([
                'id'=>$offer->id,
                'name'=>$offer->offer_name,
                'price'=>$offer->price,
                'quantity'=>1,
            ]);
        // }

        toastr()->success('تم إضافة العرض بنجاح');
        return redirect('/food_offers');

    }

    public function view_cart()
    {
        $userId = Auth::user()->id;
        $cart = Cart::session($userId)->getContent();
        return dd($cart);
    }
}
