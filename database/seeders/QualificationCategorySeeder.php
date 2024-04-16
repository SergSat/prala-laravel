<?php

namespace Database\Seeders;

use App\Models\QualificationCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualificationCategorySeeder extends Seeder
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
            $category = QualificationCategory::factory()->create([
                'name' => $categoryName,
                'parent_id' => null,
            ]);

            foreach ($subcategoriesNames as $subCategoryName) {
                QualificationCategory::factory()->create([
                    'name' => $subCategoryName,
                    'parent_id' => $category->id,
                ]);
            }
        }

    }
}
