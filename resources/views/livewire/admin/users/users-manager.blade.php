<div class="max-w-4xl mx-auto py-6">

    <button wire:click="create" class="px-4 py-2 bg-green-500 text-white rounded-lg">Добавить пользователя</button>

    <div class="divide-y divide-gray-200">
        @foreach ($users as $user)
            <div class="flex items-center justify-between py-2">
                <div>{{ $user->name }} - {{ $user->email }}</div>
                <div>
                    <button wire:click="edit({{ $user->id }})" class="px-3 py-1 bg-yellow-500 text-white rounded text-sm mr-2">Edit</button>
                    <button wire:click="delete({{ $user->id }})" class="px-3 py-1 bg-red-500 text-white rounded text-sm">Delete</button>
                </div>
            </div>
        @endforeach
    </div>

    @livewire('user.user-add-update-modal')

</div>
