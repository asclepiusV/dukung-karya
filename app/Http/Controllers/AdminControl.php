<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (auth()->user()->is_admin == 0) {
            return redirect()->route('home');
        }
        //Admin control untuk mengakses dashboard admin
        // $data = Project::where('is_validated', 0)->get();
        $data = Project::all();
        $category = Category::all()->toArray();
        return view('profile.dashboard', [
            'title' => 'Admin Dashboard',
            'project' => $data,
            'categories' => $category,
        ]);
    }

    public function getProjectsByCategory(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();

        $projects = $category->projects;
        // $project = $projects->category->slug;
        $categories = Category::all()->toArray();
        return view('profile.dashboard', [
            'title' => 'Admin Dashboard',
            'project' => $projects,
            'categories' => $categories,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project, $slug)
    {
        // $data = Project::();
    }

    public function validasi(Request $request, $slug)
    {
        $project = Project::where('slug', $slug)->first();
        $project->is_validated = 1;
        $project->save();

        return redirect()->back()->with('success', 'Proyek telah divalidasi');
    }

    public function hapus(Request $request, $slug)
    {
        $project = Project::where('slug', $slug)->first();
        $project->delete();

        return redirect()->back()->with('success', 'Proyek telah dihapus');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}