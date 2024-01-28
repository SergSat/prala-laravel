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
<body class="font-light scroll-smooth">
<div id="app" class="relative flex h-min">
    <div class="w-full lg:w-3/4 bg-pr-blue-sky p-5">

        <!-- Header -->
        <header class="max-w-fit bg-white px-5 rounded-md drop-shadow-lg">
            <nav>
                <ul class="flex md:gap-3 xl:gap-7 py-4 text-xl">
                    <li><a href="#" class="active:underline active:text-pr-blue">Кабінет</a></li>
                    <li><a href="#">Бібліотека</a></li>
                    <li><a href="#">Налаштування</a></li>
                    <li><a href="#">Голосування</a></li>
                    <li><a href="#">HR</a></li>
                    <li><a href="#">Блог</a></li>
                    <li><a href="#" class="whitespace-nowrap">Обов’язки та компетенції</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <main>
            <article class="w-full pt-28 grid grid-cols-1 md:grid-cols-2 grid-flow-row gap-5">
                <h1 class="sr-only">Мої завдання, навчання та новини</h1>

                <!-- Tasks -->
                <section class="flex flex-col">
                    <h3 class="text-xl text-pr-blue pl-5 pt-5">Мої завдання</h3>
                    <div
                        class="max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
                        <p
                            class="flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                            Тест “Массажист Стоп Начальника” Тест “Массажист Стоп Начальника” Тест “Массажист
                            Стоп Начальника” Тест “Массажист Стоп Начальника”
                        </p>
                        <p class="whitespace-nowrap">В очікуванні</p>
                    </div>

                    <div
                        class="--pr-success max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
                        <p
                            class="flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                            Тест “Массажист Стоп Начальника”
                        </p>
                        <p class="whitespace-nowrap">Завершено</p>
                    </div>

                    <div
                        class="max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
                        <p
                            class="flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                            Тест “Массажист Стоп Начальника”
                        </p>
                        <p class="whitespace-nowrap">В очікуванні</p>
                    </div>

                    <div
                        class="--pr-success max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
                        <div class="flex items-center">
                            <p
                                class="flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                                Тест “Массажист Стоп Начальника”
                            </p>
                        </div>
                        <p class="whitespace-nowrap">Завершено</p>
                    </div>

                    <div
                        class="--pr-success max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
                        <div class="flex items-center">
                            <p
                                class="flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                                Тест “Массажист Стоп Начальника”
                            </p>
                        </div>
                        <p class="whitespace-nowrap">Завершено</p>
                    </div>

                    <div
                        class="max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
                        <p
                            class="flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                            Тест “Массажист Стоп Начальника”
                        </p>
                        <p class="whitespace-nowrap">В очікуванні</p>
                    </div>

                    <div
                        class="max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
                        <p
                            class="flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                            Тест “Массажист Стоп Начальника”
                        </p>
                        <p class="whitespace-nowrap">В очікуванні</p>
                    </div>
                </section>
                <!-- Tasks -->

                <!-- Training -->
                <section>
                    <div class="px-10 pb-10 bg-white text-center rounded-xl drop-shadow-lg">
                        <h3 class="text-xl text-pr-blue pt-5">Навчання</h3>
                        <div class="grid grid-rows-4">
                            <div class="relative bg-pr-gray-soft mt-7 rounded-lg w-full h-24 flex text-center">
                                <a href="#" class="--pr-abs-pos-center">Вантажник</a>
                            </div>

                            <div class="relative bg-pr-gray-soft mt-7 rounded-lg w-full h-24 flex text-center">

                                <a href="#" class="--pr-abs-pos-center">Водій</a>
                            </div>

                            <div class="relative bg-pr-gray-soft mt-7 rounded-lg w-full h-24 flex text-center">

                                <a href="#" class="--pr-abs-pos-center">Експедитор</a>
                            </div>

                            <div class="relative bg-pr-gray-soft mt-7 rounded-lg w-full h-24 flex text-center">

                                <a href="#" class="--pr-abs-pos-center">Закупник</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Training -->

                <!-- News -->
                <section class="max-w-xl pt-5">
                    <div class="px-6 flex justify-between">
                        <h3 class="text-xl text-pr-blue">Новини</h3>
                        <div class="group grid place-items-center gap-y-1">
                            <a href="#"
                               class="text-pr-blue group-hover:text-pr-blueviolet transition-colors duration-300">
                                Читати все
                            </a>
                            <a href="#"
                               class="transition ease-in-out delay-150 group-hover:translate-x-3 duration-200">
                                <svg width="56" height="12" viewBox="0 0 56 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            class="group-hover:group-hover:stroke-pr-blueviolet transition-colors duration-300"
                                            d="M0.368164 6.52734L54.6318 6.52734" stroke="#302CFF"
                                            stroke-width="0.669922" />
                                    <path
                                            class="group-hover:group-hover:stroke-pr-blueviolet transition-colors duration-300"
                                            d="M47.0957 11.3008L54.6323 6.52759L47.0957 1.00073" stroke="#302CFF"
                                            stroke-width="0.669922" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="bg-white mt-5 py-7 rounded-lg drop-shadow-lg">
                        <ul class="px-6">
                            <li>
                                <h4
                                    class="flex items-center before:mr-2 before:block before:content-[''] before:w-2 before:h-2 before:shrink-0 before:rounded-full before:bg-pr-blue">
                                    Заголовок новини 1
                                </h4>
                                <p class="text-pr-brown-gray pt-3 pl-4">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, numquam illum est
                                    aliquid, quasi repellat omnis quam quibusdam in laborum sunt animi suscipit
                                    facilis doloremque accusamus autem veritatis repellendus quas.
                                </p>
                                <hr class="h-px my-5 ml-5 bg-pr-gray-sky border-0">
                            </li>
                            <li>
                                <h4
                                    class="flex items-center before:mr-2 before:block before:content-[''] before:w-2 before:h-2 before:shrink-0 before:rounded-full before:bg-pr-blue">
                                    Заголовок новини 1
                                </h4>
                                <p class="text-pr-brown-gray pt-3 pl-4">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, numquam illum est
                                    aliquid, quasi repellat omnis quam quibusdam in laborum sunt animi suscipit
                                    facilis doloremque accusamus autem veritatis repellendus quas.
                                </p>
                                <hr class="h-px my-5 ml-5  bg-pr-gray-sky border-0">
                            </li>
                            <li>
                                <h4 class="flex items-center before:mr-2 before:block before:content-[''] before:w-2 before:h-2 before:shrink-0 before:rounded-full before:bg-pr-blue">
                                Заголовок новини 1
                                </h4>
                                <p class=" text-pr-brown-gray pt-3 pl-4">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, numquam illum est
                                    aliquid, quasi repellat omnis quam quibusdam in laborum sunt animi suscipit
                                    facilis doloremque accusamus autem veritatis repellendus quas.
                                </p>
                                <hr class="h-px my-5 ml-5  bg-pr-gray-sky border-0">
                            </li>
                        </ul>
                    </div>
                </section>
                <!-- News -->

            </article>
        </main>
    </div>

    <!-- Sidebar -->
    <aside
            class="lg:w-1/4 fixed inset-y-0 right-0 py-7 min-h-screen bg-pr-beige flex flex-col items-center justify-between">
        <img src="{{ Vite::asset('resources/images/logo-prala.png') }}" alt="logo-prala">

        <section class="w-3/4 py-10 flex flex-col items-center border border-pr-gray-sky rounded-lg">
            <img src="{{ Vite::asset('resources/images/photo-model.png') }}" alt="avatar">
            <div class="flex flex-col items-center">
                <h3 class="text-xl pt-6">Анастасія</h3>
                <p class="mt-1 text-black-soft/45">Кулінарний геній</p>
                <div class="rating w-3/4 flex items-center justify-between mt-3">
                    <img class="w-5 h-5" src="{{ Vite::asset('resources/images/starfull.svg') }}" alt="star">
                    <img class="w-5 h-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star">
                    <img class="w-5 h-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star">
                    <img class="w-5 h-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star">
                </div>
            </div>
        </section>

        <section class="flex items-center justify-center p-10">
            Calendar
        </section>
    </aside>
</div>
</body>
</html>
