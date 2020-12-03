<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'first_name'=> 'Prueba',
                'last_name' => 'User',
                'email' => 'user@example.com',
                'password' => bcrypt('password'),
                'is_admin' => false
            ],
            [
                'first_name' => 'Admin',
                'last_name'=> 'User',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'is_admin' => true
            ]
        ]);
    }
}
