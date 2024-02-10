<aside
	class="fixed inset-y-0 right-0 flex min-h-screen translate-x-full transform flex-col items-center justify-between bg-pr-beige py-10 transition duration-300 ease-linear lg:w-1/4 lg:translate-x-0">
	<img
		width="200"
		height="50"
		src="{{ Vite::asset('resources/images/prala_logo1.svg') }}"
		alt="logo-prala"
		class="w-50 h-16" />

	<section class="flex w-3/4 flex-col items-center rounded-lg border border-pr-gray-sky py-10">
		<img src="{{ Vite::asset('resources/images/photo-model.png') }}" alt="avatar" />
		<div class="flex flex-col items-center">
			<h3 class="pt-6 text-2xl">Анастасія</h3>
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
	</section>

	<section class="flex items-center justify-center p-10">Calendar</section>
</aside>
