<x-admin.dialog-modal wire:model.live="show">
    <x-slot name="title">
        {{ __('admin.' . ($id ? 'edit_task' : 'add_task') ) }}
    </x-slot>

    <x-slot name="content">

        <!-- Name -->
        <div class="mb-4">
            <x-admin.label for="userName" value="{!! __('admin.name') !!}" />
            <x-admin.input-text wire:model.defer="name" type="text" class="w-full" placeholder="{{ __('admin.name') }}" />
            <x-admin.input-error for="name" />
        </div>

        <!-- User -->
        <div class="mb-4">
            <x-admin.label for="userId" value="{!! __('admin.users') !!}" />
            <div class="flex flex-wrap">
                @foreach ($users as $user)
                    <label class="flex items-center mr-2">
                        <x-admin.input type="radio" value="{{ $user->id }}" wire:model.defer="userId" class="form-checkbox" />
                        <span class="ml-2 text-sm text-gray-600">{{ $user->name }}</span>
                    </label>
                @endforeach
            </div>
            <x-admin.input-error for="userId" />
        </div>

    </x-slot>

    <x-slot name="footer">
        <x-admin.button :color="'danger'" wire:click="$toggle('show')" wire:loading.attr="disabled" class="mr-2">{{ __('admin.cancel') }}</x-admin.button>

        @if ($id)
            <x-admin.button :color="'info'" type="submit" wire:click="updateTask({{$id}})">{{ __('admin.save') }}</x-admin.button>
        @else
            <x-admin.button :color="'info'" type="submit" wire:click="saveTask">{{ __('admin.save') }}</x-admin.button>
        @endif
    </x-slot>

</x-admin.dialog-modal>