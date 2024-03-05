<x-authentication-layout>
    <div class="mx-auto flex h-dvh w-4/5 flex-col sm:max-w-[648px]">
        <img width="350" height="153" src="{{ Vite::asset('resources/images/prala_logo1.svg') }}" alt="logo-prala"
             class="mx-auto mt-16 w-26 h-11 sm:h-20 sm:w-40 md:h-28 md:w-80" />
        <hr class="mt-14 h-px border-0 bg-white max-[380px]:mt-6" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-2 text-center text-white">
                <h1 class="text-3xl tracking-widest font-extralight">Сторінка Реєстрації</h1>
            </div>

            <div class="mb-5 mt-10 w-full rounded-2xl border border-white bg-white/15 px-6 pb-12 pt-9 backdrop-blur max-[380px]:px-5 max-[380px]:pb-10 max-[380px]:pt-8 min-[480px]:px-12 sm:mb-10 sm:px-16 sm:pb-16">
                <div class="flex flex-col items-center justify-between gap-16">
                    <div class="flex flex-col items-start justify-between w-full gap-5 md:justify-around lg:gap-10">
                        <div class="w-full md:mt-2">
                            <x-label for="name" class="sr-only">Full Name</x-label>
                            <x-input
                                    class="text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                    id="name"
                                    type="text"
                                    name="name"
                                    placeholder="Логін"
                                    :value="old('name')"
                                    required autofocus autocomplete="name" />
                        </div>
                        <div class="w-full md:mt-2">
                            <x-label for="email" class="sr-only">Email Address</x-label>
                            <x-input
                                    class="text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                    id="email"
                                    type="text"
                                    name="email"
                                    placeholder="Ваш Email"
                                    :value="old('email')"
                                    required autocomplete="email" />
                        </div>
                        <div class="w-full md:mt-2">
                            <x-label for="password" value="Password" class="sr-only" />
                            <x-input
                                    class="w-full text-3xl placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                    id="password"
                                    type="password"
                                    name="password"
                                    placeholder="Пароль"
                                    required
                                    autocomplete="new-password" />
                        </div>

                        <div class="w-full md:mt-2">
                            <x-label for="password_confirmation" value="Confirm Password" class="sr-only" />
                            <x-input class="w-full text-3xl placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    placeholder="Підтвердіть ваш пароль"
                                    required
                                    autocomplete="new-password" />
                        </div>
                    </div>

                    <div class="grid bg-transparent border border-white rounded-lg group shrink-0 place-items-center hover:border-pr-blue/40 hover:bg-pr-blue/5">
                        <x-button class="w-full p-2 text-xl tracking-wider text-center text-white transition-colors duration-200 justify-self-center font-extralight focus:border-b-2 focus:border-pr-blue/40 focus:outline-none focus:ring-0 group-hover:text-pr-blue/60 md:p-4 lg:text-3xl">
                            Зареєструватись
                        </x-button>
                    </div>
                    <x-validation-errors class="mt-4" />
                </div>
            </div>
        </form>
    </div>
</x-authentication-layout>