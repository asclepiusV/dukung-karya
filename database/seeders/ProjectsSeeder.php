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
                'funding_goal' => 60000000,
                'duration_fund' => '50',
                'is_featured' => true,
                'is_validated' => true
            ],
            [
                'project_name' => 'Dreadout',
                'slug' => 'dreadout',
                'category_id' => '6',
                'user_id' => '6',
                'img_project' => 'dreadout.jpg',
                'description' => 'DreadOut adalah game horor indie Indonesia untuk platform Microsoft Windows.',
                'funding_goal' => 80000000,
                'duration_fund' => '60',
                'is_validated' => true
            ],
            [
                'project_name' => 'Evil Dead',
                'slug' => 'evil-dead',
                'category_id' => '6',
                'user_id' => '4',
                'img_project' => 'evil_dead.jpg',
                'description' => 'Game ini berkisah tentang lima pelajar universitas dalam liburan mereka di sebuah kabin di hutan, yang berubah menjadi mimpi buruk ketika mereka menemukan audiotape yang merupakan kunci untuk membuka kembali roh jahat yang bisa merasuki dan mengendalikan manusia yang hidup atau mati.',
                'funding_goal' => 60000000,
                'duration_fund' => '30',
                'is_featured' => true,
                'is_validated' => true
            ],
            [
                'project_name' => 'Full of Dreams',
                'slug' => 'full-of-dream',
                'category_id' => '5',
                'user_id' => '2',
                'img_project' => 'full_of_dream.jpeg',
                'description' => 'One Hacker Band merilis album debutnya, "Full of Dreams".Dan saya ingin Anda menjadi bagian darinya!',
                'funding_goal' => 10000000,
                'duration_fund' => '20',
                'is_featured' => true,
                'is_validated' => true
            ],
            [
                'project_name' => 'Islands of Nyne',
                'slug' => 'islands-of-nyne',
                'category_id' => '6',
                'user_id' => '2',
                'img_project' => 'islands_nyne.jpg',
                'description' => 'Islands of Nyne adalah game video battle royale penembak orang bertema sci-fi.',
                'funding_goal' => 100000000,
                'duration_fund' => '50',
                'is_validated' => true
            ],
            [
                'project_name' => 'Outlaws',
                'slug' => 'outlaws',
                'category_id' => '6',
                'user_id' => '3',
                'img_project' => 'outlaws.jpg',
                'description' => 'Star Wars Outlaws adalah game aksi-petualangan mendatang yang dikembangkan oleh Massive Entertainment dan diterbitkan oleh Ubisoft di bawah lisensi oleh Lucasfilm Games. Gim ini akan berlatarkan alam semesta Star Wars, selama periode antara The Empire Strikes Back dan Return of the Jedi.',
                'funding_goal' => 60000000,
                'duration_fund' => '30',
                'is_featured' => true,
                'is_validated' => true
            ],
            [
                'project_name' => 'Wanderer: Kenya East Debut Album',
                'slug' => 'kenya-east-debut-album',
                'category_id' => '5',
                'user_id' => '7',
                'img_project' => 'kenya_east.jpg',
                'description' => 'Bertahun-tahun dalam pembuatan, dan akhirnya ada di sini! Wanderers adalah album kami yang diproduksi sendiri, Anda akan bangga telah membantu menghadirkannya ke dunia.',
                'funding_goal' => 25000000,
                'duration_fund' => '20',
                'is_validated' => true
            ],
            [
                'project_name' => 'Signature: Album Kedua oleh Tiffany Smith',
                'slug' => 'signature',
                'category_id' => '5',
                'user_id' => '8',
                'img_project' => 'signature.jpeg',
                'description' => 'Signature: Saya memiliki dua belas lagu bagus di dalam gitar ini. Bantu saya mendorong mereka keluar ke dunia...',
                'funding_goal' => 30000000,
                'duration_fund' => '40',
                'is_validated' => true
            ],
            [
                'project_name' => 'The Mercenaries',
                'slug' => 'the-mercenaries',
                'category_id' => '6',
                'user_id' => '2',
                'img_project' => 'the_mercenaries.jpg',
                'description' => 'Game ini berkisah tentang lima pelajar universitas dalam liburan mereka di sebuah kabin di hutan, yang berubah menjadi mimpi buruk ketika mereka menemukan audiotape yang merupakan kunci untuk membuka kembali roh jahat yang bisa merasuki dan mengendalikan manusia yang hidup atau mati.',
                'funding_goal' => 100000000,
                'duration_fund' => '45',
                'is_validated' => true
            ],
            [
                'project_name' => 'Karya Pertama',
                'slug' => 'karya-pertama',
                'category_id' => '1',
                'user_id' => '2',
                'img_project' => 'karya1.jpeg',
                'description' => 'Karya ini merupakan hasil buatan alam',
                'funding_goal' => 10000000,
                'duration_fund' => '15',
                'is_validated' => true
            ],
            [
                'project_name' => 'Musik Jazz',
                'slug' => 'musik-jazz',
                'category_id' => '5',
                'user_id' => '4',
                'img_project' => 'music1.jpg',
                'description' => 'Musik ini merupakan musik jazz',
                'funding_goal' => 15.000000,
                'duration_fund' => '30',
                'is_validated' => true
            ],
            [
                'project_name' => 'Tools Up',
                'slug' => 'tools-up',
                'category_id' => '6',
                'user_id' => '2',
                'img_project' => 'toolsUp.jpg',
                'description' => 'Game ini bernama Tools Up',
                'funding_goal' => 30000000,
                'duration_fund' => '50',
                'is_validated' => true
            ],
            [
                'project_name' => 'Haunting',
                'slug' => 'haunting',
                'category_id' => '3',
                'user_id' => '2',
                'img_project' => 'haunting.avif',
                'description' => 'Bram melakukan pekerjaan yang cukup baik dalam menghindari konsekuensi dari kemampuannya yang aneh sampai saat ini. Tapi perhitungannya akhirnya tiba dalam bentuk Harapan, seorang pemburu hantu yang terampil dan kejam yang telah menjalankan misinya untuk mengakhiri pemerintahan teror Bram yang tidak disengaja. Secara permanen.',
                'funding_goal' => 25000000,
                'duration_fund' => '50',
                'is_validated' => true,
                'is_featured' => true
            ],
            [
                'project_name' => 'Wartales',
                'slug' => 'wartales',
                'category_id' => '6',
                'user_id' => '4',
                'img_project' => 'wartales.jpg',
                'description' => 'Game ini berkisah tentang lima pelajar universitas dalam liburan mereka di sebuah kabin di hutan, yang berubah menjadi mimpi buruk ketika mereka menemukan audiotape yang merupakan kunci untuk membuka kembali roh jahat yang bisa merasuki dan mengendalikan manusia yang hidup atau mati.',
                'funding_goal' => 60000000,
                'duration_fund' => '30',
                'is_validated' => true
            ],
            [
                'project_name' => 'Soma City',
                'slug' => 'soma-city',
                'category_id' => '3',
                'user_id' => '2',
                'img_project' => 'somacity.avif',
                'description' => 'Bertempat di dunia di mana manusia adalah mikroba antropomorfis, seorang pelacak kontak berupaya membersihkan kotanya yang korup selama masa transisi ke walikota baru. Komik ini sangat cocok untuk penggemar Osmosis Jones dan Blacksad!',
                'funding_goal' => 15.000000,
                'duration_fund' => '40',
                'is_validated' => true,
            ],
            [
                'project_name' => 'The Last of Us',
                'slug' => 'the-last-of-us',
                'category_id' => '6',
                'user_id' => '2',
                'img_project' => 'last_of_us.webp',
                'description' => 'Game ini merupakan game survival dalam dunia yang dipenuhi zombie.',
                'funding_goal' => 60000000,
                'duration_fund' => '30',
                'is_featured' => true,
                'is_validated' => true
            ],
            [
                'project_name' => 'Skyland',
                'slug' => 'skyland',
                'category_id' => '5',
                'user_id' => '2',
                'img_project' => 'skyland.webp',
                'description' => 'Album Kedua dari grup musik Aimer',
                'funding_goal' => 60000000,
                'duration_fund' => '20',
                'is_validated' => true
            ],
            [
                'project_name' => 'Eternal Beat',
                'slug' => 'eternal-beat',
                'category_id' => '3',
                'user_id' => '2',
                'img_project' => 'eternal_bat.avif',
                'description' => 'Jazmine Lawrence pernah menjadi penulis lagu muda yang bercita-cita tinggi dengan impian besar untuk membuat namanya terkenal di dunia musik. Tapi takdir memiliki rencana lain yang akan mengarah ke jalan menuju dunia malam… Untuk Keabadian. Masuki dunianya dan baca tentang asal-usul Jazmine, pertemuannya dengan Bianca Bordeaux, dan lihat sekilas pertunjukan panggungnya sebagai vampir abadi. Jika konsep ini mendapat dukungan, cerita spin-off dalam dunia Bridgeport Chronicles ini dapat berubah menjadi seri yang lebih panjang. Proyek masa depan sedang dipertimbangkan untuk menceritakan kisah asal-usul karakter lain dalam dunia cerita ini juga termasuk Lilith Bridgeport dan Viktoira Valentina.',
                'funding_goal' => 20000000,
                'duration_fund' => '40',
                'is_validated' => true
            ],
            [
                'project_name' => 'Koguchi',
                'slug' => 'koguchi',
                'category_id' => '3',
                'user_id' => '2',
                'img_project' => 'koguchi.avif',
                'description' => 'Masalah ini berfokus pada cerita dalam genre Science-Fantasy, sebuah subgenre di bawah payung fiksi spekulatif yang mengacu pada kiasan dan konsep fiksi ilmiah DAN fantasi. Berharap untuk melihat banyak kiasan fantasi klasik (mis. Prajurit dengan pedang, naga, penyihir, kastil, dan elf) dan banyak kiasan Fiksi Ilmiah standar (mis. Pesawat ruang angkasa, alien, laser, ilmuwan, robot, dan Perjalanan Waktu).',
                'funding_goal' => 30000000,
                'duration_fund' => '40',
                'is_validated' => true
            ],
            [
                'project_name' => 'Uncharted 4: A Thiefs End',
                'slug' => 'uncharted-4-a-thiefs-end',
                'category_id' => '6',
                'user_id' => '5',
                'img_project' => 'uncharted.png',
                'description' => 'Game ini merupakan series keempat dari Uncharted',
                'funding_goal' => 100000000,
                'duration_fund' => '40',
            ],
            [
                'project_name' => 'Imaginary Drugs',
                'slug' => 'imaginary-drugs',
                'category_id' => '3',
                'user_id' => '2',
                'img_project' => 'imaginary_drugs.jpeg',
                'description' => 'Seorang pembunuh selebritas yang abadi. Cinta terkutuk di luar angkasa. Pengorbanan ritual yang menggemaskan tapi bengkok. Komik Anda menunggu!',
                'funding_goal' => 20000000,
                'duration_fund' => '40',
            ],
            [
                'project_name' => 'Music Pop',
                'slug' => 'music-pop',
                'category_id' => '5',
                'user_id' => '4',
                'img_project' => 'music2.jpg',
                'description' => 'Musik ini merupakan musik pop',
                'funding_goal' => 10000000,
                'duration_fund' => '25',
            ],
            [
                'project_name' => 'Walking Dead',
                'slug' => 'walking-dead',
                'category_id' => '6',
                'user_id' => '3',
                'img_project' => 'walkingDead.jpg',
                'description' => 'Game ini bernama Walking Dead',
                'funding_goal' => 50000000,
                'duration_fund' => '40',
            ],
            [
                'project_name' => 'Karya Kedua',
                'slug' => 'karya-kedua',
                'category_id' => '1',
                'user_id' => '3',
                'img_project' => 'karya2.jpg',
                'description' => 'Karya ini merupakan karya mistik',
                'funding_goal' => 5000000,
                'duration_fund' => '18',
            ],
            
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}