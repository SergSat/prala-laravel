<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profession::factory()->createMany([
            ['name' => 'Грузчик', 'description' => 'Выполняет погрузочно-разгрузочные работы на складе'],
            ['name' => 'Швея', 'description' => 'Выполняет пошив одежды'],
            ['name' => 'Водитель', 'description' => 'Управляет автомобилем'],
        ]);

        $employees = User::role('employee')->get();

        $professionIds = Profession::pluck('id');

        foreach ($employees as $employee) {
            $randomProfessionId = $professionIds->random();

            $employee->professions()->attach($randomProfessionId);
        }
    }
}
