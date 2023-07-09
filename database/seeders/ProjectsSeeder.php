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
                'project_name' => 'Wireless Charger for Twitch',
                'slug' => 'wireless-charger-for-twitch',
                'category_id' => '7',
                'user_id' => '5',
                'img_project' => 'charger.webp',
                'description' => 'Pengisi Daya Nirkabel konseptual untuk Twitch sebagai solusi bagi para gamer livestream yang mencari cara agar perangkat mereka tetap hidup dan menjaga komunikasi dengan sesama pengguna.',
                'funding_goal' => '60.000.000',
                'duration_fund' => '50',
                'is_featured' => true
            ],
            [
                'project_name' => 'Dreadout',
                'slug' => 'dreadout',
                'category_id' => '6',
                'user_id' => '6',
                'img_project' => 'dreadout.jpg',
                'description' => 'DreadOut adalah game horor indie Indonesia untuk platform Microsoft Windows.',
                'funding_goal' => '80.000.000',
                'duration_fund' => '60'
            ],
            [
                'project_name' => 'Evil Dead',
                'slug' => 'evil-dead',
                'category_id' => '6',
                'user_id' => '4',
                'img_project' => 'evil_dead.jpg',
                'description' => 'Game ini berkisah tentang lima pelajar universitas dalam liburan mereka di sebuah kabin di hutan, yang berubah menjadi mimpi buruk ketika mereka menemukan audiotape yang merupakan kunci untuk membuka kembali roh jahat yang bisa merasuki dan mengendalikan manusia yang hidup atau mati.',
                'funding_goal' => '60.000.000',
                'duration_fund' => '30',
                'is_featured' => true
            ],
            [
                'project_name' => 'Full of Dreams',
                'slug' => 'full-of-dream',
                'category_id' => '5',
                'user_id' => '2',
                'img_project' => 'full_of_dream.jpeg',
                'description' => 'One Hacker Band merilis album debutnya, "Full of Dreams".Dan saya ingin Anda menjadi bagian darinya!',
                'funding_goal' => '10.000.000',
                'duration_fund' => '20',
                'is_featured' => true
            ],
            [
                'project_name' => 'Islands of Nyne',
                'slug' => 'islands-of-nyne',
                'category_id' => '6',
                'user_id' => '2',
                'img_project' => 'islands_nyne.jpg',
                'description' => 'Islands of Nyne adalah game video battle royale penembak orang bertema sci-fi.',
                'funding_goal' => '100.000.000',
                'duration_fund' => '50'
            ],
            [
                'project_name' => 'Outlaws',
                'slug' => 'outlaws',
                'category_id' => '6',
                'user_id' => '3',
                'img_project' => 'outlaws.jpg',
                'description' => 'Star Wars Outlaws adalah game aksi-petualangan mendatang yang dikembangkan oleh Massive Entertainment dan diterbitkan oleh Ubisoft di bawah lisensi oleh Lucasfilm Games. Gim ini akan berlatarkan alam semesta Star Wars, selama periode antara The Empire Strikes Back dan Return of the Jedi.',
                'funding_goal' => '60.000.000',
                'duration_fund' => '30',
                'is_featured' => true
            ],
            [
                'project_name' => 'Wanderer: Kenya East Debut Album',
                'slug' => 'kenya-east-debut-album',
                'category_id' => '5',
                'user_id' => '7',
                'img_project' => 'kenya_east.jpg',
                'description' => 'Bertahun-tahun dalam pembuatan, dan akhirnya ada di sini! Wanderers adalah album kami yang diproduksi sendiri, Anda akan bangga telah membantu menghadirkannya ke dunia.',
                'funding_goal' => '25.000.000',
                'duration_fund' => '20'
            ],
            [
                'project_name' => 'Signature: Album Kedua oleh Tiffany Smith',
                'slug' => 'signature',
                'category_id' => '5',
                'user_id' => '8',
                'img_project' => 'signature.jpeg',
                'description' => 'Signature: Saya memiliki dua belas lagu bagus di dalam gitar ini. Bantu saya mendorong mereka keluar ke dunia...',
                'funding_goal' => '30.000.000',
                'duration_fund' => '40'
            ],
            [
                'project_name' => 'The Mercenaries',
                'slug' => 'the-mercenaries',
                'category_id' => '6',
                'user_id' => '2',
                'img_project' => 'the_mercenaries.jpg',
                'description' => 'Game ini berkisah tentang lima pelajar universitas dalam liburan mereka di sebuah kabin di hutan, yang berubah menjadi mimpi buruk ketika mereka menemukan audiotape yang merupakan kunci untuk membuka kembali roh jahat yang bisa merasuki dan mengendalikan manusia yang hidup atau mati.',
                'funding_goal' => '100.000.000',
                'duration_fund' => '45'
            ],
            [
                'project_name' => 'Uncharted 4: A Thiefs End',
                'slug' => 'uncharted-4-a-thiefs-end',
                'category_id' => '6',
                'user_id' => '5',
                'img_project' => 'uncharted.png',
                'description' => 'Game ini merupakan series keempat dari Uncharted',
                'funding_goal' => '100.000.000',
                'duration_fund' => '40'
            ],
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
            [
                'project_name' => 'Wartales',
                'slug' => 'wartales',
                'category_id' => '6',
                'user_id' => '4',
                'img_project' => 'wartales.jpg',
                'description' => 'Game ini berkisah tentang lima pelajar universitas dalam liburan mereka di sebuah kabin di hutan, yang berubah menjadi mimpi buruk ketika mereka menemukan audiotape yang merupakan kunci untuk membuka kembali roh jahat yang bisa merasuki dan mengendalikan manusia yang hidup atau mati.',
                'funding_goal' => '60.000.000',
                'duration_fund' => '30'
            ],
            [
                'project_name' => 'The Last of Us',
                'slug' => 'the-last-of-us',
                'category_id' => '6',
                'user_id' => '2',
                'img_project' => 'last_of_us.webp',
                'description' => 'Game ini merupakan game survival dalam dunia yang dipenuhi zombie.',
                'funding_goal' => '60.000.000',
                'duration_fund' => '30',
                'is_featured' => true
            ],
            [
                'project_name' => 'Skyland',
                'slug' => 'skyland',
                'category_id' => '5',
                'user_id' => '2',
                'img_project' => 'skyland.webp',
                'description' => 'Album Kedua dari grup musik Aimer',
                'funding_goal' => '60.000.000',
                'duration_fund' => '20'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}