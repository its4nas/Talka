<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Message.messages');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('Home.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        // $this->validate($request, [ 'name' => 'required', 'email'=> 'required', 'message'=> 'required' ]);
        return dd($request->all());
        Message::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message
            ]
            );

            return redirect('/offers');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
