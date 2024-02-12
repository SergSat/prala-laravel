<header class="">
	<section class="relative py-5 lg:hidden">
		<img class="mx-auto" src="{{ Vite::asset('resources/images/logo-prala.png') }}" alt="logo-prala" />
		<button id="hamburger-button"
			class="absolute right-5 top-1/2 h-8 w-14 -translate-y-1/2 transform cursor-pointer text-4xl text-pr-blue">
			<span
				class="absolute right-1 top-4 -mt-0.5 h-1 w-8 rounded bg-pr-blue drop-shadow transition-all duration-500 before:absolute before:h-1 before:w-8 before:-translate-x-4 before:-translate-y-2.5 before:rounded before:bg-pr-blue before:drop-shadow before:transition-all before:duration-500 before:content-[''] after:absolute after:h-1 after:w-8 after:-translate-x-4 after:translate-y-2.5 after:rounded after:bg-pr-blue after:drop-shadow after:transition-all after:duration-500 sm:right-4"></span>
		</button>
	</section>
	<section id="mobile-menu"
		class="fixed left-0 right-0 z-30 min-h-screen -translate-x-full bg-white px-5 pt-9 transition-all duration-500 sm:px-10 lg:hidden">
		<h3 class="text-center text-2xl font-extralight text-stone-500">Меню</h3>
		<nav>
			<ul class="mt-10 flex flex-col gap-5 text-2xl">
				<li>
					<a href="#" class="--pr-active w-full text-center hover:opacity-60">Кабінет</a>
				</li>
				<li><a href="#" class="w-full text-center hover:opacity-60">Бібліотека</a></li>
				<li><a href="#" class="w-full text-center hover:opacity-60">Налаштування</a></li>
				<li><a href="#" class="w-full text-center hover:opacity-60">Голосування</a></li>
				<li><a href="#" class="w-full text-center hover:opacity-60">Блог</a></li>
				<li>
					<a href="#" class="w-full text-center hover:opacity-60">
						Обов’язки та компетенції
					</a>
				</li>
			</ul>
		</nav>
	</section>

	{{-- Desctop navigation --}}
	<section
		class="animate-open-menu ggg hidden rounded-md drop-shadow-lg lg:ml-5 lg:mt-5 lg:block lg:w-max lg:bg-white lg:px-5">
		<nav>
			<ul class="flex gap-5 py-4 text-base xl:gap-7">
				<li><a href="/" class="--pr-active">Кабінет</a></li>
				<li><a href="#">Бібліотека</a></li>
				<li><a href="#">Налаштування</a></li>
				<li><a href="#">Голосування</a></li>
				<li><a href="#">Блог</a></li>
				<li><a href="#" class="whitespace-nowrap">Обов’язки та компетенції</a></li>
			</ul>
		</nav>
	</section>
</header>