<x-authentication-layout>
    <div class="mx-auto flex h-dvh w-4/5 flex-col sm:max-w-[648px]">
        <img width="350" height="153" src="{{ Vite::asset('resources/images/prala_logo1.svg') }}" alt="logo-prala"
             class="mx-auto mt-16 w-26 h-11 sm:h-20 sm:w-40 md:h-28 md:w-80" />
        <hr class="mt-14 h-px border-0 bg-white max-[380px]:mt-6" />
        <form action="">
            <div class="mt-2 text-center text-white">
                <h1 class="text-3xl tracking-widest font-extralight">Вхід</h1>
            </div>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="mb-5 mt-10 w-full rounded-2xl border border-white bg-white/15 px-6 pb-12 pt-9 backdrop-blur max-[380px]:px-5 max-[380px]:pb-10 max-[380px]:pt-8 min-[480px]:px-12 sm:mb-10 sm:px-16 sm:pb-16">
                <div class="flex flex-col items-center justify-between gap-16">
                    <div class="flex flex-col items-start justify-between w-full gap-5 md:justify-around lg:gap-10">
                        <label for="login" class="sr-only">Login</label>
                        <div class="w-full md:mt-2">
                            <input type="text" name="login" id="login"
                                   class="w-full text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                   placeholder="Логін" />
                        </div>
                        <label for="password" class="sr-only">Password</label>
                        <div class="w-full md:mt-2">
                            <input type="password" name="password" id="password"
                                   class="w-full text-3xl placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                   placeholder="Пароль" />
                        </div>
                    </div>

                    <div
                            class="grid bg-transparent border border-white rounded-lg group w-28 shrink-0 place-items-center hover:border-pr-blue/40 hover:bg-pr-blue/5 md:w-36">
                        <a href="{{ route('home') }}"
                           class="w-full p-2 text-xl tracking-wider text-center text-white transition-colors duration-200 justify-self-center font-extralight focus:border-b-2 focus:border-pr-blue/40 focus:outline-none focus:ring-0 group-hover:text-pr-blue/60 md:p-4 lg:text-3xl">
                            Увійти
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('Welcome back!') }} ✨</h1>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif   
    <!-- Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />                
            </div>
            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" type="password" name="password" required autocomplete="current-password" />                
            </div>
        </div>
        <div class="flex items-center justify-between mt-6">
            @if (Route::has('password.request'))
                <div class="mr-1">
                    <a class="text-sm underline hover:no-underline" href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                </div>
            @endif            
            <x-button class="ml-3">
                {{ __('Sign in') }}
            </x-button>            
        </div>
    </form>
    <x-validation-errors class="mt-4" />   
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-200 dark:border-slate-700">
        <div class="text-sm">
            {{ __('Don\'t you have an account?') }} <a class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
        </div>
        <!-- Warning -->
        <div class="mt-5">
            <div class="bg-amber-100 dark:bg-amber-400/30 text-amber-600 dark:text-amber-400 px-3 py-2 rounded">
                <svg class="inline w-3 h-3 shrink-0 fill-current" viewBox="0 0 12 12">
                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                </svg>
                <span class="text-sm">
                    To support you during the pandemic super pro features are free until March 31st.
                </span>
            </div>
        </div>
    </div>
</x-authentication-layout>
