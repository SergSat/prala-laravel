<x-authentication-layout>
    <div class="mx-auto flex h-dvh w-4/5 flex-col sm:max-w-[648px]">
        <img width="350" height="153" src="{{ Vite::asset('resources/images/prala_logo1.svg') }}" alt="logo-prala"
            class="mx-auto mt-10 w-26 h-11 sm:h-20 sm:w-40 md:h-28 md:w-80" />
        <hr class="mt-8 h-px bg-white max-[380px]:mt-6" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-2 text-center text-white">
                <h1 class="text-3xl tracking-widest font-extralight">{{ __('registration_page') }}</h1>
            </div>

            <div
                class="mt-6 w-full rounded-2xl border border-white bg-white/15 px-6 pb-12 pt-6 backdrop-blur max-[380px]:px-5 max-[380px]:pb-10 max-[380px]:pt-6 min-[480px]:px-10 sm:px-12">
                <div class="flex flex-col items-center justify-between gap-10">
                    <div class="flex flex-col items-start justify-between w-full gap-5 md:justify-around">
                        <div class="w-full">
                            <x-label for="name" class="sr-only">Full Name</x-label>
                            <x-input
                                class="text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                id="name" type="text" name="name" placeholder="{{ __('login') }}" :value="old('name')"
                                required autofocus autocomplete="name" />
                        </div>
                        <div class="w-full">
                            <x-label for="email" class="sr-only">Email Address</x-label>
                            <x-input
                                class="text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                id="email" type="text" name="email" placeholder="{{ __('your_email') }}"
                                :value="old('email')" required autocomplete="email" />
                        </div>
                        <div class="w-full">
                            <x-label for="password" value="Password" class="sr-only" />
                            <x-input
                                class="w-full text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                id="password" type="password" name="password" placeholder="{{ __('password') }}"
                                required autocomplete="new-password" />
                        </div>

                        <div class="w-full">
                            <x-label for="password_confirmation" value="Confirm Password" class="sr-only" />
                            <x-input
                                class="w-full text-lg placeholder-white bg-transparent border border-b border-transparent border-solid border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                                id="password_confirmation" type="password" name="password_confirmation"
                                placeholder="{{ __('confirm_your_password') }}" required autocomplete="new-password" />
                        </div>
                    </div>

                    <div class="grid bg-transparent shrink-0 place-items-center">
                        <x-admin.button
                            class="w-full px-2 py-1 text-xl tracking-wider text-center text-white transition-colors duration-200 border border-white rounded-lg justify-self-center font-extralight focus:border focus:rounded-lg hover:border-pr-blue/40 hover:bg-pr-blue/5 focus:border-pr-blue/40 focus:text-pr-blue focus:outline-none focus:ring-0 hover:text-pr-blue/60 md:p-3 lg:text-2xl">
                            {{ __('sign_up') }}
                        </x-admin.button>
                    </div>
                    <x-validation-errors />
                </div>
            </div>
            <div class="py-5">
                <div class="text-sm text-white">
                    {{ __('already_have_an_account') }} <a
                        class="ml-1 font-medium text-pr-blue/80 hover:text-pr-blue/60" href="{{ route('login') }}">{{
                        __('sign_in') }}</a>
                </div>
            </div>
        </form>
    </div>
</x-authentication-layout>