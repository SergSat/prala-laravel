<aside
	class="min-w-[300px] fixed inset-y-0 right-0 flex flex-col items-center justify-between gap-4 min-h-screen py-8 transition duration-300 ease-linear transform translate-x-full bg-pr-beige lg:w-1/4 lg:translate-x-0 overflow-auto">
	<img width="200" height="50" src="{{ asset('images/logo-white.svg') }}" alt="logo-prala" class="h-16 w-50" />

	<section class="flex flex-col items-center w-3/4 py-10 border rounded-lg border-pr-gray-sky">
		<img width="100" height="100"
			 src="{{ Auth::user() && Auth::user()->profile_photo_path ? asset('storage/' . Auth::user()->profile_photo_path) : asset('images/no-avatar.svg') }}"
			 class="rounded-full w-24 h-24 object-cover" alt="avatar">
		<div class="flex flex-col items-center">
			<h3 class="pt-6 text-2xl">{{Auth::user()->name}}</h3>
			<p class="mt-1 font-extralight text-stone-500">
				@foreach(Auth::user()->professions as $profession)
					{{ $loop->first ? '' : ', ' }}
					{{ $profession->name }}
				@endforeach
			</p>

			@php
				$user = Auth::user();
                $professionCount = $user->professions->count();
                $totalStars = 4;
			@endphp
			<div class="flex items-center justify-between mt-3">
				@for ($i = 0; $i < $totalStars; $i++)
					@if ($i < $professionCount)
						<img class="w-5 h-5" src="{{ asset('images/star-full.svg') }}" alt="star" />
					@else
						<img class="w-5 h-5" src="{{ asset('images/star-empty.svg') }}" alt="star" />
					@endif
				@endfor
			</div>

			<div>
				@if($user->hasAnyRole('super-admin', 'admin', 'manager'))
					<a href="{{ route('admin.dashboard') }}"
					   class="flex items-center px-3 py-1 mt-2 text-sm font-medium text-pr-blue">
						{{ __('admin.admin_panel') }}
					</a>
				@endif
				<form method="POST" action="{{ route('logout') }}" x-data>
					@csrf
					<a class="flex items-center px-3 py-1 mt-2 gap-2 text-sm font-medium text-pr-blue"
					   href="{{ route('logout') }}" @click.prevent="$root.submit();" @focus="open = true"
					   @focusout="open = false">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-auto fill-pr-blue" id="sign-out-alt">
							<path fill="currentColor"
								  d="M12.59,13l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H3a1,1,0,0,0,0,2ZM12,2A10,10,0,0,0,3,7.55a1,1,0,0,0,1.8.9A8,8,0,1,1,12,20a7.93,7.93,0,0,1-7.16-4.45,1,1,0,0,0-1.8.9A10,10,0,1,0,12,2Z"></path>
						</svg>
						{{ __('admin.sign_out') }}
					</a>
				</form>
			</div>

		</div>
	</section>

	<section class="flex flex-col items-center justify-center">
		<div id="calendar"></div>
		<div class="w-10/12 py-5 mt-1 border-t border-pr-blue-sky">
			<ul>
				<li
					class="flex items-center text-balance text-sm before:mr-2 before:block before:h-1.5 before:w-1.5 before:shrink-0 before:rounded-full before:bg-pr-blue before:content-[''] sm:text-base">
					14:30 Конференція</li>
			</ul>
		</div>
	</section>
</aside>