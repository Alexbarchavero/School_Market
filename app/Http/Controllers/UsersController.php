<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect(route('index'))->with('success', 'Usuario actualizado con éxito');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect(route('index'));
    }

    public function destroy($id)
    {
        $userToDelete = User::find($id);

        if ($userToDelete && Auth::user()->id === $userToDelete->id) {
            return redirect(route('index'))->with('error', 'No puedes eliminarte a ti mismo');
        }

        // Lógica de eliminación
        $userToDelete->delete();

        return redirect(route('index'))->with('success', 'Usuario eliminado con éxito');
    }

}
