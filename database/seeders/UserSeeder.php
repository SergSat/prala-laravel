<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        $admin = User::factory()
            ->create([
                'name' => 'Admin',
                'email' => 'artdecomplus@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Prala2024Prala'), // test password (only for local test)
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => Str::random(10),
                'profile_photo_path' => null,
                'current_team_id' => null,
            ]);
        $admin->assignRole('admin');

        // Create 20 random users
        User::factory()
            ->count(20)
            ->create();
    }
}
