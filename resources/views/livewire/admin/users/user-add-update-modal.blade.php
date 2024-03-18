<x-admin.dialog-modal wire:model.live="show">
    <x-slot name="title">
        {{ __('admin.' . ($userId ? 'edit_user' : 'add_user') ) }}
    </x-slot>

    <x-slot name="content">

        <!-- Name -->
        <div class="mb-4">
            <x-admin.label for="userName" value="{!! __('admin.name') !!}" />
            <x-admin.input-text wire:model.defer="userName" type="text" class="w-full" placeholder="{{ __('admin.name') }}" />
            <x-admin.input-error for="userName" />
        </div>

        <!-- Email -->
        <div class="mb-4">
            <x-admin.label for="userEmail" value="{!! __('admin.email') !!}" />
            <x-admin.input-text wire:model.defer="userEmail" type="email" class="w-full {{ $userId ? 'opacity-50' : '' }}" placeholder="{{ __('admin.email') }}" :disabled="(bool) $userId" />
            <x-admin.input-error for="userEmail" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-admin.label for="password" value="{!! __('admin.password') !!}" />
            <x-admin.input-text wire:model.defer="password" type="password" class="w-full" placeholder="{{ __('admin.password') }}" />
            <x-admin.input-error for="password" />
        </div>

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

    </x-slot>

    <x-slot name="footer">
        <x-admin.button :color="'danger'" wire:click="$toggle('show')" wire:loading.attr="disabled" class="mr-2">{{ __('admin.cancel') }}</x-admin.button>

        @if ($userId)
            <x-admin.button :color="'info'" type="submit" wire:click="updateUser({{$userId}})">{{ __('admin.save') }}</x-admin.button>
        @else
            <x-admin.button :color="'info'" type="submit" wire:click="saveUser">{{ __('admin.save') }}</x-admin.button>
        @endif
    </x-slot>

</x-admin.dialog-modal>