@extends('layouts.app2')

@section('content')
<article class="grid w-full grid-flow-row grid-cols-1 gap-5 lg:grid-cols-2 lg:pt-24">
    <h1 class="sr-only">Сторінка блогу</h1>

    @include('parts.mobile_head')

    <!-- Posts -->
    @include('parts.blog-posts')
    @include('parts.blog-posts')
    @include('parts.blog-posts')
    @include('parts.blog-posts')
    <!-- Posts -->


</article>
@endsection