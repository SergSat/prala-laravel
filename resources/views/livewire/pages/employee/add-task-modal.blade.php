<x-dialog-modal wire:model.live="show">

    <x-slot name="title">
        {{ __('add_task') }}
    </x-slot>

    <x-slot name="content">

        <!-- Name -->
        <div class="mb-4">
            <x-admin.label for="name" value="{!! __('title') !!}" />
            <x-admin.input-text wire:model="name" type="text" class="w-full" placeholder="{{ __('title') }}" />
            <x-admin.input-error for="name" />
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-admin.button :color="'danger'" wire:click="$toggle('show')" wire:loading.attr="disabled" class="mr-2">{{ __('admin.cancel') }}</x-admin.button>
        <x-admin.button :color="'info'" type="submit" wire:click="save()">{{ __('save') }}</x-admin.button>
    </x-slot>

</x-dialog-modal>