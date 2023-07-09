<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('user_id', auth()->user()->user_id)->first();
        $projects = Project::where('user_id', auth()->user()->user_id)->get();
        return view('profile.profil', [
            'title' => 'Profile',
            'user' => $user,
            'project' => $projects
        ]);
    }

    public function delete(Request $request, $slug)
    {
        $project = Project::where('slug', $slug)->first();
        if ($project) {
            $project->delete();
        }
        return redirect()->to('/profile');
    }
}