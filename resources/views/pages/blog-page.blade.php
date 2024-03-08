@extends('layouts.app')

@section('content')
<article class="w-full">
    <h1 class="sr-only">Сторінка блогу</h1>

    @include('parts.mobile_head')

    <!-- Posts -->
    <div class="grid w-full grid-flow-row grid-cols-1 gap-5 pt-20 lg:grid-cols-2 lg:pt-24">
        @include('parts.blog-posts')
        @include('parts.blog-posts')
        @include('parts.blog-posts')
        @include('parts.blog-posts')
    </div>
    <!-- Posts -->
</article>
@endsection