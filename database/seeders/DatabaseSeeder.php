<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => '1',
            'hp' => '0812345678901',
            'password' => bcrypt('admin123'),
        ]);
        User::create([
            'name' => 'Sopian Aji',
            'email' => 'sopian4ji@gmail.com',
            'role' => '0',
            'status' => '1',
            'hp' => '081245667891',
            'password' => bcrypt('123'),
        ]);
    }
}
