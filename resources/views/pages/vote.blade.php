@extends('layouts.app2')

@section('content')
<article class="grid w-full grid-flow-row grid-cols-1 gap-5 xl:grid-cols-4 lg:pt-24">
    <h1 class="sr-only">Сторінка голосування</h1>

    @include('parts.mobile_head')

    {{-- Mobile Tabs for Votes --}}
    <div class="w-full mt-7 flex flex-col items-center justify-center xl:hidden">
        <h2 class="text-2xl text-center text-pr-blue xl:hidden">Голосування</h2>
        <ul
            class="relative mt-7 w-full xxs:w-auto flex flex-col xxs:flex-row items-center gap-5 rounded-lg bg-pr-beige p-1 text-lg drop-shadow-lg">
            <li class="w-full xxs:w-auto text-center xxs:text">
                <a href="#actual-vote" id="tab1-link"
                    class="--pr-tab-active inline-block w-full xxs:w-auto  tab-link px-3 py-1 xs:px-5 xs:py-2 transition-transform duration-300">
                    Актуальне
                </a>
            </li>
            <li class="w-full xxs:w-auto text-center xxs:text">
                <a href="#available-vote" id="tab2-link"
                    class="tab-link inline-block w-full xxs:w-auto px-3 py-1 xs:px-5 xs:py-2 transition-transform duration-300">
                    Доступні
                </a>
            </li>
            <li class="w-full xxs:w-auto text-center xxs:text">
                <a href="#past-vote" id="tab3-link"
                    class="tab-link inline-block w-full xxs:w-auto px-3 py-1 xs:px-5 xs:py-2 transition-transform duration-300">
                    Минулі
                </a>
            </li>
        </ul>
    </div>
    {{-- Mobile Tabs for Votes --}}


    <!-- Actual vote -->
    <section id="actual-vote"
        class="tab-content transition-all grid w-full mx-auto xl:mx-0 xl:col-start-1 xl:col-end-3 xl:block">
        <div class="justify-self-center flex flex-col">
            <h3 class="hidden xl:block text-center text-xl text-pr-blue lg:text-3xl">Актуальне голосування</h3>
            <div class="bg-white mt-5 xl:mt-7 p-5 lg:p-8 lg:pt-0 lg:mt-5 rounded-xl drop-shadow-lg flex flex-col gap-5">
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
        class="hidden transition-all tab-content w-full mt-5 xl:mt-[38px] mx-auto xl:mx-0 xl:col-start-3 xl:col-end-4 xl:block @container">
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
    <section id="past-vote"
        class="hidden transition-all tab-content w-full mt-5 xl:mt-[38px] mx-auto xl:mx-0 lxl:col-start-4 xl:col-end-5 xl:block @container">
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