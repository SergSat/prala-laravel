<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'image_path'
    ];

    use HasFactory;

    protected $table = 'news';

    /**
     * Get the excerpt from the content.
     *
     * @param int $limit
     * @return string
     */
    public function getExcerpt($limit = 100)
    {
        $content = strip_tags($this->content);
        return strlen($content) > $limit ? Str::limit($content, $limit) : $content;
    }
}
