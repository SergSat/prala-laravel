<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminTableOld extends Component
{
    public $allItems;
    public $items;
    public $columns;
    public $currentPage = 1;
    public $perPage = 10;
    public $totalItems;
    public $totalPages;
    public $wrappers;
    public $model;

    public function mount($model, $items, $columns = [], $wrappers = [])
    {
        $this->allItems = $items;
        $this->columns = $columns;
        $this->wrappers = $wrappers;
        $this->totalItems = count($items);
        $this->totalPages = ceil($this->totalItems / $this->perPage);
        $this->model = $model;
//        $this->loadResources();
    }

    public function loadResources()
    {
        $this->items = $this->allItems->forPage($this->currentPage, $this->perPage);
    }

    public function goToPage($page)
    {
        $this->currentPage = $page;
//        $this->loadResources();
    }

    public function paginationViewData()
    {
        $start = max($this->currentPage - 2, 1);
        $end = min(max($this->currentPage + 2, 5), $this->totalPages);

        return [
            'start' => $start,
            'end' => $end,
        ];
    }

    public function render()
    {
        $this->loadResources();
        return view('livewire.admin.admin-table', [
            'items' => $this->items,
            'totalItems' => $this->totalItems,
            'totalPages' => $this->totalPages,
            'currentPage' => $this->currentPage,
            'perPage' => $this->perPage,
        ]);
    }
}
