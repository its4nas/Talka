<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UpdateProfileRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(3);
        return view('User.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $roles = Role::all();
        // return view('User.add_user',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        return view('User.show_user',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('User.edit_user',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, User $user)
    {
        $user->Update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);

        $user->syncRoles($request->role);

        toastr()->success('تم تعديل البيانات بنجاح');
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->deleted_by=auth()->id();
        $user->save();
        $user->delete();

        toastr()->success('تم حذف الحقل بنجاح');
        return redirect('/users');
    }

    public function trash()
    {
        $users = User::onlyTrashed()->paginate(3);
        return view('Trash.deleted_users',compact('users'));
    }

    public function restore($id)
    {
        User::onlyTrashed()->where('id',$id)->restore();
        toastr()->success('تم استعادة الحقل بنجاح');
        return redirect('/users');

    }

    public function forceDelete($id)
    {
        User::onlyTrashed()->where('id',$id)->forceDelete();
        toastr()->success('تم حذف الحقل بنجاح');
        return redirect('/user/trash');

    }
}
