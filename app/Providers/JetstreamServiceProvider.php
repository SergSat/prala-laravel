<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use App\Http\Livewire\UpdateProfileInformationForm;
use App\Http\Livewire\UpdatePasswordForm;
use App\Http\Livewire\TwoFactorAuthenticationForm;
use App\Http\Livewire\LogoutOtherBrowserSessionsForm;
use App\Http\Livewire\DeleteUserForm;
use Livewire\Livewire;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Jetstream::ignoreRoutes();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);

        Livewire::component('parts.admin.profile.update-profile-information-form', UpdateProfileInformationForm::class);
        Livewire::component('parts.admin.profile.update-password-form', UpdatePasswordForm::class);
        Livewire::component('parts.admin.profile.two-factor-authentication-form', TwoFactorAuthenticationForm::class);
        Livewire::component('parts.admin.profile.logout-other-browser-sessions-form', LogoutOtherBrowserSessionsForm::class);
        Livewire::component('parts.admin.profile.delete-user-form', DeleteUserForm::class);

    }

    /**
     * Configure the permissions that are available within the application.
     */
    protected function configurePermissions(): void
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
