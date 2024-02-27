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
		<div class="mx-auto flex w-4/5 flex-col sm:max-w-[648px]">
			<img width="350" height="153" src="{{ Vite::asset('resources/images/prala_logo1.svg') }}" alt="logo-prala"
				class="mx-auto mt-16 w-26 h-11 sm:h-20 sm:w-40 md:h-28 md:w-80" />
			<hr class="mt-14 h-px border-0 bg-white max-[380px]:mt-6" />
			<form action="">
				<div class="mt-2 text-center text-white">
					<h1 class="text-3xl tracking-widest font-extralight">Вхід</h1>
				</div>

				<div
					class="mb-5 mt-10 w-full rounded-2xl border border-white bg-white/15 px-6 pb-20 pt-9 backdrop-blur max-[380px]:px-10 max-[380px]:pb-10 max-[380px]:pt-8 min-[480px]:px-12 sm:mb-10 sm:px-16 sm:pb-40">
					<div class="flex flex-col items-center justify-between gap-16 sm:flex-row">
						<div class="flex flex-col items-start justify-between w-full gap-5 md:justify-around lg:gap-10">
							<label for="login" class="sr-only">Login</label>
							<div class="w-full md:mt-2">
								<input type="text" name="login" id="login"
									class="w-full text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
									placeholder="Логін" />
							</div>
							<label for="password" class="sr-only">Password</label>
							<div class="w-full md:mt-2">
								<input type="password" name="password" id="password"
									class="w-full text-3xl placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
									placeholder="Пароль" />
							</div>
						</div>

						<div
							class="grid bg-white rounded-full h-28 w-28 shrink-0 place-items-center md:h-36 md:w-36 lg:h-52 lg:w-52">
							<div class="grid w-full h-full group place-content-center">
								<a href="{{ route('home') }}"
									class="text-xl tracking-wider transition-colors duration-200 justify-self-center font-extralight text-pr-blue group-hover:text-pr-blueviolet lg:text-3xl">
									Увійти
								</a>
								<a href="{{ route('home') }}"
									class="hidden mt-2 transition duration-200 ease-in-out delay-150 justify-self-center group-hover:translate-x-3 md:block">
									<svg width="56" height="12" viewBox="0 0 56 12" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											class="transition-colors duration-200 group-hover:group-hover:stroke-pr-blueviolet"
											d="M0.368164 6.52734L54.6318 6.52734" stroke="#0038FF"
											stroke-width="0.669922" />
										<path
											class="transition-colors duration-200 group-hover:group-hover:stroke-pr-blueviolet"
											d="M47.0957 11.3008L54.6323 6.52759L47.0957 1.00073" stroke="#0038FF"
											stroke-width="0.669922" />
									</svg>
								</a>
								<a href="{{ route('home') }}"
									class="mt-1 transition duration-200 ease-in-out delay-150 justify-self-center group-hover:translate-x-3 md:hidden">
									<svg width="28" height="6" viewBox="0 0 28 6" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M0.433594 3.26367L27.5654 3.26367" stroke="#0038FF"
											stroke-width="0.334961" />
										<path d="M23.7969 5.65039L27.5652 3.26379L23.7969 0.500366" stroke="#0038FF"
											stroke-width="0.334961" />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>