<x-authentication-layout>
    <div class="mx-auto flex h-dvh w-4/5 flex-col sm:max-w-[648px]">
        <img width="350" height="153" src="{{ Vite::asset('resources/images/prala_logo1.svg') }}" alt="logo-prala"
            class="mx-auto mt-12 w-26 h-11 sm:h-20 sm:w-40 md:h-28 md:w-80" />
        <hr class="mt-8 h-px bg-white max-[380px]:mt-6" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mt-2 text-center text-white">
                <h1 class="text-3xl tracking-widest font-extralight">Вхід</h1>
                <h2 class="text-xl tracking-widest font-extralight">{{ __('') }}</h2>
                @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
                @endif
            </div>
            <div
                class="mt-6 w-full rounded-2xl border border-white bg-white/15 px-6 pb-12 pt-6 backdrop-blur max-[380px]:px-5 max-[380px]:pb-10 max-[380px]:pt-6 min-[480px]:px-10 sm:px-12">
                <div class="flex flex-col items-center justify-between gap-8">
                    <div class="flex flex-col items-start justify-between w-full gap-5 md:justify-around">
                        <div class="w-full">
                            <x-label for="email" class="sr-only" value="{{ __('Email') }}" />
                            <x-input
                                class="w-full text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                id="email" type="email" name="email" :value="old('email')" required autofocus
                                placeholder="Email" />
                        </div>
                        <div class="w-full">
                            <x-label for="password" value="{{ __('Password') }}" class="sr-only" />
                            <x-input id="password" type="password" name="password"
                                class="w-full text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                equired autocomplete="current-password" placeholder="Пароль" />
                        </div>
                    </div>

                    <div>
                        @if (Route::has('password.request'))
                        <div class="text-center">
                            <a class="text-white text-md hover:text-pr-blue/60" href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                        </div>
                        @endif
                        <div
                            class="grid mt-3 bg-transparent border border-white rounded-lg group w-28 shrink-0 place-items-center hover:border-pr-blue/40 hover:bg-pr-blue/5 md:w-36">
                            <x-button
                                class="w-full px-2 py-1 text-xl tracking-wider text-center text-white transition-colors duration-200 justify-self-center font-extralight focus:border-b-2 focus:border-pr-blue/40 focus:outline-none focus:ring-0 group-hover:text-pr-blue/60 md:p-3 lg:text-2xl">
                                {{ __('Увійти') }}
                            </x-button>
                        </div>
                    </div>

                    <x-validation-errors class="" />
                </div>
            </div>
            <div class="pt-5">
                <div class="text-sm text-white">
                    {{ __('Немає акаунту?') }} <a class="ml-1 font-medium text-pr-blue/80 hover:text-pr-blue/60"
                        href="{{ route('register') }}">{{ __('Зареєструватись') }}</a>
                </div>
            </div>
        </form>
    </div>
</x-authentication-layout>