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
                'password' => '1234'
            ],
            [
                'username' => 'ebel',
                'email' => 'ebel@gmail.com',
                'password' => '1234'
            ],
            [
                'username' => 'obyy',
                'email' => 'obyy@gmail.com',
                'password' => '1234'
            ],
            [
                'username' => 'ravi',
                'email' => 'ravi@gmail.com',
                'password' => '1234'
            ],
            [
                'username' => 'tono',
                'email' => 'tono@gmail.com',
                'password' => '1234'
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }

    }
}