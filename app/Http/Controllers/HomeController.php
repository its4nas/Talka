<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreOfferInCartRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Offer;
use App\Models\Order;
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

        $saleCondition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'SALE 5%',
            'type' => 'tax',
            'value' => '-5%',
        ));

        // foreach($offer as $item)
        // {
            Cart::session($userId)->add([
                'id'=>$offer->id,
                'name'=>$offer->offer_name,
                'price'=>$offer->price,
                'restaurant_name' => $offer->restaurant->restaurnt_name,
                'offer_photo' => $offer->offer_photo,
                'quantity'=>1,
                'attributes' => array(
                    'restaurant_name' => $offer->restaurant->restaurant_name,
                    'offer_photo' => $offer->offer_photo,
                    'food_type' => $offer->food_type->food_type_name,
                    'location'=>$offer->restaurant->location,
                    'description'=>$offer->restaurant->description,


                ),
                'conditions' => $saleCondition,
            ]);
        // }

        toastr()->success('تم إضافة العرض بنجاح اذهب الى السلة لتأكيد الطلب');
        return redirect('/food_offers');

    }

    public function view_cart()
    {
        $userId = Auth::user()->id;
        $cart = Cart::session($userId)->getContent();
        $losing = 0.15*Cart::session($userId)->getTotal();
        $total = Cart::session($userId)->getTotal()+$losing;
        // return dd($cart);
        return view('Home.cart',compact('cart','total'));
    }

    public function decrease($id)
    {
        $userId = Auth::user()->id;
        Cart::session($userId)->update($id, array(
            'quantity' => -1,
          ));
          return redirect('/view_cart');
    }

    public function increase($id)
    {
        $userId = Auth::user()->id;
        Cart::session($userId)->update($id, array(
            'quantity' => +1,
          ));
          return redirect('/view_cart');
    }

    public function delete_item_from_cart($id)
    {
        $userId = Auth::user()->id;
        Cart::session($userId)->remove($id);

        toastr()->success('تم إزالة العرض بنجاح من السلة');
        return redirect('/view_cart');
    }

    public function add_order(StoreOrderRequest $request,$id)
    {
        return dd();
        Order::create([
            $userId=1,
            "location"=>$id,

        ]);


    }
}
