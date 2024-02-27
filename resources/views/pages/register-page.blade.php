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

<body class="flex items-center justify-center min-h-screen font-light bg-fixed bg-center bg-no-repeat bg-cover"
	style="background-image: url({{ Vite::asset('resources/images/enter_min.png') }})">
	<div class="w-full h-full">
		<div class="mx-auto flex h-dvh w-4/5 flex-col sm:max-w-[648px]">
			<img width="350" height="153" src="{{ Vite::asset('resources/images/prala_logo1.svg') }}" alt="logo-prala"
				class="mx-auto mt-16 w-26 h-11 sm:h-20 sm:w-40 md:h-28 md:w-80" />
			<hr class="mt-14 h-px border-0 bg-white max-[380px]:mt-6" />
			<form action="">
				<div class="mt-2 text-center text-white">
					<h1 class="text-3xl tracking-widest font-extralight">Сторінка Реєстрації</h1>
				</div>

				<div
					class="mb-5 mt-10 w-full rounded-2xl border border-white bg-white/15 px-6 pb-12 pt-9 backdrop-blur max-[380px]:px-5 max-[380px]:pb-10 max-[380px]:pt-8 min-[480px]:px-12 sm:mb-10 sm:px-16 sm:pb-16">
					<div class="flex flex-col items-center justify-between gap-16">
						<div class="flex flex-col items-start justify-between w-full gap-5 md:justify-around lg:gap-10">
							<label for="full-name" class="sr-only">Full Name</label>
							<div class="w-full md:mt-2">
								<input type="text" name="full-name" id="full-name"
									class="w-full text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
									placeholder="Логін" />
							</div>
							<label for="email" class="sr-only">Email Address</label>
							<div class="w-full md:mt-2">
								<input type="email" name="email" id="email"
									class="w-full text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
									placeholder="Ваш Email" />
							</div>
							<label for="password" class="sr-only">Password</label>
							<div class="w-full md:mt-2">
								<input type="password" name="password" id="password"
									class="w-full text-3xl placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
									placeholder="Пароль" />
							</div>
							<label for="confirm-password" class="sr-only">Confirm Password</label>
							<div class="w-full md:mt-2">
								<input type="confirm-password" name="confirm-password" id="confirm-password"
									class="w-full text-3xl placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
									placeholder="Підтвердіть ваш пароль" />
							</div>
						</div>

						<div
							class="grid bg-transparent border border-white rounded-lg group shrink-0 place-items-center hover:border-pr-blue/40 hover:bg-pr-blue/5">
							<a href="{{ route('home') }}"
								class="w-full p-2 text-xl tracking-wider text-center text-white transition-colors duration-200 justify-self-center font-extralight focus:border-b-2 focus:border-pr-blue/40 focus:outline-none focus:ring-0 group-hover:text-pr-blue/60 md:p-4 lg:text-3xl">
								Зареєструватись
							</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>