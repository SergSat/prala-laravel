@extends('layouts.app2')

@section('content')
<article class="grid w-full grid-flow-row grid-cols-1 gap-5 xl:grid-cols-4 lg:pt-24">
    <h1 class="sr-only">Сторінка голосування</h1>

    @include('parts.mobile_head')

    {{-- Mobile Tabs for Votes --}}
    <div class="w-full mt-7 flex items-center justify-center xl:hidden">
        <ul class="flex flex-col items-center text-xl rounded-lg bg-pr-beige p-1 drop-shadow-lg">
            <li class="relative text-center w-full">
                <a href="#actual-vote" id="tab-link-1" class="tab-link --pr-tab-active p-5 inline-block w-full">
                    Актуальне голосування
                </a>
            </li>
            <li class="relative text-center w-full">
                <a href="#available-vote" id="tab-link-2" class="tab-link p-5 inline-block w-full">
                    Доступні голосування
                </a>
            </li>
            <li class="relative text-center w-full">
                <a href="#past-vote" id="tab-link-3" class="tab-link p-5 inline-block w-full">
                    Минулі голосування
                </a>
            </li>
        </ul>
    </div>
    {{-- Mobile Tabs for Votes --}}


    <!-- Actual vote -->
    <section id="actual-vote" class="tab-content w-full mx-auto xl:mx-0 xl:col-start-1 xl:col-end-3">
        <div class="flex flex-col">
            <h3 class="hidden lg:block text-center text-xl text-pr-blue lg:text-3xl">Актуальне голосування</h3>
            <div class="bg-white mt-7 p-5 lg:p-8 lg:pt-0 lg:mt-5 rounded-xl drop-shadow-lg flex flex-col gap-5">
                <picture>
                    <img width="504px" height="204px" src="{{ Vite::asset('resources/images/article_1.jpg') }}"
                        alt="photo for voting" class="mt-5 w-full rounded-xl bg-pr-gray-soft object-cover">
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
    <section id="available-vote"
        class="hidden tab-content w-full mx-auto xl:mx-0 xl:col-start-3 xl:col-end-4 xl:block @container">
        <div
            class="mt-7 flex min-w-16 max-w-xl flex-col rounded-xl bg-white px-5 @md:px-10 pb-10 text-center drop-shadow-lg lg:mx-0 lg:mt-0">
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
    <section id="past-vote"
        class="hidden tab-content w-full mx-auto xl:mx-0 lxl:col-start-4 xl:col-end-5 xl:block @container">
        <div
            class="mt-7 flex min-w-16 max-w-xl flex-col rounded-xl bg-white px-5 @md:px-10 pb-10 text-center drop-shadow-lg lg:mx-0 lg:mt-0">
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