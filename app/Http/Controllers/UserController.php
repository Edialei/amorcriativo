<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request){
        $validatedData =$request->validate([
            'name' => 'required',
            'usuario' => 'required|min:5',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'usuario' => $validatedData['usuario'],
            'password' => bcrypt($validatedData['password'])
        ]);

        return redirect()->route('login.create');
    }
}
