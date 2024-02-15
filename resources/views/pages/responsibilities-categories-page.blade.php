@extends('layouts.app2')

@section('content')
<article class="w-full">

    @include('parts.mobile_head')

    <h1 class="mt-20 text-2xl font-medium text-center lg:text-3xl lg:text-start text-pr-blue">Обов'язки та компетенції
    </h1>

    <!-- Available professions -->
    <div class="grid w-full grid-flow-row grid-cols-1 gap-5 mt-10">

        <div
            class="grid w-full p-5 md:p-10 grid-flow-row grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 bg-white rounded-xl">

            @include('parts.responsibilities-category')

            @include('parts.responsibilities-category')

            @include('parts.responsibilities-category')

            @include('parts.responsibilities-category')

            @include('parts.responsibilities-category')

            @include('parts.responsibilities-category')
        </div>
    </div>
    <!-- Available professions -->
</article>
@endsection