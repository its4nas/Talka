<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;

class RestaurantController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:access-restaurants', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-restaurants', ['only' => ['create', 'store']]);
        $this->middleware('permission:update-restaurants', ['only' => ['edit', 'store']]);
        $this->middleware('permission:delete-restaurants', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::paginate(3);

        return view('Restaurants.restaurants',compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Restaurants.add_restaurant');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        $bath=$request->file('restaurant_photo')->store('restaurants');
        // return dd($request->all());
        Restaurant::create([
            'restaurant_name'=>$request->restaurant_name,
            'restaurant_photo'=>$bath,
            'location'=>$request->location,
            'description'=>$request->description,
        ]);

        toastr()->success('تم إضافة المطعم بنجاح');
        return redirect('/restaurants');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return view('Restaurants.show_restaurant',compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        return view('Restaurants.edit_restaurant',compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $bath = $restaurant->restaurant_photo;
        if($request->hasFile('restaurant_photo'))
        {
            $bath=$request->file('restaurant_photo')->store('restaurants');
            // storage::delete($restaurant->restaurant_photo);
        }
        $restaurant->Update([
            'restaurant_name'=>$request->restaurant_name,
            'restaurant_photo'=>$bath,
            'location'=>$request->location,
            'description'=>$request->description
        ]);

        toastr()->success('تم تعديل البيانات بنجاح');
        return redirect('/restaurants');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->deleted_by=auth()->id();
        $restaurant->save();
        $restaurant->delete();

        toastr()->success('تم حذف الحقل بنجاح');
        return redirect('/restaurants');
    }
}
