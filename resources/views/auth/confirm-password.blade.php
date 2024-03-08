<x-authentication-layout>
    <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('Confirm your Password') }} ✨</h1>
    <!-- Form -->
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div>
            <x-admin.label for="password" value="{{ __('Password') }}" />
            <x-admin.input id="password" type="password" name="password" required autocomplete="current-password" autofocus />
        </div>
        <div class="flex justify-end mt-6">
            <x-admin.button>
                {{ __('Confirm') }}
            </x-admin.button>
        </div>
    </form>
    <x-admin.validation-errors class="mt-4" />
</x-authentication-layout>
