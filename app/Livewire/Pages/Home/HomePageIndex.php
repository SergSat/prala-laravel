<?php

namespace App\Livewire\Pages\Home;

use App\Models\News;
use App\Models\Task;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HomePageIndex extends Component
{
    public function toggleTaskCompletion($id)
    {
        $task = Task::find($id);
        $task->completed = !$task->completed;
        $task->save();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.home.home-page-index', [
            'tasks' => Task::all()->where('user_id', auth()->id()),
            'news' => News::latest()->limit(5)->get(),
        ]);
    }
}
