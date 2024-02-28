<aside
	class="min-w-[300px] fixed inset-y-0 right-0 flex flex-col items-center justify-between min-h-screen py-10 transition duration-300 ease-linear transform translate-x-full bg-pr-beige lg:w-1/4 lg:translate-x-0">
	<img width="200" height="50" src="{{ Vite::asset('resources/images/prala_logo1.svg') }}" alt="logo-prala"
		class="h-16 w-50" />

	<section class="flex flex-col items-center w-3/4 py-10 border rounded-lg border-pr-gray-sky">
		<img width="100" height="100" src="{{ Vite::asset('resources/images/photo-model.png') }}" alt="avatar"
			class="w-24 h-24" />
		<div class="flex flex-col items-center">
			<h3 class="pt-6 text-2xl">Анастасія</h3>
			<p class="mt-1 font-extralight text-stone-500">Кулінарний геній</p>
			<div class="flex items-center justify-between w-3/4 mt-3">
				<img class="w-5 h-5" src="{{ Vite::asset('resources/images/starfull.svg') }}" alt="star" />
				<img class="w-5 h-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star" />
				<img class="w-5 h-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star" />
				<img class="w-5 h-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star" />
			</div>
		</div>
	</section>

	<section class="flex flex-col items-center justify-center gap-2">
		<div id="calendar"></div>
		<div class="w-10/12 py-5 border-t border-pr-blue-sky">
			<ul>
				<li
					class="flex items-center text-balance text-sm before:mr-2 before:block before:h-1.5 before:w-1.5 before:shrink-0 before:rounded-full before:bg-pr-blue before:content-[''] sm:text-base">
					14:30 Конференція</li>
			</ul>
		</div>
	</section>
</aside>