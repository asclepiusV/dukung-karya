<?php

namespace App\Http\Controllers;

use App\Models\Backer;
use App\Models\Category;
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
        $data = Project::where('is_featured', true)->get()->toArray();
        // $data->img_project;

        $image = public_path('projects-img_project.bin');
        $imageData = base64_encode(file_get_contents($image));
        // $src = 'data: ' . mime_content_type($image) . ';base64,' . $imageData;
        $categories = Category::all();
        return view('welcome', [
            "project" => $data,
            'title' => 'Home',
            'categories' => $categories
        ]);
    }

    public function startProject()
    {
        $categories = Category::all();
        return view('/form/mainForm', [
            'title' => 'Start',
            'categories' => $categories
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

        $slug = $pr->slug;
        session::put('slug', $slug);
        // $request->flash('slug', $slug);

        return redirect()->route('reward')->with(['project' => $pr]);
    }

    public function rewardForm()
    {
        $pr_id = Session::get('pr_id');
        if(!$pr_id){
            return redirect()->route('home');
        }

        $categories = Category::all();

        $data = Project::where('project_id', $pr_id)->first();
        $slug = session('slug');
        return view('form/secondForm', [
            'title' => 'Reward',
            'project' => $data,
            'categories' => $categories,
            'slug' => $slug
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

    public function rewardProject($slug, Request $request)
    {
        $data = Project::where('slug', $slug)->first();
        // $allData = Project::with('user')->get();
        // $reward = Reward

        $id_pr = $data->project_id;
        Session::put('pr_id', $id_pr);
        return view('/form/secondForm', [
            "title" => "Reward",
            "project" => $data,
            'slug' => $data->slug
        ]);
    }

    public function deleteReward($id)
    {
        $reward = Reward::where('reward_id', $id);
        $reward->delete();

        return redirect()->route('reward');
    }
    
    public function detailProject($slug, Request $request)
    {
        //REQUEST
        $data = Project::where('slug', $slug)->with('backers')->first();
        $backers = $data->backers();
        $sum = $backers->sum('contribution_amount');
        // $allData = Project::with('user')->get();
        // $reward = Reward
        $persen = $sum / ($data->funding_goal) * 100;
        $persen = number_format($persen, 2);
        
        $total = $backers->count();

        $categories = Category::all();
        return view('campaign/detail', [
            "title" => "A Project",
            "project" => $data,
            // "allData" => $allData
            'categories' => $categories,
            'total_donate' => $sum,
            'persen' => $persen,
            'backer' => $total
        ]);
    }

    public function listProject()
    {

        $perPage = 9; // Jumlah data yang ingin ditampilkan per halaman
        // $offset = ($page - 1) * $perPage;
        // $projects = Project::skip($offset)->take($perPage)->get();


        $data = Project::where('is_validated', 1)->get()->toArray();
        // $data = Project::paginate(6);
        // $chunks = $data->chunk(3);
        // $totalChunks = $chunks->count();
        // $showNextButton = true;
        // $currentIndex = $data->currentPage() - 1;

        // return view('lists.index', compact('chunks', 'totalChunks', 'showNextButton', 'currentIndex'));

        $categories = Category::all();
        return view('campaign/listing', [
            "title" => "Lists",
            "project" => $data,
            'categories' => $categories
            // "chunks" => $chunks,
            // "totalChunks" => $totalChunks,
            // "showNextButton" => $showNextButton,
            // "currentIndex" => $currentIndex
        ]);
    }

    public function listPerCategory($slug)
    {
        $category = Category::where('slug', $slug)->with('projects')->first();
        $data = $category->projects()->where('is_validated', 1)->get();        
        $categories = Category::all();
        return view('campaign.listPerCategory', [
            "title" => "List Per Category",
            "project" => $data,
            'categories' => $categories
        ]);
    }

    public function payment($slug, $id, Request $request)
    {
        $data = Project::where('slug', $slug)->with('rewards')->first();
        $reward = $data->rewards()->where('reward_id', $id)->first();
        $allData = Project::with('user')->get();
        $id_user = auth()->user()->user_id;

        Backer::create([
            'project_id' => $data->project_id,
            'user_id' => $id_user,
            'reward_id' => $id,
            'contribution_amount' => $reward['reward_amount'],
        ]);
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
                'gross_amount' => $reward['reward_amount'],
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
            "snap_token" => $snapToken,
            "reward" => $reward
        ]);
        // return dd(Project::where('slug', $slug)->with('rewards')->get('rewards_amount'));
    }

}