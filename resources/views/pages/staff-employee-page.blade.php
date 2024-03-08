@extends('layouts.app')

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
            <div class="h-full border-l border-black"></div>
            <h3 class="text-xl text-pr-blue">Співробітник / Підлеглий</h3>
        </div>
        {{-- Link to Staff by Profession Page --}}

        <div class="grid w-full grid-cols-1 gap-6 p-5 md:gap-8 xl:grid-cols-2 lg:p-8 mt-7 lg:mt-0">
            {{-- Staff Employee Profile --}}
            <div>
                <div class="flex justify-between px-5 lg:px-8">
                    <h3 class="text-xl text-pr-blue lg:text-2xl">Співробітник</h3>
                </div>
                <div class="p-5 mt-5 bg-white w-max lg:p-8 rounded-xl drop-shadow-lg">
                    @include('parts.staff-profession')
                </div>
            </div>
            {{-- Staff Employee Profile --}}

            <!-- Tasks -->
            <section class="w-full max-w-xl flex flex-col lg:mx-0 @container">
                <div class="flex items-center justify-between pt-5 lg:pt-0 text-pr-blue">
                    <h3 class="pl-5 text-xl lg:text-2xl">Завдання</h3>
                    <a href="#" class="inline-flex items-center group hover:text-pr-blueviolet">
                        Додати завдання
                        <div
                            class="relative w-5 h-5 sm:w-6 sm:h-6 border ml-2 border-pr-blue group-hover:border-pr-blueviolet rounded flex items-center before:absolute  before:block before:h-3 before:w-0.5 before:shrink-0 before:rounded-md before:bg-pr-blue before:content-[''] before:left-1/2 before:transform before:-translate-x-1/2 group-hover:before:bg-pr-blueviolet after:absolute after:block after:h-0.5 after:w-3 after:shrink-0 after:rounded-md after:bg-pr-blue after:content-[''] after:left-1/2 after:transform after:-translate-x-1/2 group-hover:after:bg-pr-blueviolet">
                        </div>
                    </a>
                </div>

                @include('parts.employee-task-success')

                @include('parts.employee-task')

                @include('parts.employee-task-success')

                @include('parts.employee-task')

                @include('parts.employee-task-success')

                @include('parts.employee-task')
            </section>
            <!-- Tasks -->

            <!-- Tests -->
            <section class="block">
                <div class="flex flex-col max-w-xl drop-shadow-lg">
                    <div class="flex justify-between px-5 lg:px-8">
                        <h3 class="text-xl text-pr-blue lg:text-2xl">Тести</h3>

                        <div class="grid group place-items-center gap-y-1">
                            <a href="{{ route('tests') }}"
                                class="transition-colors duration-200 text-pr-blue group-hover:text-pr-blueviolet">
                                Читати все
                            </a>
                            <a href="{{ route('tests') }}"
                                class="transition duration-200 ease-in-out delay-150 group-hover:translate-x-3">
                                <svg width="56" height="12" viewBox="0 0 56 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        class="transition-colors duration-200 group-hover:group-hover:stroke-pr-blueviolet"
                                        d="M0.368164 6.52734L54.6318 6.52734" stroke="#302CFF"
                                        stroke-width="0.669922" />
                                    <path
                                        class="transition-colors duration-200 group-hover:group-hover:stroke-pr-blueviolet"
                                        d="M47.0957 11.3008L54.6323 6.52759L47.0957 1.00073" stroke="#302CFF"
                                        stroke-width="0.669922" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5 p-5 mt-5 bg-white lg:p-8 rounded-xl">
                        @include('parts.employee-test')
                        @include('parts.employee-test')
                        @include('parts.employee-test-success')
                        @include('parts.employee-test')
                        @include('parts.employee-test-success')
                    </div>
                </div>
            </section>
            <!-- Tests -->

            <!-- Practicals -->
            <section class="block">
                <div class="flex flex-col max-w-xl drop-shadow-lg">
                    <div class="flex justify-between px-5 lg:px-8">
                        <h3 class="text-xl text-pr-blue lg:text-2xl">Практичні</h3>

                        <div class="grid group place-items-center gap-y-1">
                            <a href="#"
                                class="transition-colors duration-200 text-pr-blue group-hover:text-pr-blueviolet">
                                Читати все
                            </a>
                            <a href="#" class="transition duration-200 ease-in-out delay-150 group-hover:translate-x-3">
                                <svg width="56" height="12" viewBox="0 0 56 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        class="transition-colors duration-200 group-hover:group-hover:stroke-pr-blueviolet"
                                        d="M0.368164 6.52734L54.6318 6.52734" stroke="#302CFF"
                                        stroke-width="0.669922" />
                                    <path
                                        class="transition-colors duration-200 group-hover:group-hover:stroke-pr-blueviolet"
                                        d="M47.0957 11.3008L54.6323 6.52759L47.0957 1.00073" stroke="#302CFF"
                                        stroke-width="0.669922" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5 p-5 mt-5 bg-white lg:p-8 rounded-xl">
                        @include('parts.employee-practical')
                        @include('parts.employee-practical-success')
                        @include('parts.employee-practical-success')
                        @include('parts.employee-practical')
                        @include('parts.employee-practical-success')
                    </div>
                </div>
            </section>
            <!-- Practicals -->
        </div>
    </section>
    <!-- Staff Employee -->

</article>
@endsection