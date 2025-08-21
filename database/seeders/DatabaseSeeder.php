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

        User::factory()->create([
            'name' => 'Test User',
            'user_name' => 'kmk',
            'email' => 'khantminkyi@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => 1,
            'phone' => '1123123413432',
            'gender' => 'male',
            'birth_date' => '1999-06-28',
        ]);
    }
}
