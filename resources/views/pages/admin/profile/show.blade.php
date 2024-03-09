<x-admin-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('admin.profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('parts.admin.profile.update-profile-information-form')

            <x-admin.section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @livewire('parts.admin.profile.update-password-form')
            </div>

            <x-admin.section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="mt-10 sm:mt-0">
                @livewire('parts.admin.profile.two-factor-authentication-form')
            </div>

            <x-admin.section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('parts.admin.profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <x-admin.section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('parts.admin.profile.delete-user-form')
            </div>
            @endif
        </div>
    </div>
</x-admin-layout>