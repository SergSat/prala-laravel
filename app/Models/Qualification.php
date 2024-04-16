<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Qualification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'image_path', 'qualification_category_id'
    ];

    use HasFactory;

    /**
     * Get the category for the qualification
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function qualificationCategory() {
        return $this->belongsTo(QualificationCategory::class);
    }

    /**
     * Get the category breadcrumbs path.
     *
     * @return string
     */
    public function getCategoryPathNameAttribute() {
        $names = [];
        $category = $this->qualificationCategory;

        while ($category) {
            array_unshift($names, $category->name); // Добавляем имя категории в начало массива
            $category = $category->parent; // Переходим к родительской категории
        }

        return implode(' > ', $names); // Склеиваем имена через разделитель
    }

    /**
     * Get the excerpt from the content.
     *
     * @param int $limit
     * @return string
     */
    public function getExcerpt($limit = 100)
    {
        $content = cleanAllHtml($this->content);
        return strlen($content) > $limit ? Str::limit($content, $limit) : $content;
    }

}
