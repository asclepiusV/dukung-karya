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
        return view('auth/login', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        //$credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // $request->session()->put('user_id', $user_id);
            $request->session()->regenerate();

            if ($user->is_admin == 1) {
                // Pengguna adalah admin, arahkan ke halaman admin
                return redirect()->intended('/');
            } else {
                return redirect()->intended('/');
            }

        } else {
            return redirect()->back()->with('error', 'Email atau password salah!');
        }

    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}