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
        $user = [
            [
            'name' => 'operator',
            'email' => 'operator@example.com',
            'password' => bcrypt('123'),
            'roles' => 'operator',
            ],
            [
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123'),
            'roles' => 'admin',
            ],
            [
            'name' => 'pimpinan',
            'email' => 'pimpinan@example.com',
            'password' => bcrypt('123'),
            'roles' => 'pimpinan',
            ],
        ];

        foreach($user as $key => $var){
            User::create($var);
        }
    }
}
