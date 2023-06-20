<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // Category::create([
        //     'name' => 'Butik', 'slug' => 'butik',
        // ['name' => 'Kerajinan', 'slug' => 'kerajinan'],
        // ['name' => 'Komik', 'slug' => 'komik'],
        // ['name' => 'Makanan', 'slug' => 'makanan'],
        // ['name' => 'Musik', 'slug' => 'musik'],
        // ['name' => 'Permainan', 'slug' => 'permainan'],
        // ['name' => 'Teknologi', 'slug' => 'teknologi'],
        // ]);

        User::create([
            'username' => 'ebel',
            'email' => 'ebel@gmail.com',
            'password' => '1234'
        ]);

        // \App\Models\Project::create([
        //     'project_name' => 'Test User',
        //     'slug' => 'test-user',
        //     'category_id' => '1',
        //     'creator_id' => '1',
        //     'img_project' => '/asset/image/karya1.jpeg'
        // ]);
        // $project = Project::create([
        //     'project_name' => 'Test User',
        //     'category_id' => 1
        // ]);
    }
}