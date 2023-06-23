<?php

namespace Database\Seeders;

use App\Models\Reward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RewardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rewards = [
            [
                'project_id' => 4, 
                'reward_title' => 'Reward Lv. 1', 
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa poster',
                'reward_amount' => '100000'
            ],
            [
                'project_id' => 4, 
                'reward_title' => 'Reward Lv. 2', 
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini',
                'reward_amount' => '200000'
            ],
            [
                'project_id' => 4, 
                'reward_title' => 'Reward Lv. 3', 
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini',
                'reward_amount' => '300000'
            ],
            [
                'project_id' => 4, 
                'reward_title' => 'Reward Lv. 4', 
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini dan',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 3, 
                'reward_title' => 'Reward Lv. 1', 
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa poster',
                'reward_amount' => '100000'
            ],
            [
                'project_id' => 3, 
                'reward_title' => 'Reward Lv. 2', 
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa poster dan sb',
                'reward_amount' => '200000'
            ],
            [
                'project_id' => 3, 
                'reward_title' => 'Reward Lv. 3', 
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini',
                'reward_amount' => '300000'
            ],
            [
                'project_id' => 3, 
                'reward_title' => 'Reward Lv. 4', 
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini dan',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 1, 
                'reward_title' => 'Reward dasar', 
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini dan',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 2, 
                'reward_title' => 'Base Reward', 
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini dan',
                'reward_amount' => '500000'
            ],
            
        ];

        foreach($rewards as $reward){
            Reward::create($reward);
        }
    }
}
