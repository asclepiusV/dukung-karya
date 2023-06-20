<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        //$credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            // $user_id = Auth::user()->user_id;
            // $request->session()->put('user_id', $user_id);
            $request->session()->regenerate();

            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('error', 'Email atau password salah!');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/');
    }
}