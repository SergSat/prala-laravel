<x-authentication-layout>
    <div class="mx-auto flex h-dvh w-4/5 flex-col sm:max-w-[648px]">
        <img width="350" height="153" src="{{ asset('images/logo-white.svg') }}" alt="logo-prala"
            class="mx-auto mt-12 w-26 h-11 sm:h-20 sm:w-40 md:h-28 md:w-80" />
        <hr class="mt-8 h-px bg-white max-[380px]:mt-6" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mt-2 text-center text-white">
                <h1 class="text-3xl tracking-widest font-extralight">{{ __('login_title') }}</h1>
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
                                class="w-full text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                id="email" type="email" name="email" :value="old('email')" required autofocus
                                placeholder="Email" />
                        </div>
                        <div class="w-full">
                            <x-label for="password" value="{{ __('Password') }}" class="sr-only" />
                            <x-input id="password" type="password" name="password"
                                class="w-full text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                equired autocomplete="current-password" placeholder="Пароль" />
                        </div>
                    </div>

                    <div>
                        @if (Route::has('password.request'))
                        <div class="text-center">
                            <a class="text-white text-md hover:text-pr-blue/60" href="{{ route('password.request') }}">
                                {{ __('forgot_password') }}
                            </a>
                        </div>
                        @endif
                        <div class="grid mt-3 bg-transparent w-28 shrink-0 place-items-center md:w-36">
                            <x-admin.button
                                class="w-full px-2 py-1 text-xl tracking-wider text-center text-white transition-colors duration-200 border border-white rounded-lg hover:border-pr-blue/40 hover:bg-pr-blue/5 justify-self-center font-extralight focus:border focus:rounded-lg focus:border-pr-blue/40 focus:text-pr-blue tfocus:outline-none focus:ring-0 hover:text-pr-blue/60 md:p-3 lg:text-2xl">
                                {{ __('sign_in') }}
                            </x-admin.button>
                        </div>
                    </div>

                    <x-validation-errors />
                </div>
            </div>
            <div class="py-5">
                <div class="text-sm text-white">
                    {{ __('dont_have_account') }} <a class="ml-1 font-medium text-pr-blue/80 hover:text-pr-blue/60"
                        href="{{ route('register') }}">{{ __('sign_up') }}</a>
                </div>
            </div>
        </form>
    </div>
</x-authentication-layout>