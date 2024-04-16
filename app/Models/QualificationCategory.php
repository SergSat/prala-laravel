<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualificationCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'parent_id', 'profession_id'
    ];

    use HasFactory;

    /**
     * Get the parent category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subcategories() {
        return $this->hasMany(QualificationCategory::class, 'parent_id');
    }

    /**
     * Get the qualifications for the category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function qualifications() {
        return $this->hasMany(Qualification::class);
    }

    /**
     * Get the parent category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent() {
        return $this->belongsTo(QualificationCategory::class, 'parent_id');
    }

    /**
     * Get the profession for the category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profession() {
        return $this->belongsTo(Profession::class);
    }

    /**
     * Get the name with dashes
     *
     * @return string
     */
    public function getNameWithDashesAttribute()
    {
        $depth = substr_count($this->path, '/') - 2;

        $prefix = str_repeat('— ', $depth);

        return $prefix . ' ' . $this->name;
    }

    /**
     * Get the assigned profession
     *
     * @return string
     */
    public function getAssignedProfessionAttribute()
    {
        return $this->profession->name ?? '—';
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
