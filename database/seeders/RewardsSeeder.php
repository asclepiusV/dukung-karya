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
                'reward_title' => 'Reward Lv 1', 
                'slug' => 'reward-lv-1',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa poster',
                'reward_amount' => '100000'
            ],
            [
                'project_id' => 4, 
                'reward_title' => 'Reward Lv 2', 
                'slug' => 'reward-lv-2',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini',
                'reward_amount' => '200000'
            ],
            [
                'project_id' => 4, 
                'reward_title' => 'Reward Lv 3', 
                'slug' => 'reward-lv-3',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini',
                'reward_amount' => '300000'
            ],
            [
                'project_id' => 4, 
                'reward_title' => 'Reward Lv 4', 
                'slug' => 'reward-lv-4',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini dan',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 3, 
                'reward_title' => 'Reward Lv 1',
                'slug' => 'reward-lv-1',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa poster',
                'reward_amount' => '100000'
            ],
            [
                'project_id' => 3, 
                'reward_title' => 'Reward Lv 2', 
                'slug' => 'reward-lv-2',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa poster dan sb',
                'reward_amount' => '200000'
            ],
            [
                'project_id' => 3, 
                'reward_title' => 'Reward Lv 3',
                'slug' => 'reward-lv-3',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini',
                'reward_amount' => '300000'
            ],
            [
                'project_id' => 3, 
                'reward_title' => 'Reward Lv 4',
                'slug' => 'reward-lv-4',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini dan',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 1, 
                'reward_title' => 'Reward dasar',
                'slug' => 'reward-dasar',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini dan',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 2, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari game ini dan',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 5, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 6, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa...',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 7, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa...',
                'reward_amount' => '10000'
            ],
            [
                'project_id' => 7, 
                'reward_title' => 'Produk Jadinya',
                'slug' => 'produk-jadinya',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa...',
                'reward_amount' => '50000'
            ],
            [
                'project_id' => 8, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '5000'
            ],
            [
                'project_id' => 9, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '50000'
            ],
            [
                'project_id' => 10, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '50000'
            ],
            [
                'project_id' => 11, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '50000'
            ],
            [
                'project_id' => 12, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '20000'
            ],
            [
                'project_id' => 13, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '50000'
            ],
            [
                'project_id' => 14, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 15, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 16, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 17, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 18, 
                'reward_title' => 'Base Reward',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari...',
                'reward_amount' => '500000'
            ],
            [
                'project_id' => 19, 
                'reward_title' => 'Reward 1 - Poster',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa poster album',
                'reward_amount' => '10000'
            ],
            [
                'project_id' => 19, 
                'reward_title' => 'Reward 2: Salinan Album',
                'slug' => 'base-reward',
                'reward_desc' => 'Kontributor akan mendapatkan barang berupa salinan dari album ini',
                'reward_amount' => '100000'
            ],
        ];

        foreach($rewards as $reward){
            Reward::create($reward);
        }
    }
}