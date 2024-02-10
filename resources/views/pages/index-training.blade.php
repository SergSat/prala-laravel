@extends('layouts.app2')

@section('content')
<article class="grid w-full grid-flow-row grid-cols-1 gap-5 lg:grid-cols-2 lg:pt-24">
	<h1 class="sr-only">Мої завдання, навчання та новини</h1>

	<div class="mx-auto mt-10 lg:hidden">
		<div class="flex items-center justify-center gap-x-5 sm:gap-x-12">
			<img src="{{ Vite::asset('resources/images/photo-model.png') }}" alt="avatar" />
			<div class="flex flex-col items-center">
				<h3 class="text-2xl">Анастасія</h3>
				<p class="mt-1 font-extralight text-stone-500">Кулінарний геній</p>
				<div class="mt-3 flex w-3/4 items-center justify-between">
					<img class="h-5 w-5" src="{{ Vite::asset('resources/images/starfull.svg') }}" alt="star" />
					<img class="h-5 w-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star" />
					<img class="h-5 w-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star" />
					<img class="h-5 w-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star" />
				</div>
			</div>
		</div>
	</div>

	<!-- Tasks -->
	<section class="mx-auto flex flex-col lg:mx-0">
		<h3 class="pl-5 pt-5 text-xl text-pr-blue lg:text-2xl">Мої завдання</h3>
		<div
			class="mt-5 flex min-w-16 max-w-xl items-center justify-between gap-4 rounded-md bg-white p-5 drop-shadow-lg">
			<p
				class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
				Тест “Массажист Стоп Начальника” Тест “Массажист Стоп Начальника” Тест
				“Массажист Стоп Начальника” Тест “Массажист Стоп Начальника”
			</p>
			<p class="whitespace-nowrap text-sm sm:text-base">В очікуванні</p>
		</div>

		<div
			class="--pr-success mt-5 flex min-w-16 max-w-xl items-center justify-between rounded-md bg-white p-5 drop-shadow-lg">
			<p
				class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
				Тест “Массажист Стоп Начальника”
			</p>
			<p class="whitespace-nowrap text-sm sm:text-base">Завершено</p>
		</div>

		<div class="mt-5 flex min-w-16 max-w-xl items-center justify-between rounded-md bg-white p-5 drop-shadow-lg">
			<p
				class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
				Тест “Массажист Стоп Начальника”
			</p>
			<p class="whitespace-nowrap text-sm sm:text-base">В очікуванні</p>
		</div>

		<div
			class="--pr-success mt-5 flex min-w-16 max-w-xl items-center justify-between rounded-md bg-white p-5 drop-shadow-lg">
			<div class="flex items-center">
				<p
					class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
					Тест “Массажист Стоп Начальника”
				</p>
			</div>
			<p class="whitespace-nowrap text-sm sm:text-base">Завершено</p>
		</div>

		<div
			class="--pr-success mt-5 flex min-w-16 max-w-xl items-center justify-between rounded-md bg-white p-5 drop-shadow-lg">
			<div class="flex items-center">
				<p
					class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
					Тест “Массажист Стоп Начальника”
				</p>
			</div>
			<p class="whitespace-nowrap text-sm sm:text-base">Завершено</p>
		</div>

		<div class="mt-5 flex min-w-16 max-w-xl items-center justify-between rounded-md bg-white p-5 drop-shadow-lg">
			<p
				class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
				Тест “Массажист Стоп Начальника”
			</p>
			<p class="whitespace-nowrap text-sm sm:text-base">В очікуванні</p>
		</div>

		<div class="mt-5 flex min-w-16 max-w-xl items-center justify-between rounded-md bg-white p-5 drop-shadow-lg">
			<p
				class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
				Тест “Массажист Стоп Начальника”
			</p>
			<p class="whitespace-nowrap text-sm sm:text-base">В очікуванні</p>
		</div>
	</section>
	<!-- Tasks -->

	<!-- Training items -->
	<section class="block">
		<div
			class="mx-auto mt-7 flex min-w-16 max-w-xl flex-col rounded-xl bg-white px-10 pb-10 text-center text-pr-blue drop-shadow-lg lg:mx-0 lg:mt-0">
			<div class="flex items-center justify-between pt-5">
				<h3 class="text-xl lg:text-2xl">Навчання</h3>
				<a href="{{ route('index') }}" class="hover:text-pr-blueviolet">
					Назад
				</a>
			</div>
			<div class="mt-7 grid auto-rows-auto grid-cols-2 gap-5">
				<div class="group relative flex flex-col justify-center gap-3">
					<a href="http://dev.prala-laravel.com/tests"
						class="block h-28 w-full rounded-lg bg-pr-gray-soft group-hover:ring-2 group-hover:ring-sky-400 group-focus:outline-none group-focus:ring group-focus:ring-indigo-300">
						<img src="{{ Vite::asset('resources/images/tests_small.jpg') }}" alt="test with pencil"
							class="h-full w-full rounded-lg object-cover" />
					</a>
					<a href="http://dev.prala-laravel.com/tests" class="px-12 group-hover:text-pr-blueviolet">
						Тести
					</a>
				</div>

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

		<div class="mt-5 rounded-lg bg-white py-7 drop-shadow-lg">
			<ul class="px-6">
				<li>
					<h4
						class="flex items-center text-lg before:mr-2 before:block before:h-2 before:w-2 before:shrink-0 before:rounded-full before:bg-pr-blue before:content-['']">
						Заголовок новини 1
					</h4>
					<p class="pl-4 pt-3 text-pr-darklategray">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, numquam
						illum est aliquid, quasi repellat omnis quam quibusdam in laborum sunt
						animi suscipit facilis doloremque accusamus autem veritatis repellendus
						quas.
					</p>
					<hr class="my-5 ml-5 h-px border-0 bg-pr-gray-sky" />
				</li>
				<li>
					<h4
						class="flex items-center text-lg before:mr-2 before:block before:h-2 before:w-2 before:shrink-0 before:rounded-full before:bg-pr-blue before:content-['']">
						Заголовок новини 2
					</h4>
					<p class="pl-4 pt-3 text-pr-darklategray">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, numquam
						illum est aliquid, quasi repellat omnis quam quibusdam in laborum sunt
						animi suscipit facilis doloremque accusamus autem veritatis repellendus
						quas.
					</p>
					<hr class="my-5 ml-5 h-px border-0 bg-pr-gray-sky" />
				</li>
				<li>
					<h4
						class="flex items-center text-lg before:mr-2 before:block before:h-2 before:w-2 before:shrink-0 before:rounded-full before:bg-pr-blue before:content-['']">
						Заголовок новини 3
					</h4>
					<p class="pl-4 pt-3 text-pr-darklategray">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, numquam
						illum est aliquid, quasi repellat omnis quam quibusdam in laborum sunt
						animi suscipit facilis doloremque accusamus autem veritatis repellendus
						quas.
					</p>
					<hr class="my-5 ml-5 h-px border-0 bg-pr-gray-sky" />
				</li>
			</ul>
		</div>
	</section>
	<!-- News -->
</article>
@endsection