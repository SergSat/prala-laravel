<div>

    <x-slot name="header">
        <h2 class="flex gap-2 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" viewBox="0 0 24 24" >
                <path fill="#94A3B8" d="M13.2 15.0004C13 15.1004 12.8 15.1004 12.6 15.2004C12.5 15.0004 12.4 14.8004 12.3 14.7004C11.5 14.0004 10.3 13.9004 9.3 14.5004C8.5 15.0004 8 16.0004 8 17.0004C8 17.5004 8.5 18.0004 9 17.9004C9.5 17.9004 10 17.4004 10 16.9004C10 16.6004 10.1 16.4004 10.3 16.2004C10.4 16.2004 10.5 16.1004 10.6 16.1004C10.3 16.7004 10.5 17.4004 11.1 17.8004C11.3 17.9004 11.4 17.9004 11.6 17.9004C12 17.9004 12.4 17.7004 12.7 17.4004C12.8 17.3004 13 17.2004 13.2 17.1004C13.3 17.5004 13.7 17.9004 14.2 17.9004H15C15.6 17.9004 16 17.5004 16 16.9004C16 16.4004 15.6 16.0004 15.1 15.9004C15 15.7004 15 15.6004 14.8 15.4004C14.5 15.1004 13.8 14.9004 13.2 15.0004ZM20 8.90039C20 8.80039 20 8.70039 19.9 8.60039V8.50039C19.9 8.40039 19.8 8.30039 19.7 8.20039L13.7 2.20039C13.6 2.10039 13.5 2.10039 13.4 2.00039H13.3C13.2 2.00039 13.1 2.00039 13 1.90039H7C5.3 2.00039 4 3.30039 4 5.00039V19.0004C4 20.7004 5.3 22.0004 7 22.0004H17C18.7 22.0004 20 20.7004 20 19.0004V8.90039C20 9.00039 20 9.00039 20 8.90039ZM14 5.40039L16.6 8.00039H15C14.4 8.00039 14 7.60039 14 7.00039V5.40039ZM18 19.0004C18 19.6004 17.6 20.0004 17 20.0004H7C6.4 20.0004 6 19.6004 6 19.0004V5.00039C6 4.40039 6.4 4.00039 7 4.00039H12V7.00039C12 8.70039 13.3 10.0004 15 10.0004H18V19.0004ZM9 10.0004H10C10.6 10.0004 11 9.60039 11 9.00039C11 8.40039 10.6 8.00039 10 8.00039H9C8.4 8.00039 8 8.40039 8 9.00039C8 9.60039 8.4 10.0004 9 10.0004Z" />
            </svg>
            {{ __('admin.responsibilities_and_competencies') }}
        </h2>
    </x-slot>

    @include('parts.admin.admin-table')

    <livewire:admin.qualification.qualification-add-update-modal />

</div>