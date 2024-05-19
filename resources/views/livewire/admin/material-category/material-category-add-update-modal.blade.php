<x-admin.dialog-modal wire:model.live="show">
    <x-slot name="title">
        {{ __('admin.' . ($id ? 'edit_material_category' : 'add_material_category') ) }}
    </x-slot>

    <x-slot name="content">

        <!-- Name -->
        <div class="mb-4">
            <x-admin.label for="name" value="{!! __('admin.title') !!}" />
            <x-admin.input-text id="name" wire:model="name" type="text" class="w-full" placeholder="{{ __('admin.title') }}" />
            <x-admin.input-error for="name" />
        </div>

        <!-- Category -->
        <div class="mb-4">
            <x-admin.label for="parentId" value="{!! __('admin.parent_category') !!}" />
            <div>
                <x-admin.input-text id="parentId" type="text" class="w-full" placeholder="{{__('admin.search')}}" wire:model.live="search" />
                <input type="hidden" wire:model="parentId" />
                <div class="mt-1 relative">
                    <div class="absolute z-10 w-full bg-white {{ count($selectedCategories) > 0 ? 'border border-gray-200' : '' }} rounded-md overflow-auto" style="max-height: 90px;">
                        @foreach($selectedCategories as $category)
                            <div wire:click="selectCategory('{{ $category->id }}', '{{ $category->name }}')" class="p-2 text-sm text-gray-700 border-b border-gray-100 hover:bg-gray-200 cursor-pointer">
                                {{ $category->name }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <x-admin.input-error for="parentId" />
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