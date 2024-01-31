@extends('layouts.app')

@section('content')
	<article class="grid w-full grid-flow-row grid-cols-1 gap-5 lg:grid-cols-1 lg:pt-24">
		<h1 class="sr-only">Teст</h1>

		{{-- Block with Avatar --}}
		<div class="mx-auto mt-10 lg:hidden">
			<div class="flex items-center justify-center gap-x-5 sm:gap-x-12">
				<img src="{{ Vite::asset('resources/images/photo-model.png') }}" alt="avatar" />
				<div class="flex flex-col items-center">
					<h3 class="text-2xl">Анастасія</h3>
					<p class="mt-1 font-extralight text-stone-500">Кулінарний геній</p>
					<div class="mt-3 flex w-3/4 items-center justify-between">
						<img
							class="h-5 w-5"
							src="{{ Vite::asset('resources/images/starfull.svg') }}"
							alt="star" />
						<img
							class="h-5 w-5"
							src="{{ Vite::asset('resources/images/starempty.svg') }}"
							alt="star" />
						<img
							class="h-5 w-5"
							src="{{ Vite::asset('resources/images/starempty.svg') }}"
							alt="star" />
						<img
							class="h-5 w-5"
							src="{{ Vite::asset('resources/images/starempty.svg') }}"
							alt="star" />
					</div>
				</div>
			</div>
		</div>

		<!-- Test -->
		<section class="mt-10 w-full">
			<div class="mx-auto flex w-11/12 flex-col items-center lg:mx-0">
				{{-- Link to Tests --}}
				<div class="flex items-center gap-2 self-start">
					<a
						href="http://dev.prala-laravel.com/tests"
						class="group inline-flex items-center">
						<svg
							width="13"
							height="13"
							viewBox="0 0 13 13"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
							class="h-4 w-4 group-hover:opacity-60">
							<path
								d="M6.82525 9.33816C7.00203 9.5503 7.31731 9.57896 7.52945 9.40218C7.74159 9.22539 7.77025 8.91011 7.59347 8.69797L6.82525 9.33816ZM4.99963 6.3664L4.61552 6.0463C4.461 6.23173 4.461 6.50107 4.61552 6.68649L4.99963 6.3664ZM7.59347 4.03482C7.77025 3.82268 7.74159 3.5074 7.52945 3.33062C7.31731 3.15384 7.00203 3.1825 6.82525 3.39464L7.59347 4.03482ZM7.59347 8.69797L5.38374 6.0463L4.61552 6.68649L6.82525 9.33816L7.59347 8.69797ZM5.38374 6.68649L7.59347 4.03482L6.82525 3.39464L4.61552 6.0463L5.38374 6.68649ZM6.5 1C9.53757 1 12 3.46243 12 6.5H13C13 2.91015 10.0898 -1.78814e-07 6.5 0V1ZM12 6.5C12 9.53757 9.53757 12 6.5 12V13C10.0899 13 13 10.0898 13 6.5H12ZM6.5 12C3.46243 12 1 9.53757 1 6.5H0C1.49012e-07 10.0899 2.91015 13 6.5 13V12ZM1 6.5C1 3.46243 3.46243 1 6.5 1V0C2.91015 1.49012e-07 -1.78814e-07 2.91015 0 6.5H1Z"
								fill="black" />
						</svg>
						<span class="ml-2 text-lg group-hover:opacity-60">Всі тести</span>
					</a>
					<div class="h-6 border-l border-black"></div>
					<h3 class="text-xl text-pr-blue">Тест 1</h3>
				</div>

				{{-- TEST --}}
				<section class="mt-7 w-full rounded-2xl bg-white p-5">
					<h4 class="text-lg">Питання 1</h4>
					<img
						width="310"
						height="125"
						class="mt-5 w-full rounded-xl bg-pr-gray-soft object-cover"
						src="{{ Vite::asset('resources/images/article_1.jpg') }}"
						alt="photo for question" />

					<div>
						<div
							class="mt-5 flex items-center justify-between gap-4 rounded-md border-2 border-pr-gray-soft bg-white p-5 drop-shadow-lg max-[320px]:flex-col">
							<p
								class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
								Варіант 1
							</p>
							<p class="whitespace-nowrap text-sm sm:text-base">Обрати</p>
						</div>

						<div
							class="mt-5 flex items-center justify-between gap-4 rounded-md border-2 border-pr-gray-soft bg-white p-5 drop-shadow-lg max-[320px]:flex-col">
							<p
								class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
								Варіант 2
							</p>
							<p class="whitespace-nowrap text-sm sm:text-base">Обрати</p>
						</div>

						<div
							class="mt-5 flex items-center justify-between gap-4 rounded-md border-2 border-pr-gray-soft bg-white p-5 drop-shadow-lg max-[320px]:flex-col">
							<p
								class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
								Варіант 3
							</p>
							<p class="whitespace-nowrap text-sm sm:text-base">Обрати</p>
						</div>

						<div
							class="--pr-success mt-5 flex items-center justify-between gap-4 rounded-md border-2 border-pr-gray-soft bg-white p-5 drop-shadow-lg max-[320px]:flex-col">
							<p
								class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
								Варіант 4
							</p>
							<p class="whitespace-nowrap text-sm sm:text-base">Обрано</p>
						</div>
					</div>
				</section>

				<div
					class="mt-5 flex items-center justify-center gap-2 rounded-full bg-white px-7 py-2">
					<a
						href="http://dev.prala-laravel.com/tests"
						class="group inline-flex items-center gap-3">
						<svg
							width="25"
							height="25"
							viewBox="0 0 25 25"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
							class="group-hover:opacity-60">
							<path
								d="M14.8996 17.3008L10.0996 12.5008L14.8996 7.70078"
								stroke="black"
								stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
						<span class="text-lg group-hover:opacity-60">Назад</span>
					</a>
					<div class="h-6 border-l border-black"></div>
					<a href="#" class="group inline-flex items-center gap-3 text-xl text-pr-blue">
						<span class="text-lg group-hover:opacity-60">Далі</span>
						<svg
							width="25"
							height="25"
							viewBox="0 0 25 25"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
							class="group-hover:opacity-60">
							<path
								d="M10.1004 7.69922L14.9004 12.4992L10.1004 17.2992"
								stroke="#0038FF"
								stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
					</a>
				</div>
			</div>
		</section>
	</article>
@endsection
