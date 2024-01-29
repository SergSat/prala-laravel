<header class="w-full
        lg:w-max
        lg:bg-white 
        lg:px-5 
        rounded-md 
        drop-shadow-lg
    ">
    <div class="relative lg:hidden">
        <img class="mx-auto" src="{{ Vite::asset('resources/images/logo-prala.png') }}" alt="logo-prala">
        <div class="absolute top-1/2 right-0 transform -translate-y-1/2 flex flex-col gap-1 lg:hidden">
            <span class="w-7 h-0.5 bg-pr-blue"></span>
            <span class="w-7 h-0.5 bg-pr-blue"></span>
            <span class="w-7 h-0.5 bg-pr-blue"></span>
        </div>
    </div>

    {{-- Desctop navigation --}}
    <nav class="hidden lg:block">
        <ul class="
                flex 
                md:gap-4 
                xl:gap-7 
                py-4 
                text-base 
            ">
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