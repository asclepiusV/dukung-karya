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
            "project_name" => "Permainan",
            "slug" => "permainan-1",
            "project_description" => "Ini adala proyek permainan"
        ],
        [
            "project_name" => "Karya",
            "slug" => "karya-1",
            "project_description" => "Ini adala proyek karya"
        ],
        [
            "project_name" => "Musik",
            "slug" => "musik-1",
            "project_description" => "Ini adala proyek musik"
        ]        
    ];
    return view('welcome', [
        "project" => $projects
    ]);
});



Route::get('/projects/{slug}', function ($slug) {
    $projects = [
        [
            "project_name" => "Permainan",
            "slug" => "permainan-1",
            "project_description" => "Ini adala proyek permainan"
        ],
        [
            "project_name" => "Karya",
            "slug" => "karya-1",
            "project_description" => "Ini adala proyek karya"
        ],
        [
            "project_name" => "Musik",
            "slug" => "musik-1",
            "project_description" => "Ini adala proyek musik"
        ]        
    ];


    $new_project = [];
    foreach($projects as $item) {
    if($item["slug"] === $slug )
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
