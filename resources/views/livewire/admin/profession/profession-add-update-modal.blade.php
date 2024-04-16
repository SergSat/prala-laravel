<x-admin.dialog-modal wire:model.live="show">
    <x-slot name="title">
        {{ __('admin.' . ($id ? 'edit_profession' : 'add_profession') ) }}
    </x-slot>

    <x-slot name="content">

        <!-- Name -->
        <div class="mb-4">
            <x-admin.label for="name" value="{!! __('admin.name') !!}" />
            <x-admin.input-text wire:model="name" type="text" class="w-full" placeholder="{{ __('admin.name') }}" />
            <x-admin.input-error for="name" />
        </div>

        <!-- Description -->
        <div class="mb-4">
            <x-admin.label for="description" value="{!! __('admin.description') !!}" />
            <x-admin.input-text wire:model="description" type="text" class="w-full" placeholder="{{ __('admin.description') }}" />
            <x-admin.input-error for="description" />
        </div>

    </x-slot>

    <x-slot name="footer">
        <x-admin.button :color="'danger'" wire:click="$toggle('show')" wire:loading.attr="disabled" class="mr-2">{{ __('admin.cancel') }}</x-admin.button>

        @if ($id)
            <x-admin.button :color="'info'" type="submit" wire:click="update({{$id}})">{{ __('admin.save') }}</x-admin.button>
        @else
            <x-admin.button :color="'info'" type="submit" wire:click="save">{{ __('admin.save') }}</x-admin.button>
        @endif
    </x-slot>

</x-admin.dialog-modal>