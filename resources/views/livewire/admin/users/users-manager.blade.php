<div class="max-w-4xl mx-auto py-6">
    <div class="mb-4 border border-gray-700 dark:border-gray-200 rounded-lg p-4">
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full px-3 mb-4">
                <h3>
                    @if ($selectedUserId) Update User @else Add User @endif
                </h3>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <label for="userName" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                <input type="text" id="userName" wire:model.defer="userName" placeholder="Name" class="block w-full px-4 py-2 border rounded">
                @error('userName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <label for="userEmail" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                <input type="email" id="userEmail" wire:model.defer="userEmail" placeholder="Email" class="block w-full px-4 py-2 border rounded">
                @error('userEmail') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="w-full md:w-1/3 px-3">
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password</label>
                <input type="password" id="password" wire:model.defer="password" placeholder="Password" class="block w-full px-4 py-2 border rounded">
                @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Roles</label>
            <div class="flex flex-wrap -mx-2">
                @foreach ($roles as $role)
                    <label class="flex items-center px-2 py-2">
                        <input type="checkbox" value="{{ $role->id }}" wire:model.defer="selectedRoles" class="form-checkbox">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-200">{{ $role->name }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        @if ($selectedUserId)
            <button wire:click="update" class="px-3 py-1 bg-blue-500 text-white rounded text-sm">Update User</button>
        @else
            <button wire:click="create" class="px-3 py-1 bg-green-500 text-white rounded text-sm">Add User</button>
        @endif
    </div>

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

    @livewire('confirmation-modal')
</div>
