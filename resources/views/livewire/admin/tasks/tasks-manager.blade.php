<div>

    <x-slot name="header">
        <h2 class="flex gap-2 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" viewBox="0 0 24 24"
                 id="clipboard-notes">
                <path fill="#94A3B8"
                      d="M13,14H9a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2ZM17,4H15.82A3,3,0,0,0,13,2H11A3,3,0,0,0,8.18,4H7A3,3,0,0,0,4,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V7A3,3,0,0,0,17,4ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm8,14a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V7A1,1,0,0,1,7,6H8V7A1,1,0,0,0,9,8h6a1,1,0,0,0,1-1V6h1a1,1,0,0,1,1,1Zm-3-9H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z">
                </path>
            </svg>
            {{ __('admin.tasks') }}
        </h2>
    </x-slot>

    @include('parts.admin.admin-table')

    <livewire:admin.task.task-add-update-modal />

</div>