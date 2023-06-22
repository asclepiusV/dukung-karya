<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->Middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [ProjectController::class, 'index']);

Route::get('/projects/{slug}', [ProjectController::class, 'detailProject']);

Route::get('/lists', [ProjectController::class, 'listProject']);

Route::get('/projects/{slug}/payment', function ($slug) {
    $projects = [
        [
            "project_name" => "Permainan",
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
            "project_name" => "Permainan",
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


    $new_project = [];
    foreach ($projects as $item) {
        if ($item["slug"] === $slug)
            $new_project = $item;
    }

    return view('campaign/payment', [
        "title" => "Payment a Project",
        "project" => $new_project
    ]);
});

// Route::get('/start', [ProjectController::class, 'startProject'])->Middleware('auth');
Route::get('/start', [ProjectController::class, 'startProject']);
// Route::post('/', [ProjectController::class, 'createProject'])->Middleware('auth');
Route::post('/', [ProjectController::class, 'createProject']);

Route::get('/start/checkSlug', [ProjectController::class, 'checkSlug']);

