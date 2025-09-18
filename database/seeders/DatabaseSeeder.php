<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'id' => 1,
            'name' => 'Liar',
            'username' => 'admin123',
            'password' => bcrypt(1234),
            'role' => 'admin'
        ]);
         User::create([
            'id' => 1,
            'name' => 'KAus',
            'username' => 'admin2',
            'password' => bcrypt(1234),
            'role' => 'admin'
        ]);
    }
}
