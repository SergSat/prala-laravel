@extends('layouts.app2')

@section('content')
<article class="grid w-full grid-flow-row grid-cols-1 gap-5 lg:pt-24">

    @include('parts.mobile_head')

    <!-- Staff Employee -->
    <section class="flex flex-col items-center w-full mx-auto md:items-start">
        <h1 class="sr-only">Cторінка співробітника / підлеглого</h1>

        {{-- Link to Staff by Profession Page --}}
        <div class="flex items-center self-start gap-2">
            <a href="{{ route('staff-profession') }}" class="inline-flex items-center group">
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 group-hover:opacity-60">
                    <path
                        d="M6.82525 9.33816C7.00203 9.5503 7.31731 9.57896 7.52945 9.40218C7.74159 9.22539 7.77025 8.91011 7.59347 8.69797L6.82525 9.33816ZM4.99963 6.3664L4.61552 6.0463C4.461 6.23173 4.461 6.50107 4.61552 6.68649L4.99963 6.3664ZM7.59347 4.03482C7.77025 3.82268 7.74159 3.5074 7.52945 3.33062C7.31731 3.15384 7.00203 3.1825 6.82525 3.39464L7.59347 4.03482ZM7.59347 8.69797L5.38374 6.0463L4.61552 6.68649L6.82525 9.33816L7.59347 8.69797ZM5.38374 6.68649L7.59347 4.03482L6.82525 3.39464L4.61552 6.0463L5.38374 6.68649ZM6.5 1C9.53757 1 12 3.46243 12 6.5H13C13 2.91015 10.0898 -1.78814e-07 6.5 0V1ZM12 6.5C12 9.53757 9.53757 12 6.5 12V13C10.0899 13 13 10.0898 13 6.5H12ZM6.5 12C3.46243 12 1 9.53757 1 6.5H0C1.49012e-07 10.0899 2.91015 13 6.5 13V12ZM1 6.5C1 3.46243 3.46243 1 6.5 1V0C2.91015 1.49012e-07 -1.78814e-07 2.91015 0 6.5H1Z"
                        fill="black" />
                </svg>
                <span class="ml-2 text-lg group-hover:opacity-60">Всі співробітники</span>
            </a>
            <div class="h-6 border-l border-black"></div>
            <h3 class="text-xl text-pr-blue">Співробітник / Підлеглий</h3>
        </div>
        {{-- Link to Staff by Profession Page --}}

        {{-- Staff Employee Profile --}}
        <div class="p-5 bg-white w-max mt-7 lg:p-8 lg:mt-5 rounded-xl drop-shadow-lg">
            @include('parts.staff-profession')
        </div>
        {{-- Staff Employee Profile --}}

        <!-- Tasks -->
        <section class="flex flex-col lg:mx-0">
            <div class="flex items-center justify-between pt-5 text-pr-blue">
                <h3 class="pl-5 text-xl lg:text-2xl">Завдання</h3>
                <a href="#" class="inline-flex items-center group hover:text-pr-blueviolet">
                    Додати завдання
                    <div
                        class="relative w-5 h-5 sm:w-6 sm:h-6 border ml-2 border-pr-blue group-hover:border-pr-blueviolet rounded flex items-center before:absolute  before:block before:h-3 before:w-0.5 before:shrink-0 before:rounded-md before:bg-pr-blue before:content-[''] before:left-1/2 before:transform before:-translate-x-1/2 group-hover:before:bg-pr-blueviolet after:absolute after:block after:h-0.5 after:w-3 after:shrink-0 after:rounded-md after:bg-pr-blue after:content-[''] after:left-1/2 after:transform after:-translate-x-1/2 group-hover:after:bg-pr-blueviolet">
                        <div class="">
                        </div>
                    </div>
                </a>
            </div>

            @include('parts.task-item-success')

            @include('parts.task-item')

            @include('parts.task-item-success')

            @include('parts.task-item')

            @include('parts.task-item-success')

            @include('parts.task-item')
        </section>
        <!-- Tasks -->

        <!-- Training -->
        <section class="block">
            <div
                class="flex flex-col max-w-xl px-10 pb-10 mx-auto text-center bg-white mt-7 min-w-16 rounded-xl drop-shadow-lg lg:mx-0 lg:mt-0">
                <h3 class="pt-5 text-xl text-pr-blue lg:text-2xl">Навчання</h3>

                <div class="grid grid-rows-4">
                    @include('parts.trainig-profession')

                    @include('parts.trainig-profession')

                    @include('parts.trainig-profession')

                    @include('parts.trainig-profession')
                </div>
            </div>
        </section>
        <!-- Training -->

    </section>
    <!-- Staff Employee -->

</article>
@endsection