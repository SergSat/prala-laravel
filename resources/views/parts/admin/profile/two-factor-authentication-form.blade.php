<x-admin.action-section>
    <x-slot name="title">
        {{ __('admin.two_factor_authentication') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Додайте додатковий захист свого облікового запису за допомогою двофакторної автентифікації.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            @if ($this->enabled)
            @if ($showingConfirmation)
            {{ __('admin.finish_enabling_two_factor_authentication').'.' }}
            @else
            {{ __('admin.you_have_enabled_two_factor_authentication').'.' }}
            @endif
            @else
            {{ __('admin.you_have_not_enabled_two_factor_authentication') }}
            @endif
        </h3>

        <div class="max-w-xl mt-3 text-sm text-gray-600 dark:text-gray-400">
            <p>
                {{ __('Якщо двофакторна автентифікація увімкнена, вам буде запропоновано ввести безпечний випадковий
                токен під час автентифікації. Ви можете отримати цей токен з програми Google Authenticator на вашому
                телефоні.') }}
            </p>
        </div>

        @if ($this->enabled)
        @if ($showingQrCode)
        <div class="max-w-xl mt-4 text-sm text-gray-600 dark:text-gray-400">
            <p class="font-semibold">
                @if ($showingConfirmation)
                {{ __('Щоб завершити ввімкнення двофакторної автентифікації, відскануйте наступний QR-код за допомогою
                програми або введіть ключ налаштування та згенерований OTP-код') }}
                @else
                {{ __('Двофакторна автентифікація увімкнена. Відскануйте цей QR-код за допомогою
                програми-автентифікатора вашого телефону або введіть ключ налаштування.') }}
                @endif
            </p>
        </div>

        <div class="inline-block p-2 mt-4 bg-white">
            {!! $this->user->twoFactorQrCodeSvg() !!}
        </div>

        <div class="max-w-xl mt-4 text-sm text-gray-600 dark:text-gray-400">
            <p class="font-semibold">
                {{ __('Setup Key') }}: {{ decrypt($this->user->two_factor_secret) }}
            </p>
        </div>

        @if ($showingConfirmation)
        <div class="mt-4">
            <x-admin.label for="code" value="{{ __('admin.code') }}" />

            <x-admin.input id="code" type="text" name="code" class="block w-1/2 mt-1" inputmode="numeric" autofocus
                autocomplete="one-time-code" wire:model="code" wire:keydown.enter="confirmTwoFactorAuthentication" />

            <x-admin.input-error for="code" class="mt-2" />
        </div>
        @endif
        @endif

        @if ($showingRecoveryCodes)
        <div class="max-w-xl mt-4 text-sm text-gray-600 dark:text-gray-400">
            <p class="font-semibold">
                {{ __('Зберігайте ці коди відновлення в безпечному менеджері паролів. Вони можуть бути використані для
                відновлення доступу до вашого облікового запису, якщо пристрій двофакторної автентифікації загублено.')
                }}
            </p>
        </div>

        <div
            class="grid max-w-xl gap-1 px-4 py-4 mt-4 font-mono text-sm bg-gray-100 rounded-lg dark:bg-gray-900 dark:text-gray-100">
            @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
            <div>{{ $code }}</div>
            @endforeach
        </div>
        @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
            <x-admin.confirms-password wire:then="enableTwoFactorAuthentication">
                <x-admin.button type="button" wire:loading.attr="disabled">
                    {{ __('admin.enable') }}
                </x-admin.button>
            </x-admin.confirms-password>
            @else
            @if ($showingRecoveryCodes)
            <x-admin.confirms-password wire:then="regenerateRecoveryCodes">
                <x-admin.secondary-button class="me-3">
                    {{ __('admin.regenerate_recovery_codes') }}
                </x-admin.secondary-button>
            </x-admin.confirms-password>
            @elseif ($showingConfirmation)
            <x-admin.confirms-password wire:then="confirmTwoFactorAuthentication">
                <x-admin.button type="button" class="me-3" wire:loading.attr="disabled">
                    {{ __('admin.confirm') }}
                </x-admin.button>
            </x-admin.confirms-password>
            @else
            <x-admin.confirms-password wire:then="showRecoveryCodes">
                <x-admin.secondary-button class="me-3">
                    {{ __('admin.show_recovery_codes') }}
                </x-admin.secondary-button>
            </x-admin.confirms-password>
            @endif

            @if ($showingConfirmation)
            <x-admin.confirms-password wire:then="disableTwoFactorAuthentication">
                <x-admin.secondary-button wire:loading.attr="disabled">
                    {{ __('admin.cancel') }}
                </x-admin.secondary-button>
            </x-admin.confirms-password>
            @else
            <x-admin.confirms-password wire:then="disableTwoFactorAuthentication">
                <x-admin.danger-button wire:loading.attr="disabled">
                    {{ __('admin.disable') }}
                </x-admin.danger-button>
            </x-admin.confirms-password>
            @endif

            @endif
        </div>
    </x-slot>
</x-admin.action-section>