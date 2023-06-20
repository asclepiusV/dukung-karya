<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register | Dukung Karya',
            'active' => 'register'
        ]);
    }   

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:32',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:32'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi telah berhasil, silahkan login.');
    }
}
