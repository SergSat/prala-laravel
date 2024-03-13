@extends('layouts.app')

@section('content')
<article class="grid w-full grid-flow-row grid-cols-1 gap-5 lg:grid-cols-1 lg:pt-24">
	<h1 class="sr-only">Обов’язки та компетенції стаття</h1>

	{{-- Block with Avatar --}}
	@include('parts.mobile_head')

	<!-- Article -->
	<section class="w-full mt-10">
		<div class="flex flex-col items-center w-11/12 mx-auto lg:mx-0">
			{{-- Link to Categories --}}
			<div class="flex items-center self-start gap-2">
				<a href="{{ route('responsibilities-categories') }}" class="inline-flex items-center group">
					<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"
						class="w-4 h-4 group-hover:opacity-60">
						<path
							d="M6.82525 9.33816C7.00203 9.5503 7.31731 9.57896 7.52945 9.40218C7.74159 9.22539 7.77025 8.91011 7.59347 8.69797L6.82525 9.33816ZM4.99963 6.3664L4.61552 6.0463C4.461 6.23173 4.461 6.50107 4.61552 6.68649L4.99963 6.3664ZM7.59347 4.03482C7.77025 3.82268 7.74159 3.5074 7.52945 3.33062C7.31731 3.15384 7.00203 3.1825 6.82525 3.39464L7.59347 4.03482ZM7.59347 8.69797L5.38374 6.0463L4.61552 6.68649L6.82525 9.33816L7.59347 8.69797ZM5.38374 6.68649L7.59347 4.03482L6.82525 3.39464L4.61552 6.0463L5.38374 6.68649ZM6.5 1C9.53757 1 12 3.46243 12 6.5H13C13 2.91015 10.0898 -1.78814e-07 6.5 0V1ZM12 6.5C12 9.53757 9.53757 12 6.5 12V13C10.0899 13 13 10.0898 13 6.5H12ZM6.5 12C3.46243 12 1 9.53757 1 6.5H0C1.49012e-07 10.0899 2.91015 13 6.5 13V12ZM1 6.5C1 3.46243 3.46243 1 6.5 1V0C2.91015 1.49012e-07 -1.78814e-07 2.91015 0 6.5H1Z"
							fill="black" />
					</svg>
					<span class="ml-2 text-lg group-hover:opacity-60">Обов’язки та компетенції</span>
				</a>
				<div class="h-full border-l border-black"></div>
				<h3 class="text-xl text-pr-blue">Стаття 1</h3>
			</div>
			{{-- Link to Categories --}}

			{{-- ARTICLE --}}
			<section class="w-full max-w-xl p-5 bg-white sm:p-8 mt-7 rounded-2xl">
				<article class="prose">
					<h4>Назва</h4>
					<picture>
						<img width="310" height="125" class="object-cover w-full mt-5 rounded-xl bg-pr-gray-soft"
							src="{{ Vite::asset('resources/images/article-3.jpg') }}" alt="photo for question" />
					</picture>

					<p>
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
						laudantium,
						totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
						dicta sunt explicabo.
					</p>
					<p>
						Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
						consequuntur
						magni dolores eos qui ratione voluptatem sequi nesciunt.

						Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
						sed
						quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
						voluptatem.
					</p>
					<p>
						Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
						ut
						aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate
						velit
						esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
						pariatur?
					</p>
				</article>
			</section>
			{{-- ARTICLE --}}

			@include('parts.links-bottom-block')
		</div>
	</section>
</article>
@endsection