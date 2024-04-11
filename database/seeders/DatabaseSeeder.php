<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\User::factory(10)->create();

        Role::factory()->create([
            'role' => 'Admin'
        ]);

        Role::factory()->create([
            'role' => 'Customer'
        ]);

        User::factory()->create([
            'role_id' => 1,
            'first_name' => 'Administrator',
            'last_name' => 'Administrator',
            'contact_no' => '0912345',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);
    }
}
