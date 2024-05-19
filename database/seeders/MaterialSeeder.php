<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\MaterialCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Пример данных для квалификаций
        $materialsData = [
            'Грузчик' => [
                ['title' => 'Базовый грузчик', 'content' => 'Основные навыки работы грузчика.'],
                ['title' => 'Продвинутый грузчик', 'content' => 'Продвинутые техники и безопасность.'],
            ],
            'Уборщица' => [
                ['title' => 'Уборщица начального уровня', 'content' => 'Основы уборки помещений.'],
                ['title' => 'Мастер уборки', 'content' => 'Специализированные методы уборки.'],
            ],
            'Электрик' => [
                ['title' => 'Электрик-новичок', 'content' => 'Основы электромонтажа и безопасности.'],
                ['title' => 'Опытный электрик', 'content' => 'Расширенные знания и умения.'],
            ],
        ];

        foreach ($materialsData as $categoryName => $materials) {
            $category = MaterialCategory::where('name', $categoryName)->first();

            if (!$category) {
                continue;
            }

            foreach ($materials as $materialData) {
                Material::create([
                    'title' => $materialData['title'],
                    'content' => '<p>' . implode('</p><p>', fake()->paragraphs(3)) . '</p>',
                    'material_category_id' => $category->id,
                ]);
            }

            $subcategories = MaterialCategory::where('parent_id', $category->id)->get();
            foreach ($subcategories as $subcategory) {
                foreach ($materials as $materialData) {
                    Material::create([
                        'title' => $materialData['title'],
                        'content' => '<p>' . implode('</p><p>', fake()->paragraphs(3)) . '</p>',
                        'material_category_id' => $subcategory->id,
                    ]);
                }
            }
        }
    }
}
