<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Prala</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net" />
	<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

	<!-- Stylesheet -->
	@vite('resources/css/app.css')
</head>

<body class="font-light scroll-smooth lg:overflow-auto">
	<div class="relative flex h-min">
		<div class="w-full min-h-screen bg-pr-beige lg:w-3/4 lg:bg-pr-blue-sky">
			<!-- Header -->
			@include('parts.header')

			<!-- Main -->
			<main class="px-5 pb-5 sm:px-8 md:px-10 lg:px-5">
				@yield('content')
			</main>
		</div>

		<!-- Sidebar -->
		@include('parts.sidebar')
	</div>

	<!-- Modal -->
	@include('parts.modal')
	<!-- Scripts -->
	@vite('resources/js/app.js')
</body>

</html>