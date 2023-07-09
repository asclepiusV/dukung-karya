<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControl;
use App\Http\Controllers\ProfilController;

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
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [ProjectController::class, 'index'])->name('home');

Route::get('/lists', [ProjectController::class, 'listProject'])->name('lists');
Route::get('/lists/{slug}', [ProjectController::class, 'listPerCategory']);

Route::get('/projects/{slug}', [ProjectController::class, 'detailProject'])->name('detail');
Route::get('/projects/{slug}/reward', [ProjectController::class, 'rewardProject']);


Route::get('/projects/{slug}/payment', [ProjectController::class, 'payment'])->middleware('auth');

Route::get('/start', [ProjectController::class, 'startProject'])->Middleware('auth');
Route::post('/upload', [ProjectController::class, 'createProject'])->Middleware('auth');

Route::get('/reward', [ProjectController::class, 'rewardForm'])->middleware('auth')->name('reward');
Route::post('/reward', [ProjectController::class, 'addReward'])->middleware('auth');
Route::post('/reward/{id}', [ProjectController::class, 'deleteReward'])->middleware('auth');

// Route::get('/start/checkSlug', [ProjectController::class, 'checkSlug']);

//Route Admin
Route::get('/admin', [AdminControl::class, 'index'])->middleware('auth');
Route::get('/admin/validasi/{slug}', [AdminControl::class, 'validasi'])->middleware('auth');
Route::get('/admin/delete/{slug}', [AdminControl::class, 'hapus'])->middleware('auth');

Route::get('/admin/get-projects-by-category/{slug}', [AdminControl::class, 'getProjectsByCategory']);

//profil
Route::get('/profile', [ProfilController::class, 'index'])->middleware('auth');
Route::get('/profile/delete/{slug}', [ProfilController::class, 'delete'])->middleware('auth');