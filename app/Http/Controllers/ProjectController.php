<?php

namespace App\Http\Controllers;

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
        $src = 'data: ' . mime_content_type($image) . ';base64,' . $imageData;

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

        return View('welcome', [
            "project" => $data,
            'img' => $src
        ]);
    }

    public function startProject()
    {
        return view('/form/mainForm');
    }

    public function createProject(Request $request)
    {
        $projectName = $request->title;
        $slug = Str::slug($projectName);
        $projectCategory = $request->projectCategory;
        $projectDesc = $request->projectDesc;
        $projectGoal = $request->projectGoal;
        $duration = $request->duration;
        // $imgProject = $request->file('image');

        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images', $name);
        $urlImage = "storage/images/";
        // return redirect()->back();
        // $imgProject = ;

        Project::create([
            'project_name' => $projectName,
            'slug' => $slug,
            'category_id' => $projectCategory,
            'description' => $projectDesc,
            'funding_goal' => $projectGoal,
            'duration_fund' => $duration,
            // 'img_project' => base64_encode(file_get_contents($imgProject)),
            'img_project' => $name,
        ]);


        $data = Project::get()->toArray();

        return view('welcome', [
            "project" => $data
        ]);
    }

    public function detailProject($slug, Request $request)
    {
        // $projects = [
        //     [
        //         "project_name" => "Tools Up",
        //         "slug" => "permainan-1",
        //         "project_description" => "Ini adala proyek permainan",
        //         "project_image" => "asset/image/toolsUp.jpg"
        //     ],
        //     [
        //         "project_name" => "Karya",
        //         "slug" => "karya-1",
        //         "project_description" => "Ini adala proyek karya",
        //         "project_image" => "asset/image/karya1.jpeg"
        //     ],
        //     [
        //         "project_name" => "Musik",
        //         "slug" => "musik-1",
        //         "project_description" => "Ini adala proyek musik",
        //         "project_image" => "asset/image/music1.jpg"
        //     ],
        //     [
        //         "project_name" => "Walking Dead",
        //         "slug" => "permainan-2",
        //         "project_description" => "Ini adala proyek permainan",
        //         "project_image" => "asset/image/walkingDead.jpg"
        //     ],
        //     [
        //         "project_name" => "Karya",
        //         "slug" => "karya-2",
        //         "project_description" => "Ini adala proyek karya",
        //         "project_image" => "asset/image/karya2.jpg"
        //     ],
        //     [
        //         "project_name" => "Musik",
        //         "slug" => "musik-2",
        //         "project_description" => "Ini adala proyek musik",
        //         "project_image" => "asset/image/music2.jpg"
        //     ]
        // ];

        //REQUEST
        $data = Project::with('user')->where('slug', $slug)->first();
        $allData = Project::with('user')->get();
        // $new_project = [];
        // foreach ($projects as $item) {
        //     if ($item["slug"] === $slug)
        //         $new_project = $item;
        // }

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
            "title" => "A Project",
            "project" => $data
        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Project::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}