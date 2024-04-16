<x-admin.dialog-modal wire:model.live="show">
    <x-slot name="title">
        {{ __('admin.' . ($id ? 'edit_task' : 'add_task') ) }}
    </x-slot>

    <x-slot name="content">

        <!-- Name -->
        <div class="mb-4">
            <x-admin.label for="name" value="{!! __('admin.name') !!}" />
            <x-admin.input-text wire:model="name" type="text" class="w-full" placeholder="{{ __('admin.name') }}" />
            <x-admin.input-error for="name" />
        </div>

        <!-- User -->
        <div class="mb-4">
            <x-admin.label for="userId" value="{!! __('admin.users') !!}" />
            <div>
                <x-admin.input-text type="text" class="w-full" placeholder="{{__('admin.search')}}" wire:model.live="search" />
                <input type="hidden" wire:model="userId" />
                <div class="mt-1 relative">
                    <div class="absolute z-10 w-full bg-white {{ count($selectedUsers) > 0 ? 'border border-gray-200' : '' }} rounded-md overflow-auto" style="max-height: 90px;">
                        @foreach($selectedUsers as $user)
                            <div wire:click="selectUser('{{ $user->id }}', '{{ $user->name }} - ({{ $user->email }})')" class="p-2 text-sm text-gray-700 border-b border-gray-100 hover:bg-gray-200 cursor-pointer">
                                {{ $user->name }} - ({{ $user->email }})
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <x-admin.input-error for="userId" />
        </div>

        <!-- Status -->
        <div class="mb-4">
            <x-admin.label for="completed" value="{!! __('admin.completed') !!}" />
            <x-admin.toggle wire:model="completed" />
            <x-admin.input-error for="completed" />
        </div>

    </x-slot>

    <x-slot name="footer">
        <x-admin.button :color="'danger'" wire:click="$toggle('show')" wire:loading.attr="disabled" class="mr-2">{{ __('admin.cancel') }}</x-admin.button>

        @if ($id)
            <x-admin.button :color="'info'" type="submit" wire:click="updateTask({{$id}})">{{ __('admin.save') }}</x-admin.button>
        @else
            <x-admin.button :color="'info'" type="submit" wire:click="save">{{ __('admin.save') }}</x-admin.button>
        @endif
    </x-slot>

</x-admin.dialog-modal>