<div>
    <x-slot name="header">
        <h1 class="text-3xl mb-4 mr-auto text-pr-blue">{{ __('employees_list_with_contacts') }}</h1>
    </x-slot>

    <x-breadcrumbs :$breadcrumbs />

    <div class="max-w-screen-xl p-5 bg-white mt-7 lg:p-8 lg:mt-5 rounded-xl drop-shadow-lg">
        <div class="grid grid-cols-1 gap-5 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach($professions as $profession)
                <a href="{{ route('professions.show', $profession->id) }}"
                   class="rounded-lg bg-pr-gray-sky flex flex-col items-center gap-1 p-5 text-center text-white">
                    <span class="inline-block w-full text-4xl font-normal md:text-4xl xl:text-5xl">
                        {{ $profession->name }}
                    </span>
                    <span class="font-light md:text-xl lg:text-2xl">
                        {{ $profession->users->count() }} {{ __('count_employees') }}
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</div>
