<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Laravel</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net" />
	<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

	<!-- Stylesheet -->
	@vite('resources/css/app.css')
</head>

<body class="flex min-h-screen items-center justify-center bg-cover bg-fixed bg-center bg-no-repeat font-light"
	style="background-image: url({{ Vite::asset('resources/images/enter_min.png') }})">
	<div class="h-full w-full">
		<div class="mx-auto flex h-dvh w-4/5 flex-col sm:max-w-[648px]">
			<img width="350" height="153" src="{{ Vite::asset('resources/images/prala_logo1.svg') }}" alt="logo-prala"
				class="w-26 mx-auto mt-16 h-11 sm:h-20 sm:w-40 md:h-28 md:w-80" />
			<hr class="mt-14 h-px border-0 bg-white max-[380px]:mt-6" />
			<form action="">
				<div class="mt-2 text-center text-white">
					<h1 class="text-3xl font-extralight tracking-widest">Вхід</h1>
				</div>

				<div
					class="mb-5 mt-10 w-full rounded-2xl border border-white bg-white/15 px-6 pb-12 pt-9 backdrop-blur max-[380px]:px-5 max-[380px]:pb-10 max-[380px]:pt-8 min-[480px]:px-12 sm:mb-10 sm:px-16 sm:pb-16">
					<div class="flex flex-col items-center justify-between gap-16">
						<div class="flex w-full flex-col items-start justify-between gap-5 md:justify-around lg:gap-10">
							<label for="login" class="sr-only">Login</label>
							<div class="w-full md:mt-2">
								<input type="text" name="login" id="login"
									class="w-full border border-b border-solid border-transparent border-b-white bg-transparent text-lg text-pr-blue placeholder-white placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
									placeholder="Логін" />
							</div>
							<label for="login" class="sr-only">Password</label>
							<div class="w-full md:mt-2">
								<input type="password" name="password" id="password"
									class="w-full border border-b border-solid border-transparent border-b-white bg-transparent text-3xl text-pr-blue placeholder-white placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
									placeholder="Пароль" />
							</div>
						</div>

						<div
							class="group grid w-28 shrink-0 place-items-center rounded-lg border border-white bg-transparent hover:border-pr-blue/40 hover:bg-pr-blue/5 md:w-36">
							<a href="{{ route('home') }}"
								class="w-full justify-self-center p-2 text-center text-xl font-extralight tracking-wider text-white transition-colors duration-300 focus:border-b-2 focus:border-pr-blue/40 focus:outline-none focus:ring-0 group-hover:text-pr-blue/60 md:p-4 lg:text-3xl">
								Увійти
							</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>