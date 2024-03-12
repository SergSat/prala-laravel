@extends('layouts.app')

@section('content')
<article class="grid w-full grid-flow-row grid-cols-1 gap-5 xl:grid-cols-4 lg:pt-24">
    <h1 class="sr-only">Сторінка голосування</h1>

    @include('parts.mobile_head')

    {{-- Mobile Tabs for Votes --}}
    <div class="flex flex-col items-center justify-center w-full mt-7 xl:hidden">
        <h2 class="text-2xl font-medium text-center drop-shadow-md text-pr-blue xl:hidden">Голосування</h2>

        <div role="tablist"
            class="relative w-max mx-auto h-11 mt-7 grid grid-cols-3 items-center px-[3px] rounded-lg bg-pr-beige overflow-hidden drop-shadow-2xl shadow-900/20 transition">
            <div
                class="absolute top-0 bottom-0 left-0 w-auto h-10 my-auto bg-white rounded-lg shadow-md --pr-indicator">
            </div>
            <button role="tab" id="tab-1" aria-selected="true" aria-controls="actual-vote" tabindex="0"
                class="relative block px-3 rounded-full h-9 tab text-pr-blue">
                <span class="">Актуальне</span>
            </button>
            <button role="tab" id="tab-2" aria-selected="false" aria-controls="available-vote" tabindex="-1"
                class="relative block px-3 text-gray-800 rounded-full h-9 tab">
                <span class="">Доступні</span>
            </button>
            <button role="tab" id="tab-3" aria-selected="false" aria-controls="past-vote" tabindex="-1"
                class="relative block px-3 text-gray-800 rounded-full h-9 tab">
                <span class="">Минулі</span>
            </button>
        </div>
    </div>
    {{-- Mobile Tabs for Votes --}}


    <!-- Actual vote -->
    <section id="actual-vote" role="tabpanel"
        class="grid w-full mx-auto transition-all tab-panel xl:mx-0 xl:col-start-1 xl:col-end-3 xl:block">
        <div class="flex flex-col justify-self-center">
            <h3 class="hidden text-xl text-center xl:block text-pr-blue lg:text-3xl">Актуальне голосування</h3>
            <div class="flex flex-col gap-5 p-5 mt-5 bg-white xl:mt-7 lg:p-8 lg:pt-0 lg:mt-5 rounded-xl drop-shadow-lg">
                <picture>
                    <img width="504px" height="204px" src="{{ Vite::asset('resources/images/article_1.jpg') }}"
                        alt="photo for voting" class="object-cover w-full mt-5 rounded-xl bg-pr-gray-soft">
                </picture>
                <ul class="flex flex-col gap-5">
                    @include('parts.actual-voting-list-item')

                    @include('parts.actual-voting-list-item')

                    @include('parts.actual-voting-list-item')

                    @include('parts.actual-voting-list-item-success')
                </ul>
            </div>
        </div>
    </section>
    <!-- Actual vote -->

    <!-- Available votes -->
    <section id="available-vote" role="tabpanel"
        class="hidden tab-panel transition-all w-full mt-5 xl:mt-[38px] mx-auto xl:mx-0 xl:col-start-3 xl:col-end-4 xl:block @container">
        <div
            class=" xl:mt-7 flex min-w-16 flex-col rounded-xl bg-white px-5 @md:px-10 pb-10 text-center drop-shadow-lg lg:mx-0 lg:mt-0">
            <h3 class="hidden pt-5 text-2xl text-pr-blue xl:block">Доступні голосування</h3>

            <ul class="flex flex-col gap-5 mt-7">
                @include('parts.available-voiting-list-item')

                @include('parts.available-voiting-list-item')

                @include('parts.available-voiting-list-item')

                @include('parts.available-voiting-list-item')
            </ul>
        </div>
    </section>
    <!-- Available votes -->

    <!-- Past votes -->
    <section id="past-vote" role="tabpanel"
        class="hidden tab-panel transition-all w-full mt-5 xl:mt-[38px] mx-auto xl:mx-0 lxl:col-start-4 xl:col-end-5 xl:block @container">
        <div
            class=" xl:mt-7 flex min-w-16 flex-col rounded-xl bg-white px-5 @md:px-10 pb-10 text-center drop-shadow-lg lg:mx-0 lg:mt-0">
            <h3 class="hidden pt-5 text-2xl text-pr-blue xl:block">Минулі голосування</h3>

            <ul class="flex flex-col gap-5 mt-7">
                @include('parts.past-voiting-list-item')

                @include('parts.past-voiting-list-item')

                @include('parts.past-voiting-list-item')

                @include('parts.past-voiting-list-item')
            </ul>
        </div>
    </section>
    <!-- Past votes -->

</article>
@endsection