<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function createUser(){
        return view('users.create');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users=User::get();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::get();
        return view('users.create',compact('create'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users=User::get();
        return view('users.edit',compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newUser = new User();
        $newUser -> username = $request -> username;
        $newUser -> email = $request -> email;
        $newUser -> password = $request -> password;
        $newUser -> save();

        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
