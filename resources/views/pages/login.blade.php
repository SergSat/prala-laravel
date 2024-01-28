<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Stylesheet -->
    @vite('resources/css/app.css')
</head>

<body class="font-light">
    <div class="w-full h-dvh bg-no-repeat bg-center bg-cover"
        style="background-image: url({{ Vite::asset('resources/images/enter.png') }});">
        <div class="max-w-[648px] h-dvh mx-auto flex flex-col">
            <img width="350" height="101" src="{{ Vite::asset('resources/images/logopralabig.png') }}" alt="logo-prala" class="mx-auto mt-16">
            <hr class="h-px mt-14 bg-white border-0">
            <div class="text-center text-white mt-2">
                <h3 class="text-3xl tracking-widest font-extralight">
                    Вхід
                </h3>
            </div>

            <div class="mt-10 w-full pt-9 px-16 pb-40 backdrop-blur bg-white/15 rounded-2xl border border-white">
                <div class="flex justify-between">
                    <div class="flex flex-col items-start justify-between">
                        <input type="text" name="login" id="login">
                        <input type="password" name="password" id="password">
                    </div>

                    <div
                        class="w-28 h-28 shrink-0 md:w-20 md:h-20 lg:w-52 lg:h-52 grid place-items-center bg-white rounded-full">
                        <div class="w-full h-full rounded-full group grid place-content-center">
                            <a href="#"
                                class="justify-self-center text-xl lg:text-3xl tracking-wider font-extralight text-blue-deep group-hover:text-blueviolet transition-colors duration-300">
                                Увійти
                            </a>
                            <a href="#"
                                class="mt-2 justify-self-center transition ease-in-out delay-150 group-hover:translate-x-3 duration-200">
                                <svg width="56" height="12" viewBox="0 0 56 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        class="group-hover:group-hover:stroke-blueviolet transition-colors duration-300"
                                        d="M0.368164 6.52734L54.6318 6.52734" stroke="#302CFF"
                                        stroke-width="0.669922" />
                                    <path
                                        class="group-hover:group-hover:stroke-blueviolet transition-colors duration-300"
                                        d="M47.0957 11.3008L54.6323 6.52759L47.0957 1.00073" stroke="#302CFF"
                                        stroke-width="0.669922" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>