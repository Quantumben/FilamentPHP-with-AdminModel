<?php

namespace Database\Seeders;

use App\Models\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // For hashing the password

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Define admin data
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), // Hash the password
        ];

        // Ensure admin user is created or updated
        Admin::updateOrCreate(
            ['email' => $admin['email']], // Matching criteria
            $admin // Data to create or update
        );
    }
}
