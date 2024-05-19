<div>
    <x-slot name="header">
        <h1 class="text-3xl mb-4 mr-auto text-pr-blue">{{ __('employees_with_profession') }} "{{ $profession->name }}"</h1>
    </x-slot>

    <x-breadcrumbs :$breadcrumbs />

    <div class="w-full p-5 bg-white xxs:w-max md:w-full mt-7 lg:p-8 lg:mt-5 rounded-xl drop-shadow-lg">
        <div class="grid grid-cols-1 gap-5 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
            @if ($users && $users->count() > 0)
                @foreach($users as $user)
                    <div class="min-w-[210px] max-w-72 flex flex-col items-center w-full gap-3 p-5 bg-white border rounded-lg sm:gap-5 border-pr-gray-sky">
                    @can('view', auth()->user(), $user)
                        <a href="{{ route('employee.show', $user->id) }}" class="flex flex-col items-center gap-3">
                    @else
                        <div class="flex flex-col items-center gap-3">
                    @endcan
                            <picture>
                                <img src="{{ $user->profile_photo_url }}" alt="avatar" class="w-24 h-24 object-cover rounded-full">
                            </picture>
                            <div class="text-center">
                                <h3 class="text-2xl">{{ $user->name }}</h3>
                            </div>
                    @can('view', auth()->user(), $user)
                        </a>
                    @else
                        </div>
                    @endcan
                        <div class="flex flex-col items-center text-center text-pr-gray-sky max-w-full">
                            <a href="mailto:{{ $user->email }}" class="max-w-full break-words">{{ $user->email }}</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    @if ($users && $users->count() > 0)
        <div class="mt-5">
            {{ $users->links() }}
        </div>
    @endif

</div>

