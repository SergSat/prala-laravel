<div>
    <div>
        <input type="text" wire:model="name" placeholder="Task Name">
        <input type="checkbox" wire:model="completed"> Completed
        <select wire:model="userId">
            <option value="">Assign to User</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <button wire:click="addTask">Add Task</button>
        <a wire:navigate href="{{ route('admin.users.index') }}"  class="px-4 py-2 bg-green-500 text-white rounded-lg">Users</a>

    </div>

    <hr>

    <div>
        @foreach ($tasks as $task)
            <div>
                {{ $task->name }} - {{ $task->completed ? 'Completed' : 'Pending' }} - {{ $task->user->name }}
                <button wire:click="editTask({{ $task->id }})">Edit</button>
                <button wire:click="deleteTask({{ $task->id }})">Delete</button>
            </div>
        @endforeach
    </div>

    @if ($taskBeingEdited)
        <div>
            <input type="text" wire:model="name">
            <input type="checkbox" wire:model="completed">
            <select wire:model="userId">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <button wire:click="saveTask">Save</button>
        </div>
    @endif
</div>
