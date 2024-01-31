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

        <div class="w-4/5 sm:max-w-[648px] h-dvh mx-auto flex flex-col">
            <img width="350" height="153" src="{{ Vite::asset('resources/images/prala_logo1.svg') }}" alt="logo-prala"
                class="mx-auto mt-16 w-26 h-11 sm:w-40 sm:h-20 md:w-80 md:h-28 ">
            <hr class="h-px mt-14 bg-white border-0">
            <form action="">
                <div class="text-center text-white mt-2">
                    <h1 class="text-3xl tracking-widest font-extralight">
                        Вхід
                    </h1>
                </div>

                <div
                    class="mt-10 w-full pt-9  px-6 min-[300px]:px-10 min-[480px]:px-12 sm:px-16 pb-20 sm:pb-40 backdrop-blur bg-white/15 rounded-2xl border border-white">
                    <div class="flex flex-col sm:flex-row justify-between gap-16 items-center">
                        <div class="w-full flex flex-col items-start justify-between md:justify-around gap-5 lg:gap-10">
                            <label for="login" class="sr-only">Login</label>
                            <div class="w-full md:mt-2">
                                <input type="text" name="login" id="login"
                                    class=" w-full border border-b border-b-white border-transparent bg-transparent text-white text-md placeholder-white placeholder:font-extralight placeholder:text-lg focus:ring-sky-200 focus:border-indigo-600"
                                    placeholder="Логін">
                            </div>
                            <label for="login" class="sr-only">Password</label>
                            <div class="w-full md:mt-2">
                                <input type="password" name="password" id="password"
                                    class="w-full border border-b border-b-white border-transparent bg-transparent text-white text-md placeholder-white placeholder:font-extralight placeholder:text-lg focus:ring-sky-200 focus:border-indigo-600"
                                    placeholder="Пароль">
                            </div>
                        </div>

                        <div
                            class="shrink-0 w-28 h-28 md:w-36 md:h-36 lg:w-52 lg:h-52 grid place-items-center bg-white rounded-full translate-x-7 sm:translate-x-0">
                            <div class="w-full h-full group grid place-content-center">
                                <a href="#"
                                    class="justify-self-center text-xl lg:text-3xl tracking-wider font-extralight text-pr-blue group-hover:text-pr-blueviolet transition-colors duration-300">
                                    Увійти
                                </a>
                                <a href="#"
                                    class="mt-2 justify-self-center transition ease-in-out delay-150 group-hover:translate-x-3 duration-200 md:block hidden">
                                    <svg width="56" height="12" viewBox="0 0 56 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            class="group-hover:group-hover:stroke-pr-blueviolet transition-colors duration-300"
                                            d="M0.368164 6.52734L54.6318 6.52734" stroke="#0038FF"
                                            stroke-width="0.669922" />
                                        <path
                                            class="group-hover:group-hover:stroke-pr-blueviolet transition-colors duration-300"
                                            d="M47.0957 11.3008L54.6323 6.52759L47.0957 1.00073" stroke="#0038FF"
                                            stroke-width="0.669922" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="mt-1 justify-self-center transition ease-in-out delay-150 group-hover:translate-x-3 duration-200 md:hidden">
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