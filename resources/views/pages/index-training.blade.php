@extends('layouts.app2')

@section('content')
<article class="grid w-full grid-flow-row grid-cols-1 gap-5 lg:grid-cols-2 lg:pt-24">
	<h1 class="sr-only">Мої завдання, навчання та новини</h1>

	@include('parts.mobile_head')

	<!-- Tasks -->
	<section class="mx-auto flex flex-col lg:mx-0">
		<h3 class="pl-5 pt-5 text-xl text-pr-blue lg:text-2xl">Мої завдання</h3>

		@include('parts.task-item-success')

		@include('parts.task-item')

		@include('parts.task-item-success')

		@include('parts.task-item')

		@include('parts.task-item-success')

		@include('parts.task-item')
	</section>
	<!-- Tasks -->

	<!-- Training items -->
	<section class="block">
		<div
			class="mx-auto mt-7 flex min-w-16 max-w-xl flex-col rounded-xl bg-white px-10 pb-10 text-center text-pr-blue drop-shadow-lg lg:mx-0 lg:mt-0">
			<div class="flex items-center justify-between pt-5">
				<h3 class="text-xl lg:text-2xl">Навчання</h3>
				<a href="{{ route('home') }}" class="hover:text-pr-blueviolet">
					Назад
				</a>
			</div>
			<div class="mt-7 grid auto-rows-auto grid-cols-2 gap-5">
				@include('parts.trainig-material')

				<div class="group relative flex flex-col justify-center gap-3">
					<a href="#"
						class="block h-28 w-full rounded-lg bg-pr-gray-soft group-hover:ring-2 group-hover:ring-sky-400 group-focus:outline-none group-focus:ring group-focus:ring-indigo-300">
						<img src="{{ Vite::asset('resources/images/algorithms.jpg') }}" alt="types of algorithms"
							class="h-full w-full rounded-lg object-cover" />
					</a>
					<a href="#" class="px-12 group-hover:text-pr-blueviolet">Алгоритми</a>
				</div>

				<div class="group relative flex flex-col justify-center gap-3">
					<a href="#"
						class="block h-28 w-full rounded-lg bg-pr-gray-soft group-hover:ring-2 group-hover:ring-sky-400 group-focus:outline-none group-focus:ring group-focus:ring-indigo-300">
						<img src="{{ Vite::asset('resources/images/presentations_small.jpg') }}"
							alt="men doing presentation" class="h-full w-full rounded-lg object-cover" />
					</a>
					<a href="#" class="px-12 group-hover:text-pr-blueviolet">Презентації</a>
				</div>

				<div class="group relative flex flex-col justify-center gap-3">
					<a href="#"
						class="block h-28 w-full rounded-lg bg-pr-gray-soft group-hover:ring-2 group-hover:ring-sky-400 group-focus:outline-none group-focus:ring group-focus:ring-indigo-300">
						<img src="{{ Vite::asset('resources/images/article_3_small.jpg') }}"
							alt="hands writting an article" class="h-full w-full rounded-lg object-cover" />
					</a>
					<a href="#" class="px-12 group-hover:text-pr-blueviolet">Статтї</a>
				</div>

				<div class="group relative flex flex-col justify-center gap-3">
					<a href="#"
						class="block h-28 w-full rounded-lg bg-pr-gray-soft group-hover:ring-2 group-hover:ring-sky-400 group-focus:outline-none group-focus:ring group-focus:ring-indigo-300">
						<img src="{{ Vite::asset('resources/images/video_2_small.jpg') }}" alt="test with pencil"
							class="h-full w-full rounded-lg object-cover" />
					</a>
					<a href="#" class="px-12 group-hover:text-pr-blueviolet">Відео</a>
				</div>

				<div class="group relative flex flex-col justify-center gap-3">
					<a href="#"
						class="block h-28 w-full rounded-lg bg-pr-gray-soft group-hover:ring-2 group-hover:ring-sky-400 group-focus:outline-none group-focus:ring group-focus:ring-indigo-300">
						<img src="{{ Vite::asset('resources/images/video_1_small.jpg') }}" alt="test with pencil"
							class="h-full w-full rounded-lg object-cover" />
					</a>
					<a href="#" class="px-12">Інше</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Training -->

	<!-- News -->
	<section class="mx-auto max-w-xl pt-5 lg:mx-0">

		<!-- News header -->
		<div class="flex justify-between px-6">
			<h3 class="text-xl text-pr-blue lg:text-2xl">Новини</h3>

			<div class="group grid place-items-center gap-y-1">
				<a href="#" class="text-pr-blue transition-colors duration-300 group-hover:text-pr-blueviolet">
					Читати все
				</a>
				<a href="#" class="transition delay-150 duration-200 ease-in-out group-hover:translate-x-3">
					<svg width="56" height="12" viewBox="0 0 56 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="transition-colors duration-300 group-hover:group-hover:stroke-pr-blueviolet"
							d="M0.368164 6.52734L54.6318 6.52734" stroke="#302CFF" stroke-width="0.669922" />
						<path class="transition-colors duration-300 group-hover:group-hover:stroke-pr-blueviolet"
							d="M47.0957 11.3008L54.6323 6.52759L47.0957 1.00073" stroke="#302CFF"
							stroke-width="0.669922" />
					</svg>
				</a>
			</div>
		</div>
		<!-- News header -->

		<!-- News List -->
		<div class="mt-5 rounded-lg bg-white py-7 drop-shadow-lg">
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