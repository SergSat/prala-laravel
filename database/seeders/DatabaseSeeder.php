<?php

namespace Database\Seeders;

use App\Models\QualificationCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolePermissionSeeder::class,
            UserSeeder::class,
            TaskSeeder::class,
            NewsSeeder::class,
            PollSeeder::class,
            QualificationCategorySeeder::class,
            QualificationSeeder::class,
            ProfessionSeeder::class,
            MaterialCategorySeeder::class,
            MaterialSeeder::class,
        ]);
    }
}
