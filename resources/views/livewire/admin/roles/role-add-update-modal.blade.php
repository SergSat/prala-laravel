<x-admin.dialog-modal wire:model.live="show">
    <x-slot name="title">
        {{ __('admin.' . ($id ? 'edit_role' : 'add_role') ) }}
    </x-slot>

    <x-slot name="content">

        <!-- Name -->
        <div class="mb-4">
            <x-admin.label for="name" value="{!! __('admin.name') !!}" />
            <x-admin.input-text wire:model.defer="name" type="text" class="w-full" placeholder="{{ __('admin.name') }}" />
            <x-admin.input-error for="name" />
        </div>

        <!-- Roles -->
        <div class="mb-4">
            <x-admin.label for="selectedPermissions" value="{!! __('admin.permissions') !!}" />
            <div class="flex flex-wrap">
                @foreach ($permissions as $permission)
                    <label class="flex items-center mr-2">
                        <x-admin.input type="checkbox" value="{{ $permission->id }}" wire:model.defer="selectedPermissions" class="form-checkbox" />
                        <span class="ml-2 text-sm text-gray-600">{{ $permission->name }}</span>
                    </label>
                @endforeach
            </div>
            <x-admin.input-error for="selectedRoles" />
        </div>

    </x-slot>

    <x-slot name="footer">
        <x-admin.button :color="'danger'" wire:click="$toggle('show')" wire:loading.attr="disabled" class="mr-2">{{ __('admin.cancel') }}</x-admin.button>

        @if ($id)
            <x-admin.button :color="'info'" type="submit" wire:click="updateRole({{$id}})">{{ __('admin.save') }}</x-admin.button>
        @else
            <x-admin.button :color="'info'" type="submit" wire:click="saveRole">{{ __('admin.save') }}</x-admin.button>
        @endif
    </x-slot>

</x-admin.dialog-modal>