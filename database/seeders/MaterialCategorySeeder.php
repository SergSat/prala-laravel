<?php

namespace Database\Seeders;

use App\Models\MaterialCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesData = [
            'Грузчик' => ['Погрузчик', 'Разгрузчик', 'Кладовщик'],
            'Уборщица' => ['Уборка офисов', 'Уборка квартир', 'Уборка территории'],
            'Электрик' => ['Электромонтажник', 'Электрик-ремонтник', 'Электрик-сборщик'],
        ];

        foreach ($categoriesData as $categoryName => $subcategoriesNames) {
            $category = MaterialCategory::factory()->create([
                'name' => $categoryName,
                'parent_id' => null,
            ]);

            foreach ($subcategoriesNames as $subCategoryName) {
                MaterialCategory::factory()->create([
                    'name' => $subCategoryName,
                    'parent_id' => $category->id,
                ]);
            }
        }
    }
}
