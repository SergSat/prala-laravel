<?php

namespace App\Services;

use App\Models\MaterialCategory;

class MaterialCategoryService
{
    /**
     * Build a tree of categories with dashes indicating nesting level.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getCategoriesWithDashes()
    {
        $rootCategories = MaterialCategory::whereNull('parent_id')->get();
        $items = collect();

        foreach ($rootCategories as $category) {
            $this->addItemWithSubcategories($items, $category, 0);
        }

        return $items;
    }

    /**
     * Recursive function to add a category and its subcategories to the collection.
     *
     * @param \Illuminate\Support\Collection $items
     * @param $category
     * @param $depth
     */
    protected function addItemWithSubcategories(&$items, $category, $depth)
    {
        $prefix = str_repeat('-', $depth);
        $category->name = $prefix . ' ' . $category->name;
        $items->push($category);

        $subcategories = $category->subcategories()->get();
        foreach ($subcategories as $subcategory) {
            $this->addItemWithSubcategories($items, $subcategory, $depth + 1);
        }
    }
}
