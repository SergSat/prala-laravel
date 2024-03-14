<x-authentication-layout>
    <h1 class="text-3xl tracking-widest text-center text-white font-extralight">{{ __('auth.reset_password') }}
    </h1>
    @if (session('status'))
    <div class="mb-4 text-sm font-medium text-green-600">
        {{ session('status') }}
    </div>
    @endif
    <!-- Form -->
    <form method="POST" action="{{ route('password.email') }}" class="w-11/12 mx-auto md:5/6 max-w-80">
        @csrf
        <div class="flex flex-col gap-3">
            <x-admin.label for="email" class="text-white text-md">{{ __('auth.email_address') }} <span
                    class=" text-rose-500">*</span>
            </x-admin.label>
            <x-admin.input id="email" type="email" name="email" :value="old('email')"
                class="w-full text-lg placeholder-white border border-b border-transparent border-solid bg-white/10 border-b-white text-pr-blue placeholder:text-lg placeholder:font-extralight focus:border-b focus:border-transparent focus:border-b-pr-blue focus:outline-none focus:ring-0"
                required autofocus />
        </div>
        <div class="flex justify-end mt-6">
            <x-admin.button
                class="px-2 py-1 text-xl tracking-wider text-center text-white transition-colors duration-200 border border-white rounded-lg hover:border-pr-blue/40 hover:bg-pr-blue/5 justify-self-center font-extralight focus:border focus:rounded-lg focus:border-pr-blue/40 focus:text-pr-blue tfocus:outline-none focus:ring-0 hover:text-pr-blue/60 md:p-3 lg:text-2xl">
                {{ __('auth.send_reset_link') }}
            </x-admin.button>
        </div>
    </form>
    <x-admin.validation-errors class="mt-4" />
</x-authentication-layout>