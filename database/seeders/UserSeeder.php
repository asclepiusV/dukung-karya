<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '1234',
                'is_admin' => 1,
                'fullname' => 'Admin Ganteng'
            ],
            [
                'username' => 'ebel',
                'email' => 'ebel@gmail.com',
                'password' => '1234',
                'fullname' => 'Muhammad Khaliq T. A.'
            ],
            [
                'username' => 'obyy',
                'email' => 'obyy@gmail.com',
                'password' => '1234',
                'fullname' => 'Muhammad Qalby'
            ],
            [
                'username' => 'ravi',
                'email' => 'ravi@gmail.com',
                'password' => '1234',
                'fullname' => 'Muhammad Ravi Himawan'
            ],
            [
                'username' => 'tono',
                'email' => 'tono@gmail.com',
                'password' => '1234',
                'fullname' => 'Tono not'
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }

    }
}