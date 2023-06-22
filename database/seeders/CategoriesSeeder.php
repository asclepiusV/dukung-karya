<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Butik', 'slug' => 'butik'],
            ['name' => 'Kerajinan', 'slug' => 'kerajinan'],
            ['name' => 'Komik', 'slug' => 'komik'],
            ['name' => 'Makanan', 'slug' => 'makanan'],
            ['name' => 'Musik', 'slug' => 'musik'],
            ['name' => 'Permainan', 'slug' => 'permainan'],
            ['name' => 'Teknologi', 'slug' => 'teknologi'],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
