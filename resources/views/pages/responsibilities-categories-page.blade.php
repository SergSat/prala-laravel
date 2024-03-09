@extends('layouts.app')

@section('content')
<article class="w-full">

    {{-- Block with Avatar --}}
    @include('parts.mobile_head')

    <div class="grid w-full grid-flow-row grid-cols-1 gap-5 mt-10">

        {{-- Link to Responsibilities --}}
        <div class="flex items-center justify-between">
            <h1 class="text-xl text-center lg:text-2xl lg:text-start text-pr-blue">Обов'язки та компетенції
            </h1>

            <a href="{{ route('responsibilities') }}" class="text-pr-blue hover:text-pr-blueviolet">Назад</a>
        </div>
        {{-- Link to Responsibilities --}}

        {{-- Responsibilities Categories List --}}
        <div
            class="grid w-full grid-flow-row grid-cols-1 gap-5 p-5 bg-white md:p-10 md:grid-cols-2 lg:grid-cols-3 rounded-xl">

            @include('parts.responsibilities-category')

            @include('parts.responsibilities-category')

            @include('parts.responsibilities-category')

            @include('parts.responsibilities-category')

            @include('parts.responsibilities-category')

            @include('parts.responsibilities-category')
        </div>
        {{-- Responsibilities Categories List --}}
    </div>

</article>
@endsection