<header class="lg:w-max lg:bg-white lg:mt-5 lg:ml-5 lg:px-5 rounded-md drop-shadow-lg">
    <section class="relative py-5 lg:hidden">
        <img class="mx-auto" src="{{ Vite::asset('resources/images/logo-prala.png') }}" alt="logo-prala">
        <button id="hamburger-button"
            class="absolute top-1/2 right-5 transform -translate-y-1/2 text-4xl text-pr-blue hidden cursor-pointer">
            &#9776;
        </button>
        <button class="absolute top-1/2 right-5 transform -translate-y-1/2 text-5xl text-pr-blue cursor-pointer">
            &times;
        </button>
    </section>
    <section class="bg-white min-h-screen pt-9 px-5 sm:px-10">
        <h3 class="text-center text-2xl text-stone-500 font-extralight">Меню</h3>
        <nav>
            <ul class="mt-10 flex flex-col gap-5 text-2xl">
                <li><a href="#" class="--pr-active w-full text-center py-6 hover:opacity-60">Кабінет</a></li>
                <li><a href="#" class="w-full text-center py-6 hover:opacity-60">Бібліотека</a></li>
                <li><a href="#" class="w-full text-center py-6 hover:opacity-60">Налаштування</a></li>
                <li><a href="#" class="w-full text-center py-6 hover:opacity-60">Голосування</a></li>
                <li><a href="#" class="w-full text-center py-6 hover:opacity-60">Блог</a></li>
                <li><a href="#" class="w-full text-center py-6 hover:opacity-60">Обов’язки та компетенції</a></li>
            </ul>
        </nav>
    </section>

    {{-- Desctop navigation --}}
    <nav class="hidden lg:block">
        <ul class="flex md:gap-4 xl:gap-7 py-4 text-base">
            <li><a href="#" class="--pr-active">Кабінет</a></li>
            <li><a href="#">Бібліотека</a></li>
            <li><a href="#">Налаштування</a></li>
            <li><a href="#">Голосування</a></li>
            <li><a href="#">HR</a></li>
            <li><a href="#">Блог</a></li>
            <li><a href="#" class="whitespace-nowrap">Обов’язки та компетенції</a></li>
        </ul>
    </nav>
</header>