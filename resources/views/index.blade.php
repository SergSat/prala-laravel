@extends('layouts.app')

@section('content')
<article class="w-full lg:pt-24 grid grid-cols-1 lg:grid-cols-2 grid-flow-row gap-5">
    <h1 class="sr-only">Мої завдання, навчання та новини</h1>

    <div class="mx-auto mt-10 lg:hidden">
        <div class="flex items-center">
            <img src="{{ Vite::asset('resources/images/photo-model.png') }}" alt="avatar">
        </div>
        <div>

        </div>
    </div>

    <!-- Tasks -->
    <section class="mx-auto lg:mx-0 flex flex-col">
        <h3 class="text-xl lg:text-2xl text-pr-blue pl-5 pt-5">Мої завдання</h3>
        <div
            class="max-w-xl min-w-16 mt-5 p-5 flex items-center justify-between gap-4 bg-white rounded-md      drop-shadow-lg">
            <p
                class="text-sm sm:text-base text-balance flex items-center 
                before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                Тест “Массажист Стоп Начальника” Тест “Массажист Стоп Начальника” Тест “Массажист
                Стоп Начальника” Тест “Массажист Стоп Начальника”
            </p>
            <p class="text-sm sm:text-base whitespace-nowrap">В очікуванні</p>
        </div>

        <div
            class="--pr-success max-w-xl min-w-16 mt-5 p-5 flex items-center justify-between bg-white rounded-md drop-shadow-lg">
            <p
                class="text-sm sm:text-base text-balance flex items-center before:mr-2 before:block before:content-['']  before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                Тест “Массажист Стоп Начальника”
            </p>
            <p class="text-sm sm:text-base whitespace-nowrap">Завершено</p>
        </div>

        <div class="max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
            <p
                class="text-sm sm:text-base text-balance flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                Тест “Массажист Стоп Начальника”
            </p>
            <p class="text-sm sm:text-base whitespace-nowrap">В очікуванні</p>
        </div>

        <div
            class="--pr-success max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
            <div class="flex items-center">
                <p
                    class="text-sm sm:text-base text-balance flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                    Тест “Массажист Стоп Начальника”
                </p>
            </div>
            <p class="text-sm sm:text-base whitespace-nowrap">Завершено</p>
        </div>

        <div
            class="--pr-success max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
            <div class="flex items-center">
                <p
                    class="text-sm sm:text-base text-balance flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                    Тест “Массажист Стоп Начальника”
                </p>
            </div>
            <p class="text-sm sm:text-base whitespace-nowrap">Завершено</p>
        </div>

        <div class="max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
            <p
                class="text-sm sm:text-base text-balance flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                Тест “Массажист Стоп Начальника”
            </p>
            <p class="text-sm sm:text-base whitespace-nowrap">В очікуванні</p>
        </div>

        <div class="max-w-xl min-w-16 mt-5 flex items-center justify-between bg-white rounded-md p-5 drop-shadow-lg">
            <p
                class="text-sm sm:text-base text-balance flex items-center before:mr-2 before:block before:content-[''] before:w-2.5 before:h-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft">
                Тест “Массажист Стоп Начальника”
            </p>
            <p class="text-sm sm:text-base whitespace-nowrap">В очікуванні</p>
        </div>
    </section>
    <!-- Tasks -->

    <!-- Training -->
    <section class="block">
        <div
            class="mx-auto mt-7 lg:mt-0 lg:mx-0 px-10 pb-10 max-w-xl min-w-16 flex flex-col bg-white text-center rounded-xl drop-shadow-lg">
            <h3 class="text-xl lg:text-2xl text-pr-blue pt-5">Навчання</h3>
            <div class="grid grid-rows-4">
                <div class="relative bg-pr-gray-soft mt-7 flex rounded-lg">
                    <a href="#" class="w-full py-12">
                        <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">Вантажник
                        </p>
                    </a>
                </div>

                <div class="relative bg-pr-gray-soft mt-7 flex rounded-lg">
                    <a href="#" class="w-full py-12">
                        <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">Водій
                        </p>
                    </a>
                </div>


                <div class="relative bg-pr-gray-soft mt-7 flex rounded-lg">
                    <a href="#" class="w-full py-12">
                        <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">Експедитор
                        </p>
                    </a>
                </div>


                <div class="relative bg-pr-gray-soft mt-7 flex rounded-lg">
                    <a href="#" class="w-full py-12">
                        <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">Менеджер з
                            постачання
                        </p>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- Training -->

    <!-- News -->
    <section class="max-w-xl pt-5 mx-auto lg:mx-0">
        <div class="px-6 flex justify-between">
            <h3 class="text-xl lg:text-2xl text-pr-blue">Новини</h3>
            <div class="group grid place-items-center gap-y-1">
                <a href="#" class="text-pr-blue group-hover:text-pr-blueviolet transition-colors duration-300">
                    Читати все
                </a>
                <a href="#" class="transition ease-in-out delay-150 group-hover:translate-x-3 duration-200">
                    <svg width="56" height="12" viewBox="0 0 56 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="group-hover:group-hover:stroke-pr-blueviolet transition-colors duration-300"
                            d="M0.368164 6.52734L54.6318 6.52734" stroke="#302CFF" stroke-width="0.669922" />
                        <path class="group-hover:group-hover:stroke-pr-blueviolet transition-colors duration-300"
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
                        class="text-lg flex items-center before:mr-2 before:block before:content-[''] before:w-2 before:h-2 before:shrink-0 before:rounded-full before:bg-pr-blue">
                        Заголовок новини 1
                    </h4>
                    <p class="text-pr-darklategray pt-3 pl-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, numquam illum est
                        aliquid, quasi repellat omnis quam quibusdam in laborum sunt animi suscipit
                        facilis doloremque accusamus autem veritatis repellendus quas.
                    </p>
                    <hr class="h-px my-5 ml-5 bg-pr-gray-sky border-0">
                </li>
                <li>
                    <h4
                        class="text-lg flex items-center before:mr-2 before:block before:content-[''] before:w-2 before:h-2 before:shrink-0 before:rounded-full before:bg-pr-blue">
                        Заголовок новини 2
                    </h4>
                    <p class="text-pr-darklategray pt-3 pl-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, numquam illum est
                        aliquid, quasi repellat omnis quam quibusdam in laborum sunt animi suscipit
                        facilis doloremque accusamus autem veritatis repellendus quas.
                    </p>
                    <hr class="h-px my-5 ml-5  bg-pr-gray-sky border-0">
                </li>
                <li>
                    <h4
                        class="text-lg flex items-center before:mr-2 before:block before:content-[''] before:w-2 before:h-2 before:shrink-0 before:rounded-full before:bg-pr-blue">
                        Заголовок новини 3
                    </h4>
                    <p class=" text-pr-darklategray pt-3 pl-4">
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
@endsection