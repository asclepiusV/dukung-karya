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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            $user_id = Auth::user()->user_id;
            $request->session()->put('user_id', $user_id);

            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('error', 'Email atau password salah!');
        }

    }
}