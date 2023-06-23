<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Reward;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
            'user_id' => $id,
            'category_id' => $projectCategory,
            'description' => $projectDesc,
            'funding_goal' => $projectGoal,
            'duration_fund' => $duration,
            // 'img_project' => base64_encode(file_get_contents($imgProject)),
            'img_project' => $name,
        ]);

        $pr = Project::where('slug', $slug)->first();
        $id_pr = $pr->project_id;
        Session::put('pr_id', $id_pr);
        
        return redirect()->route('reward')->with('project', $pr);
    }

    public function rewardForm()
    {
        $pr_id = Session::get('pr_id');
        if(!$pr_id){
            return redirect()->route('home');
        }

        $data = Project::where('project_id', $pr_id)->first();
        return view('/form/secondForm', [
            'title' => 'Reward',
            'project' => $data
        ]);
    }

    public function addReward(Request $request)
    {
        $project_id = $request->project_id;
        $reward_title = $request->reward_title;
        $reward_desc = $request->description;
        $reward_amount = $request->amount;

        Reward::create([
            'project_id' => $project_id,
            'reward_title' => $reward_title,
            'reward_desc' => $reward_desc,
            'reward_amount' => $reward_amount
        ]);
        
        return redirect()->route('reward', [
            'title' => 'Reward',
        ]);
        // return view('/form/secondForm', [
        //     'title' => 'Reward'
        // ]);
    }

    public function detailProject($slug, Request $request)
    {
        //REQUEST
        $data = Project::where('slug', $slug)->first();
        // $allData = Project::with('user')->get();
        // $reward = Reward
        return view('campaign/detail', [
            "title" => "A Project",
            "project" => $data,
            // "allData" => $allData
        ]);
    }

    public function listProject()
    {

        $perPage = 9; // Jumlah data yang ingin ditampilkan per halaman
        // $offset = ($page - 1) * $perPage;
        // $projects = Project::skip($offset)->take($perPage)->get();


        $data = Project::get()->toArray();
        // $data = Project::paginate(6);
        // $chunks = $data->chunk(3);
        // $totalChunks = $chunks->count();
        // $showNextButton = true;
        // $currentIndex = $data->currentPage() - 1;

        // return view('lists.index', compact('chunks', 'totalChunks', 'showNextButton', 'currentIndex'));
        return view('campaign/listing', [
            "title" => "Lists",
            "project" => $data,
            // "chunks" => $chunks,
            // "totalChunks" => $totalChunks,
            // "showNextButton" => $showNextButton,
            // "currentIndex" => $currentIndex
        ]);
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Project::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }

    public function payment($slug, Request $request)
    {
        $data = Project::where('slug', $slug)->first();
        $allData = Project::with('user')->get();
        // $new_project = [];
        // foreach ($allData as $item) {
        //     if ($item->slug === $slug) {
        //         $new_project = $item;
        //         break;
        //     }
        // }
         // Set your Merchant Server Key
         \Midtrans\Config::$serverKey = 'SB-Mid-server-wOmHXMyBWxnlIaG9wnazncbR';
         // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
         \Midtrans\Config::$isProduction = false;
         // Set sanitization on (default)
         \Midtrans\Config::$isSanitized = true;
         // Set 3DS transaction for credit card to true
         \Midtrans\Config::$is3ds = true;
 
         $params = array(
             'transaction_details' => array(
                 'order_id' => rand(),
                 'gross_amount' => 10000,
             ),
             'customer_details' => array(
                 'username' => $request->get('username'),
                 'email' => $request->get('email'),
             ),
         );
 
         $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('campaign/payment', [
            "title" => "Payment a Project",
            "project" => $data,
            "snap_token" => $snapToken
        ]);
    }


}