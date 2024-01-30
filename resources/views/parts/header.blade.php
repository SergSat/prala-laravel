<header class="">
    <section class="relative py-5 lg:hidden">
        <img class="mx-auto" src="{{ Vite::asset('resources/images/logo-prala.png') }}" alt="logo-prala">
        <button id="hamburger-button"
            class="absolute w-14 right-5 top-1/2 transform -translate-y-1/2 text-4xl text-pr-blue cursor-pointer w-8 h-8">
            <span
                class="bg-pr-blue w-8 h-1 rounded absolute top-4 right-5 -mt-0.5 transition-all duration-500 drop-shadow before:content-[''] before:bg-pr-blue before:w-8 before:h-1 before:absolute before:rounded before:-translate-x-4 before:-translate-y-2.5 before:transition-all before:duration-500 before:drop-shadow after:bg-pr-blue after:w-8 after:h-1 after:absolute after:rounded after:-translate-x-4 after:translate-y-2.5 after:transition-all after:duration-500 after:drop-shadow"></span>
        </button>
    </section>
    <section id="mobile-menu"
        class="fixed left-0 right-0 bg-white min-h-screen pt-9 px-5 sm:px-10 lg:hidden transition-all -translate-x-full duration-500 z-30">
        <h3 class="text-center text-2xl text-stone-500 font-extralight">Меню</h3>
        <nav>
            <ul class="mt-10 flex flex-col gap-5 text-2xl">
                <li><a href="#" class="--pr-active w-full text-center hover:opacity-60">Кабінет</a></li>
                <li><a href="#" class="w-full text-center hover:opacity-60">Бібліотека</a></li>
                <li><a href="#" class="w-full text-center hover:opacity-60">Налаштування</a></li>
                <li><a href="#" class="w-full text-center hover:opacity-60">Голосування</a></li>
                <li><a href="#" class="w-full text-center hover:opacity-60">Блог</a></li>
                <li><a href="#" class="w-full text-center hover:opacity-60">Обов’язки та компетенції</a></li>
            </ul>
        </nav>
    </section>

    {{-- Desctop navigation --}}
    <section
        class="hidden lg:block lg:w-max lg:bg-white lg:mt-5 lg:ml-5 lg:px-5 rounded-md animate-open-menu drop-shadow-lg">
        <nav>
            <ul class="flex gap-5 xl:gap-7 py-4 text-base">
                <li><a href="#" class="--pr-active">Кабінет</a></li>
                <li><a href="#">Бібліотека</a></li>
                <li><a href="#">Налаштування</a></li>
                <li><a href="#">Голосування</a></li>
                <li><a href="#">Блог</a></li>
                <li><a href="#" class="whitespace-nowrap">Обов’язки та компетенції</a></li>
            </ul>
        </nav>
    </section>
</header>