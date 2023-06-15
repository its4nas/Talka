<?php

namespace App\Http\Controllers;

use App\Models\food_type;
use App\Http\Requests\Storefood_typeRequest;
use App\Http\Requests\Updatefood_typeRequest;

class FoodTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storefood_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(food_type $food_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(food_type $food_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatefood_typeRequest $request, food_type $food_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(food_type $food_type)
    {
        //
    }
}
