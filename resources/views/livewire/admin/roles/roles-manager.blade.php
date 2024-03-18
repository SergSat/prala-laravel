<div class="w-full py-6">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('admin.roles') }}
        </h2>
    </x-slot>

    <livewire:admin-table key="{{ now() }}" :items="$items" :columns="$columns" />

    <livewire:role.role-add-update-modal />

</div>