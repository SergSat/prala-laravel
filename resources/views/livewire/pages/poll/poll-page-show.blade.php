<div>

    <x-slot name="header">
        <h1 class="text-3xl mb-4 mr-auto text-pr-blue">{{ $poll->finished ? __('finished_polls') : __('available_polls') }}</h1>
    </x-slot>

    <x-breadcrumbs :$breadcrumbs />

    <div class="flex flex-col items-center w-full mx-auto">
        {{-- Link to Votes Page --}}
        <div class="flex items-center self-start gap-2">
            <a href="{{ route('polls.index') }}" class="flex items-center hover:text-pr-blue text-nowrap">
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"
                     class="w-4 h-4 mr-2 fill-current">
                    <path d="M6.82525 9.33816C7.00203 9.5503 7.31731 9.57896 7.52945 9.40218C7.74159 9.22539 7.77025 8.91011 7.59347 8.69797L6.82525 9.33816ZM4.99963 6.3664L4.61552 6.0463C4.461 6.23173 4.461 6.50107 4.61552 6.68649L4.99963 6.3664ZM7.59347 4.03482C7.77025 3.82268 7.74159 3.5074 7.52945 3.33062C7.31731 3.15384 7.00203 3.1825 6.82525 3.39464L7.59347 4.03482ZM7.59347 8.69797L5.38374 6.0463L4.61552 6.68649L6.82525 9.33816L7.59347 8.69797ZM5.38374 6.68649L7.59347 4.03482L6.82525 3.39464L4.61552 6.0463L5.38374 6.68649ZM6.5 1C9.53757 1 12 3.46243 12 6.5H13C13 2.91015 10.0898 -1.78814e-07 6.5 0V1ZM12 6.5C12 9.53757 9.53757 12 6.5 12V13C10.0899 13 13 10.0898 13 6.5H12ZM6.5 12C3.46243 12 1 9.53757 1 6.5H0C1.49012e-07 10.0899 2.91015 13 6.5 13V12ZM1 6.5C1 3.46243 3.46243 1 6.5 1V0C2.91015 1.49012e-07 -1.78814e-07 2.91015 0 6.5H1Z" />
                </svg>
                {{ __('all_polls') }}
            </a>
            <span class="px-2"> | </span>
            <h3 class="text-xl text-pr-blue">{{ $poll->title }}</h3>
        </div>
        {{-- Link to Votes Page --}}

        {{-- Avaliable Votes List --}}
        <div class="flex flex-col max-w-screen-md gap-5 p-5 mt-7 lg:p-8 lg:pt-0 lg:mt-5 rounded-xl">
            <livewire:pages.poll.single-poll :$poll />
        </div>
        {{-- Avaliable Votes List --}}

        @include('parts.links-bottom-block')
    </div>

</div>