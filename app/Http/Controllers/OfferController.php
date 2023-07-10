<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Restaurant;
use App\Models\food_type;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;

class OfferController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:access-offers', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-offers', ['only' => ['create', 'store']]);
        $this->middleware('permission:update-offers', ['only' => ['edit', 'store']]);
        $this->middleware('permission:delete-offers', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::paginate(3);
        return view('Offer.offers',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurants = Restaurant::all();
        $food_types = food_type::all();
        return view('offer.add_offer')
        ->with('restaurants',$restaurants)
        ->with('food_types',$food_types);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOfferRequest $request)
    {
        $bath=$request->file('offer_photo')->store('offers');
        Offer::create([
            'offer_name'=>$request->offer_name,
            'offer_photo'=>$bath,
            'restaurant_id'=>$request->restaurant,
            'type_id'=>$request->food_type,
            'price'=>$request->price
        ]);

        toastr()->success('تم إضافة العرض بنجاح');
        return redirect('/offers');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        return view('Offer.show_offer',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {

        $restaurants = Restaurant::all();
        $food_types = food_type::all();
        return view('Offer.edit_offer',compact('offer','food_types','restaurants'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        $bath = $offer->offer_photo;
        if($request->hasFile('offer_photo'))
        {
            $bath=$request->file('offer_photo')->store('offers');
            // storage::delete($offer->offer_photo);
        }
        $offer->Update([
            'offer_name'=>$request->offer_name,
            'offer_photo'=>$bath,
            'restaurant_id'=>$request->restaurant,
            'type_id'=>$request->food_type,
            'price'=>$request->price
        ]);
        toastr()->success('تم تعديل البيانات بنجاح');
        return redirect('/offers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();

        toastr()->success('تم حذف الحقل بنجاح');
        return redirect('/offers');
    }
}
