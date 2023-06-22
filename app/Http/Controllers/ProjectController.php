<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProjectController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $data = Project::get()->toArray();
        // $data->img_project;

        $image = public_path('projects-img_project.bin');
        $imageData = base64_encode(file_get_contents($image));
        // $src = 'data: ' . mime_content_type($image) . ';base64,' . $imageData;

        return View('welcome', [
            "project" => $data,
            'title' => 'Home'
        ]);
    }

    public function startProject()
    {
        return view('/form/mainForm', [
            'title' => 'Start'
        ]);
    }

    public function createProject(Request $request)
    {
        $projectName = $request->title;
        $slug = Str::slug($projectName);
        $projectCategory = $request->projectCategory;
        $projectDesc = $request->projectDesc;
        $projectGoal = $request->projectGoal;
        $duration = $request->duration;
        $id = auth()->user()->user_id;

        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images', $name);
        // $urlImage = "storage/images/";


        Project::create([
            'project_name' => $projectName,
            'slug' => $slug,
            'creator_id' => $id,
            'category_id' => $projectCategory,
            'description' => $projectDesc,
            'funding_goal' => $projectGoal,
            'duration_fund' => $duration,
            // 'img_project' => base64_encode(file_get_contents($imgProject)),
            'img_project' => $name,
        ]);

        return redirect()->route('home');
    }

    public function detailProject($slug, Request $request)
    {
        //REQUEST
        $data = Project::where('slug', $slug)->first();
        $allData = Project::with('user')->get();
        return view('campaign/detail', [
            "title" => "A Project",
            "project" => $data,
            "allData" => $allData
        ]);
    }

    public function listProject()
    {
        $data = Project::get()->toArray();

        return view('campaign/listing', [
            "title" => "Lists",
            "project" => $data
        ]);
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Project::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }

}