@extends('layouts.app')

@section('content')
<article class="grid w-full grid-flow-row grid-cols-1 gap-5 lg:grid-cols-2 lg:pt-24">
	<h1 class="sr-only">Мої завдання, навчання та новини</h1>

	@include('parts.mobile_head')

	<!-- Tasks -->
	<section class="flex flex-col mx-auto lg:mx-0">
		<h3 class="pt-5 pl-5 text-xl text-pr-blue lg:text-2xl">Мої завдання</h3>

		<x-tasks :tasks="$tasks"/>

	</section>
	<!-- Tasks -->

	<!-- Training -->
	<section class="block">
		<div
			class="flex flex-col max-w-xl px-10 pb-10 mx-auto text-center bg-white mt-7 min-w-16 rounded-xl drop-shadow-lg lg:mx-0 lg:mt-0">
			<h3 class="pt-5 text-xl text-pr-blue lg:text-2xl">Навчання</h3>

			<div class="grid grid-rows-4">
				@include('parts.trainig-profession')

				@include('parts.trainig-profession')

				@include('parts.trainig-profession')

				@include('parts.trainig-profession')
			</div>
		</div>
	</section>
	<!-- Training -->

	<!-- News -->
	<section class="max-w-xl pt-5 mx-auto lg:mx-0">

		<!-- News header -->
		<div class="flex justify-between px-6">
			<h3 class="text-xl text-pr-blue lg:text-2xl">Новини</h3>

			<div class="grid group place-items-center gap-y-1">
				<a href="#" class="transition-colors duration-200 text-pr-blue group-hover:text-pr-blueviolet">
					Читати все
				</a>
				<a href="#" class="transition duration-200 ease-in-out delay-150 group-hover:translate-x-3">
					<svg width="56" height="12" viewBox="0 0 56 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="transition-colors duration-200 group-hover:group-hover:stroke-pr-blueviolet"
							d="M0.368164 6.52734L54.6318 6.52734" stroke="#302CFF" stroke-width="0.669922" />
						<path class="transition-colors duration-200 group-hover:group-hover:stroke-pr-blueviolet"
							d="M47.0957 11.3008L54.6323 6.52759L47.0957 1.00073" stroke="#302CFF"
							stroke-width="0.669922" />
					</svg>
				</a>
			</div>
		</div>
		<!-- News header -->

		<!-- News List -->
		<div class="mt-5 bg-white rounded-lg py-7 drop-shadow-lg">
			<ul class="px-6">
				@include('parts.news-item')

				@include('parts.news-item')

				@include('parts.news-item')
			</ul>
		</div>
	</section>
	<!-- News -->
</article>
@endsection