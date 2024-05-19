<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'parent_id', 'description'];

    /**
     * Get the parent category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent() {
        return $this->belongsTo(MaterialCategory::class, 'parent_id');
    }

    /**
     * Get the parent category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subcategories() {
        return $this->hasMany(MaterialCategory::class, 'parent_id');
    }

    /**
     * Materials that belong to the category.
     *
     * @var array<int, string>
     */
    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    /**
     * Get the name with dashes
     *
     * @return string
     */
    public function getNameWithDashesAttribute()
    {
        $depth = substr_count($this->path, '/') - 2;

        $depth = max(0, $depth);

        $prefix = str_repeat('— ', $depth);

        return $prefix . ' ' . $this->name;
    }

    /**
     * Update path for the category
     */
    public function updatePath()
    {
        if ($this->parent_id) {
            $parent = self::find($this->parent_id);
            $this->path = $parent->path . $this->formatId($this->id) . '/';
        } else {
            $this->path = '/' . $this->formatId($this->id) . '/';
        }
    }

    /**
     * Update path for children categories
     *
     * @param QualificationCategory $category
     */
    public function updateChildrenPath()
    {
        foreach ($this->subcategories as $subcategory) {
            $subcategory->updatePath();
            $subcategory->save();
            $subcategory->updateChildrenPath();
        }
    }

    /**
     * Format the id
     *
     * @param $id
     * @return string
     */
    public function formatId($id)
    {
        return str_pad($id, 3, '0', STR_PAD_LEFT);
    }
}
