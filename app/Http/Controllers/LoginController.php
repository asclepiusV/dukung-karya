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
            $data = Project::get();

            $projects = [
                [
                    "project_name" => "Tools Up",
                    "slug" => "permainan-1",
                    "project_description" => "Ini adala proyek permainan",
                    "project_image" => "asset/image/toolsUp.jpg"
                ],
                [
                    "project_name" => "Karya",
                    "slug" => "karya-1",
                    "project_description" => "Ini adala proyek karya",
                    "project_image" => "asset/image/karya1.jpeg"
                ],
                [
                    "project_name" => "Musik",
                    "slug" => "musik-1",
                    "project_description" => "Ini adala proyek musik",
                    "project_image" => "asset/image/music1.jpg"
                ],
                [
                    "project_name" => "Walking Dead",
                    "slug" => "permainan-2",
                    "project_description" => "Ini adala proyek permainan",
                    "project_image" => "asset/image/walkingDead.jpg"
                ],
                [
                    "project_name" => "Karya",
                    "slug" => "karya-2",
                    "project_description" => "Ini adala proyek karya",
                    "project_image" => "asset/image/karya2.jpg"
                ],
                [
                    "project_name" => "Musik",
                    "slug" => "musik-2",
                    "project_description" => "Ini adala proyek musik",
                    "project_image" => "asset/image/music2.jpg"
                ]
            ];
            $request->session()->put('projects', $projects);

            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('error', 'Email atau password salah!');
        }

    }
}