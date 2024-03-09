@extends('layouts.app')

@section('content')
<article class="grid w-full grid-flow-row grid-cols-1 gap-5 lg:grid-cols-1 lg:pt-24">
	<h1 class="sr-only">Teсти</h1>

	@include('parts.mobile_head')

	<!-- Tests -->
	<section class="w-full">
		<div
			class="flex flex-col px-5 pb-10 mx-auto text-center bg-white mt-7 rounded-xl text-pr-blue drop-shadow-lg sm:px-10 md:w-11/12 lg:mx-0 lg:mt-0">

			<!-- Tests List header -->
			<div class="flex items-center justify-between pt-5">
				<h3 class="text-xl lg:text-2xl">Тести</h3>
				<a href="{{ route('training') }}" class="hover:text-pr-blueviolet">
					Назад
				</a>
			</div>
			<!-- Tests List header -->

			<ul class="grid grid-cols-2 gap-5 mt-7 auto-rows-auto md:grid-cols-3 md:gap-8 lg:gap-10">

				@include('parts.tests-list-item')

				@include('parts.tests-list-item')

				@include('parts.tests-list-item')

				@include('parts.tests-list-item')

				@include('parts.tests-list-item')

				@include('parts.tests-list-item')

				@include('parts.tests-list-item')

				@include('parts.tests-list-item')

				@include('parts.tests-list-item')

				@include('parts.tests-list-item')

				@include('parts.tests-list-item')

				@include('parts.tests-list-item')
			</ul>
		</div>
	</section>
	<!-- Training -->
</article>
@endsection