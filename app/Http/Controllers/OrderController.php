<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\User;
use Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:access-orders', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-orders', ['only' => ['create', 'store']]);
        $this->middleware('permission:update-orders', ['only' => ['edit', 'store']]);
        $this->middleware('permission:delete-orders', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Order.orders');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('Order.add_order');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        Order::create([
            "user_id"=>Auth::user()->id,
            "location"=>Cart::session($userId)->getContent(),

        ]);

        return dd();
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
