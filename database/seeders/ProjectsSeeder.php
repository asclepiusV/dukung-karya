<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'project_name' => 'Karya Pertama',
                'slug' => 'karya-pertama',
                'category_id' => '1',
                'user_id' => '2',
                'img_project' => 'karya1.jpeg',
                'description' => 'Karya ini merupakan hasil buatan alam',
                'funding_goal' => '10.000.000',
                'duration_fund' => '15'
            ],
            [
                'project_name' => 'Karya Kedua',
                'slug' => 'karya-kedua',
                'category_id' => '1',
                'user_id' => '3',
                'img_project' => 'karya2.jpg',
                'description' => 'Karya ini merupakan karya mistik',
                'funding_goal' => '5.000.000',
                'duration_fund' => '18',
            ],
            [
                'project_name' => 'Musik Jazz',
                'slug' => 'musik-jazz',
                'category_id' => '5',
                'user_id' => '4',
                'img_project' => 'music1.jpg',
                'description' => 'Musik ini merupakan musik jazz',
                'funding_goal' => '15.000.000',
                'duration_fund' => '30'
            ],
            [
                'project_name' => 'Tools Up',
                'slug' => 'tools-up',
                'category_id' => '6',
                'user_id' => '2',
                'img_project' => 'toolsUp.jpg',
                'description' => 'Game ini bernama Tools Up',
                'funding_goal' => '30.000.000',
                'duration_fund' => '50',
            ],
            [
                'project_name' => 'Music Pop',
                'slug' => 'music-pop',
                'category_id' => '5',
                'user_id' => '4',
                'img_project' => 'music2.jpg',
                'description' => 'Musik ini merupakan musik pop',
                'funding_goal' => '10.000.000',
                'duration_fund' => '25'
            ],
            [
                'project_name' => 'Walking Dead',
                'slug' => 'walking-dead',
                'category_id' => '6',
                'user_id' => '3',
                'img_project' => 'walkingDead.jpg',
                'description' => 'Game ini bernama Walking Dead',
                'funding_goal' => '50.000.000',
                'duration_fund' => '40'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}