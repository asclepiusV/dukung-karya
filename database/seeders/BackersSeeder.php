<?php

namespace Database\Seeders;

use App\Models\Backer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BackersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $backers = [
            [
                'project_id' => 1,
                'user_id' => 6,
                'reward_id' => 9,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 1,
                'user_id' => 6,
                'reward_id' => 9,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 1,
                'user_id' => 6,
                'reward_id' => 9,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 2,
                'user_id' => 5,
                'reward_id' => 10,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 3,
                'user_id' => 6,
                'reward_id' => 7,
                'contribution_amount' => 300000
            ],
            [
                'project_id' => 3,
                'user_id' => 6,
                'reward_id' => 5,
                'contribution_amount' => 100000
            ],
            [
                'project_id' => 4,
                'user_id' => 6,
                'reward_id' => 4,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 4,
                'user_id' => 6,
                'reward_id' => 2,
                'contribution_amount' => 200000
            ],
            [
                'project_id' => 5,
                'user_id' => 6,
                'reward_id' => 11,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 6,
                'user_id' => 6,
                'reward_id' => 12,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 7,
                'user_id' => 6,
                'reward_id' => 14,
                'contribution_amount' => 50000
            ],
            [
                'project_id' => 7,
                'user_id' => 6,
                'reward_id' => 13,
                'contribution_amount' => 10000
            ],
            [
                'project_id' => 7,
                'user_id' => 6,
                'reward_id' => 13,
                'contribution_amount' => 10000
            ],
            [
                'project_id' => 8,
                'user_id' => 6,
                'reward_id' => 15,
                'contribution_amount' => 5000
            ],
            [
                'project_id' => 8,
                'user_id' => 6,
                'reward_id' => 15,
                'contribution_amount' => 5000
            ],
            [
                'project_id' => 9,
                'user_id' => 6,
                'reward_id' => 16,
                'contribution_amount' => 50000
            ],
            [
                'project_id' => 9,
                'user_id' => 6,
                'reward_id' => 16,
                'contribution_amount' => 50000
            ],
            [
                'project_id' => 9,
                'user_id' => 6,
                'reward_id' => 16,
                'contribution_amount' => 50000
            ],
            [
                'project_id' => 10,
                'user_id' => 6,
                'reward_id' => 17,
                'contribution_amount' => 50000
            ],
            [
                'project_id' => 11,
                'user_id' => 6,
                'reward_id' => 18,
                'contribution_amount' => 50000
            ],
            [
                'project_id' => 12,
                'user_id' => 6,
                'reward_id' => 19,
                'contribution_amount' => 20000
            ],
            [
                'project_id' => 13,
                'user_id' => 6,
                'reward_id' => 20,
                'contribution_amount' => 50000
            ],
            [
                'project_id' => 13,
                'user_id' => 6,
                'reward_id' => 20,
                'contribution_amount' => 50000
            ],
            [
                'project_id' => 14,
                'user_id' => 6,
                'reward_id' => 21,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 15,
                'user_id' => 6,
                'reward_id' => 22,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 16,
                'user_id' => 6,
                'reward_id' => 23,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 17,
                'user_id' => 6,
                'reward_id' => 24,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 18,
                'user_id' => 6,
                'reward_id' => 25,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 18,
                'user_id' => 6,
                'reward_id' => 25,
                'contribution_amount' => 500000
            ],
            [
                'project_id' => 19,
                'user_id' => 6,
                'reward_id' => 27,
                'contribution_amount' => 1000000
            ],
            [
                'project_id' => 19,
                'user_id' => 6,
                'reward_id' => 26,
                'contribution_amount' => 10000
            ],
        ];
        foreach($backers as $reward){
            Backer::create($reward);
        }
    }
}