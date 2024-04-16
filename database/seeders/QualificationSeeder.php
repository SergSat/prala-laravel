<?php

namespace Database\Seeders;

use App\Models\Qualification;
use App\Models\QualificationCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Пример данных для квалификаций
        $qualificationsData = [
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

        foreach ($qualificationsData as $categoryName => $qualifications) {
            $category = QualificationCategory::where('name', $categoryName)->first();

            if (!$category) {
                continue;
            }

            foreach ($qualifications as $qualificationData) {
                Qualification::create([
                    'title' => $qualificationData['title'],
                    'content' => '<p>' . implode('</p><p>', fake()->paragraphs(3)) . '</p>',
                    'qualification_category_id' => $category->id,
                ]);
            }

            $subcategories = QualificationCategory::where('parent_id', $category->id)->get();
            foreach ($subcategories as $subcategory) {
                foreach ($qualifications as $qualificationData) {
                    Qualification::create([
                        'title' => $qualificationData['title'],
                        'content' => '<p>' . implode('</p><p>', fake()->paragraphs(3)) . '</p>',
                        'qualification_category_id' => $subcategory->id,
                    ]);
                }
            }
        }
    }
}
