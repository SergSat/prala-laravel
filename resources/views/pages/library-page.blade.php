@extends('layouts.app2')

@section('content')
<article class="grid w-full grid-flow-row grid-cols-1 gap-5 lg:grid-cols-1 lg:pt-24">

    @include('parts.mobile_head')

    <!-- Tests -->
    <section class="z-10 flex flex-col w-full">

        {{-- Search block --}}
        <form id="search-form" class="z-20 self-end">
            <div class="relative inline-flex flex-col justify-center text-gray-500">
                <div class="relative">
                    <input id="simple-search" type="text" autocomplete="off"
                        class="w-full bg-transparent border-transparent border-b-pr-blue focus:outline-none focus:border-transparent focus:border-b-pr-blue focus:ring-transparent"
                        placeholder="search..." value="" />
                    <svg class="absolute w-5 h-5 right-3 top-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="#0038FF">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <ul id="autocompleteList" role="list"
                    class="absolute left-0 z-30 hidden w-full mt-2 overflow-auto bg-white border border-gray-100 top-10 last:rounded-b-lg max-h-60">

                    <li class="px-3 py-2">HBHJBHJBhj</li>
                </ul>
            </div>
        </form>
        {{-- Search block --}}

        <div
            class="relative z-10 flex flex-col px-5 pb-10 mx-auto text-center bg-white mt-7 rounded-xl text-pr-blue drop-shadow-lg sm:px-10 md:w-11/12 lg:mx-0 xl:w-3/4">

            <!-- Tests List header -->
            <div class="flex items-center justify-between pt-5">
                <h1 class="text-xl lg:text-2xl">Бібліотека</h1>
                <a href="{{ route('home') }}" class="transition-colors duration-200 hover:text-pr-blueviolet">
                    Назад
                </a>
            </div>
            <!-- Tests List header -->

            <ul class="grid grid-cols-2 gap-5 mt-7 auto-rows-auto md:grid-cols-3 xl:grid-cols-4 md:gap-8 lg:gap-10">

                @include('parts.library-list-item')

                @include('parts.library-list-item')

                @include('parts.library-list-item')

                @include('parts.library-list-item')

                @include('parts.library-list-item')

                @include('parts.library-list-item')

                @include('parts.library-list-item')

                @include('parts.library-list-item')

                @include('parts.library-list-item')

                @include('parts.library-list-item')

                @include('parts.library-list-item')

                @include('parts.library-list-item')
            </ul>
        </div>
    </section>
    <!-- Training -->
</article>
@endsection