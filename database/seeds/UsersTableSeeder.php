<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'     => 'admin',
            'email'    => 'admin@example.com',
            'password' => bcrypt('admin123'),
            'isAdmin'  => 1
        ]);
    }
}