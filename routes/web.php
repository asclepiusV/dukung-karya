<?php

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

Route::get('/', function () {
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
    return view('welcome', [
        "project" => $projects
    ]);
});



Route::get('/projects/{slug}', function ($slug) {
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


    $new_project = [];
    foreach ($projects as $item) {
        if ($item["slug"] === $slug)
            $new_project = $item;
    }

    return view('campaign/details', [
        "title" => "A Project",
        "project" => $new_project
    ]);
});


Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/lists', function () {
    // Dummy project data (replace with actual data from the database)
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
        // Add more project arrays as needed
    ];
    return view('campaign/listing', [
        "title" => "A Project",
        "project" => $projects
    ]);
});

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