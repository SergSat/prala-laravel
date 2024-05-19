<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'material_category_id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function category()
    {
        return $this->belongsTo(MaterialCategory::class, 'material_category_id');
    }

    /**
     * Get the category breadcrumbs path.
     *
     * @return string
     */
    public function getCategoryPathNameAttribute() {
        $names = [];
        $category = $this->category;

        while ($category) {
            array_unshift($names, $category->name);
            $category = $category->parent;
        }

        return implode(' > ', $names);
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
