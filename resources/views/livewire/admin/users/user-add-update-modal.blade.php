<div>
    @if($showModal)
        <!-- Background overlay and modal container -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">

                <!-- Modal content -->
                <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">

                                <!-- Modal header -->
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                    @if ($userId) Update User @else Add User @endif
                                </h3>

                                <!-- Form fields -->
                                <div class="mt-2">
                                    <!-- Name -->
                                    <div class="mb-4">
                                        <label for="userName" class="block text-sm font-medium text-gray-700">Name</label>
                                        <input type="text" id="userName" wire:model.defer="userName" placeholder="Name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @error('userName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="userEmail" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="email" id="userEmail" wire:model.defer="userEmail" placeholder="Email" {{$userId ? 'disabled' : ''}} class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @error('userEmail') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-4">
                                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                        <input type="password" id="password" wire:model.defer="password" placeholder="Password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>

                                    <!-- Roles -->
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700">Roles</label>
                                        <div class="flex flex-wrap">
                                            @foreach ($roles as $role)
                                                <label class="flex items-center mr-2">
                                                    <input type="checkbox" value="{{ $role->id }}" wire:model.defer="selectedRoles" class="form-checkbox">
                                                    <span class="ml-2 text-sm text-gray-600">{{ $role->name }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                        @error('selectedRoles') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        @if ($userId)
                            <button wire:click="updateUser({{$userId}})" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 sm:ml-3 sm:w-auto sm:text-sm">Update User</button>
                        @else
                            <button wire:click="saveUser" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-500 text-base font-medium text-white hover:bg-green-700 sm:ml-3 sm:w-auto sm:text-sm">Add User</button>
                        @endif
                        <button wire:click="$set('showModal', false)" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
