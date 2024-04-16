<x-admin.dialog-modal wire:model.live="show">
    <x-slot name="title">
        {{ __('admin.' . ($userId ? 'edit_user' : 'add_user') ) }}
    </x-slot>

    <x-slot name="content">
        <div class="flex gap-4 mb-4">
            <!-- Profile Photo -->
            <div class="flex-none">
                <label for="profilePhoto" class="cursor-pointer">
                    @if ($profilePhoto)
                        <img src="{{ $profilePhoto->temporaryUrl() }}" class="rounded-full h-20 w-20 object-cover">
                    @elseif($currentProfilePhoto)
                        <img src="{{ asset('storage/'.$currentProfilePhoto) }}" class="rounded-full h-20 w-20 object-cover">
                    @else
                        <div class="rounded-full h-20 w-20 bg-gray-200 flex justify-center items-center">
                            <span class="text-gray-500 text-xs text-center">{{ __('admin.add_photo') }}</span>
                        </div>
                    @endif
                </label>
                <input type="file" id="profilePhoto" wire:model="profilePhoto" class="hidden">
                @error('profilePhoto') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Name -->
            <div class="flex-1">
                <x-admin.label for="userName" value="{!! __('admin.name') !!}" />
                <x-admin.input-text wire:model.defer="userName" type="text" class="w-full" placeholder="{{ __('admin.name') }}" />
                <x-admin.input-error for="userName" />
            </div>
        </div>


        <!-- Email -->
        <div class="mb-4">
            <x-admin.label for="userEmail" value="{!! __('admin.email') !!}" />
            <x-admin.input-text wire:model.defer="userEmail" type="email" class="w-full {{ $userId ? 'opacity-50' : '' }}" placeholder="{{ __('admin.email') }}" :disabled="(bool) $userId" />
            <x-admin.input-error for="userEmail" />
        </div>

        <!-- Password -->
        @if ($userId)
            <div x-data="{ changePassword: @entangle('changePassword') }">
                <div class="mb-4">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" x-model="changePassword" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <span class="ml-2 text-sm font-medium text-gray-700">{{ __('admin.change_password') }}</span>
                    </label>
                </div>
                <div class="mb-4" x-show="changePassword">
                    <x-admin.label for="password" value="{!! __('admin.password') !!}" />
                    <x-admin.input-text wire:model.defer="password" x-bind:disabled="!changePassword" type="password" class="w-full" placeholder="{{ __('admin.password') }}" />
                    <x-admin.input-error for="password" />
                </div>
            </div>
        @else
            <div class="mb-4">
                <x-admin.label for="password" value="{!! __('admin.password') !!}" />
                <x-admin.input-text wire:model.defer="password" type="password" class="w-full" placeholder="{{ __('admin.password') }}" />
                <x-admin.input-error for="password" />
            </div>
        @endif

        <!-- Roles -->
        <div class="mb-4">
            <x-admin.label for="selectedRoles" value="{!! __('admin.role') !!}" />
            <div class="flex flex-wrap">
                @foreach ($roles as $role)
                    <label class="flex items-center mr-2">
                        <x-admin.input type="checkbox" value="{{ $role->id }}" wire:model.defer="selectedRoles" class="form-checkbox" />
                        <span class="ml-2 text-sm text-gray-600">{{ $role->name }}</span>
                    </label>
                @endforeach
            </div>
            <x-admin.input-error for="selectedRoles" />
        </div>

        <!-- Professions -->
        <div class="mb-4">
            <x-admin.label for="selectedRoles" value="{!! __('admin.professions') !!}" />
            <div class="flex flex-wrap">
                @foreach ($professions as $profession)
                    <label class="flex items-center mr-2">
                        <x-admin.input type="checkbox" value="{{ $profession->id }}" wire:model.defer="selectedProfessions" class="form-checkbox" />
                        <span class="ml-2 text-sm text-gray-600">{{ $profession->name }}</span>
                    </label>
                @endforeach
            </div>
            <x-admin.input-error for="selectedProfessions" />
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-admin.button :color="'danger'" wire:click="$toggle('show')" wire:loading.attr="disabled" class="mr-2">{{ __('admin.cancel') }}</x-admin.button>

        @if ($userId)
            <x-admin.button :color="'info'" type="submit" wire:click="updateUser({{$userId}})">{{ __('admin.save') }}</x-admin.button>
        @else
            <x-admin.button :color="'info'" type="submit" wire:click="save">{{ __('admin.save') }}</x-admin.button>
        @endif
    </x-slot>

</x-admin.dialog-modal>