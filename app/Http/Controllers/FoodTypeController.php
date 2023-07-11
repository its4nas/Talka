<?php

namespace App\Http\Controllers;

use App\Models\food_type;
use App\Http\Requests\Storefood_typeRequest;
use App\Http\Requests\Updatefood_typeRequest;

class FoodTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:access-food_types', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-food_types', ['only' => ['create', 'store']]);
        $this->middleware('permission:update-food_types', ['only' => ['edit', 'store']]);
        $this->middleware('permission:delete-food_types', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $food_types = food_type::all();
        return view('food_type.index',compact('food_types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('food_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storefood_typeRequest $request)
    {
        $bath=$request->file('food_type_photo')->store('food_types');
        // return dd($request->all());
        food_type::create([
            'food_type_name'=>$request->food_type_name,
            'food_type_photo'=>$bath,
        ]);

        toastr()->success('تم إضافة الصنف بنجاح');
        return redirect('/food_types');
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
        return view('food_type.edit',compact('food_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatefood_typeRequest $request, food_type $food_type)
    {
        $bath = $food_type->food_type_photo;
        if($request->hasFile('food_type_photo'))
        {
            $bath=$request->file('food_type_photo')->store('food_type');
            // storage::delete($restaurant->restaurant_photo);
        }
        $food_type->update([
            'food_type_name'=>$request->food_type_name,
            'food_type_photo'=>$bath,
        ]);

        toastr()->success('تم تعديل البيانات بنجاح');
        return redirect('/food_types');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(food_type $food_type)
    {
        $food_type->deleted_by=auth()->id();
        $food_type->save();
        $food_type->delete();

        toastr()->success('تم حذف الحقل بنجاح');
        return redirect('/food_types');
    }

    public function trash()
    {
        $food_types = Food_type::onlyTrashed()->paginate(3);
        return view('Trash.deleted_food_types',compact('food_types'));
    }

    public function restore($id)
    {
        Food_type::onlyTrashed()->where('id',$id)->restore();
        toastr()->success('تم استعادة الحقل بنجاح');
        return redirect('/food_types');

    }

    public function forceDelete($id)
    {
        Food_type::onlyTrashed()->where('id',$id)->forceDelete();
        toastr()->success('تم حذف الحقل بنجاح');
        return redirect('/food_type/trash');

    }
}
