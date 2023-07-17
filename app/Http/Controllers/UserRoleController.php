<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeuser_roleRequest;
use App\Http\Requests\Updateuser_roleRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::paginate(5);
        return view('Roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Permission::select('group')->distinct()->get();
        // $permissions =Permission::groupBy('group')->get();

        return view('roles.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeuser_roleRequest $request)
    {

        $request->validate([
            'name' => "required|unique:roles,name,".$request->id,
        ]);
        $role = Role::UpdateOrCreate(
            ["id"=>$request->id],
            ['name' => $request->name]
    );
        $role->syncPermissions($request->permissions);
        toastr()->success("تمت العملية بنجاح");
        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(user_role $user_role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Updateuser_roleRequest $request ,Role $role)
    {
        $groups = Permission::select('group')->distinct()->get();

        return view('roles.create', compact('groups', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateuser_roleRequest $request, user_role $user_role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user_role $user_role)
    {
        $user_role->delete();
        toastr()->success("تمت العملية بنجاح");
        return redirect()->route('roles.index');
    }
}
