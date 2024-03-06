<x-authentication-layout>
    <div class="mx-auto flex h-dvh w-4/5 flex-col sm:max-w-[648px]">
        <img width="350" height="153" src="{{ Vite::asset('resources/images/prala_logo1.svg') }}" alt="logo-prala"
             class="mx-auto mt-16 w-26 h-11 sm:h-20 sm:w-40 md:h-28 md:w-80" />
        <hr class="mt-14 h-px border-0 bg-white max-[380px]:mt-6" />
        <form method="POST" action="{{ route('register') }}">
            <div class="mt-2 text-center text-white">
                <h1 class="text-3xl tracking-widest font-extralight">Сторінка Реєстрації</h1>
            </div>

            <div class="mb-5 mt-10 w-full rounded-2xl border border-white bg-white/15 px-6 pb-12 pt-9 backdrop-blur max-[380px]:px-5 max-[380px]:pb-10 max-[380px]:pt-8 min-[480px]:px-12 sm:mb-10 sm:px-16 sm:pb-16">
                <div class="flex flex-col items-center justify-between gap-16">
                    <div class="flex flex-col items-start justify-between w-full gap-5 md:justify-around lg:gap-10">
                        <div class="w-full md:mt-2">
                            <x-admin.label for="name" class="sr-only">Full Name</x-admin.label>
                            <x-admin.input
                                    class="text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                    id="name"
                                    type="text"
                                    name="name"
                                    placeholder="Логін"
                                    :value="old('name')"
                                    required autofocus autocomplete="name" />
                        </div>

                        <div class="w-full md:mt-2">
                            <x-admin.label for="email" class="sr-only">Email Address</x-admin.label>
                            <input type="email" name="email" id="email"
                                   class="w-full text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                   placeholder="Ваш Email" />
                        </div>
                        <label for="password" class="sr-only">Password</label>
                        <div class="w-full md:mt-2">
                            <input type="password" name="password" id="password"
                                   class="w-full text-3xl placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                   placeholder="Пароль" />
                        </div>
                        <label for="confirm-password" class="sr-only">Confirm Password</label>
                        <div class="w-full md:mt-2">
                            <input type="confirm-password" name="confirm-password" id="confirm-password"
                                   class="w-full text-3xl placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b-2 focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                   placeholder="Підтвердіть ваш пароль" />
                        </div>
                    </div>

                    <div
                            class="grid bg-transparent border border-white rounded-lg group shrink-0 place-items-center hover:border-pr-blue/40 hover:bg-pr-blue/5">
                        <a href="{{ route('home') }}"
                           class="w-full p-2 text-xl tracking-wider text-center text-white transition-colors duration-200 justify-self-center font-extralight focus:border-b-2 focus:border-pr-blue/40 focus:outline-none focus:ring-0 group-hover:text-pr-blue/60 md:p-4 lg:text-3xl">
                            Зареєструватись
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    ----------------


    <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('Create your Account') }} ✨</h1>
    <!-- Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-admin.label for="name">{{ __('Full Name') }} <span class="text-rose-500">*</span></x-admin.label>
                <x-admin.input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-admin.label for="email">{{ __('Email Address') }} <span class="text-rose-500">*</span></x-admin.label>
                <x-admin.input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-admin.label for="password" value="{{ __('Password') }}" />
                <x-admin.input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-admin.label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-admin.input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
        </div>
        <div class="flex items-center justify-between mt-6">
{{--            <div class="mr-1">--}}
{{--                <label class="flex items-center" name="newsletter" id="newsletter">--}}
{{--                    <input type="checkbox" class="form-checkbox" />--}}
{{--                    <span class="text-sm ml-2">Email me about product news.</span>--}}
{{--                </label>--}}
{{--            </div>--}}
            <x-admin.button>
                {{ __('Sign Up') }}
            </x-admin.button>
        </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-6">
                    <label class="flex items-start">
                        <input type="checkbox" class="form-checkbox mt-1" name="terms" id="terms" />
                        <span class="text-sm ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm underline hover:no-underline">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm underline hover:no-underline">'.__('Privacy Policy').'</a>',
                            ]) !!}                        
                        </span>
                    </label>
                </div>
            @endif        
    </form>
    <x-admin.validation-errors class="mt-4" />
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-200 dark:border-slate-700">
        <div class="text-sm">
            {{ __('Have an account?') }} <a class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400" href="{{ route('login') }}">{{ __('Sign In') }}</a>
        </div>
    </div>
</x-authentication-layout>
