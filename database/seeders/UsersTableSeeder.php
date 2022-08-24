<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'gerente',
            'email' => 'teste@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'italo',
            'email' => 'italocm14@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'calvo',
            'email' => 'calvoAos20@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'admin2',
            'email' => 'admin232fda3@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'admin3',
            'email' => 'admin33@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'admin4',
            'email' => 'admin1111@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'admin007',
            'email' => 'tome@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
