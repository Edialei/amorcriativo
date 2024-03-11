<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required', 
            'password' => 'required|min:8'
        ]);

        $credentials = $request->only('usuario', 'password');
        
        $user = Auth::user();

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index');
        } else {
            return back()->with('error', 'Usuário ou senha inválidos');
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        Auth::logout();
        
        return redirect()->route('login.create');
    }
}
