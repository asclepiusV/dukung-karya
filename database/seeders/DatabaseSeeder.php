<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        \App\Models\Project::create([
            'project_name' => 'Test User',
            'slug' => 'test-user',
            'category_id' => '20',
            'creator_id' => '21',
        ]);

        Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi'
        ]);

        $project = Project::create([
            'project_name' => 'Test User',
            'category_id' => 1
        ]);
    }
}
