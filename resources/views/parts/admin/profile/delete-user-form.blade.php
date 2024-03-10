<x-admin.action-section>
    <x-slot name="title">
        {{ __('admin.delete_account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('admin.permanently_delete_your_account').'.' }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
            {{ __('Після видалення вашого облікового запису всі його ресурси та дані будуть видалені назавжди. Перш ніж
            видалите ваш обліковий запис, будь ласка, завантажте всі дані або інформацію, які ви хочете зберегти.') }}
        </div>

        <div class="mt-5">
            <x-admin.danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('admin.delete_account') }}
            </x-admin.danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-admin.dialog-modal wire:model.live="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('admin.delete_account') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Ви впевнені, що хочете видалити свій обліковий запис? Після видалення вашого акаунта всі його
                ресурси і дані будуть безповоротно видалені. Будь ласка, введіть свій пароль, щоб підтвердити, що ви
                хочете назавжди видалити свій обліковий запис.') }}

                <div class="mt-4" x-data="{}"
                    x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-admin.input type="password" class="block w-3/4 mt-1" autocomplete="current-password"
                        placeholder="{{ __('admin.password') }}" x-ref="password" wire:model="password"
                        wire:keydown.enter="deleteUser" />

                    <x-admin.input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-admin.secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('admin.cancel') }}
                </x-admin.secondary-button>

                <x-admin.danger-button class="ms-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('admin.delete_account') }}
                </x-admin.danger-button>
            </x-slot>
        </x-admin.dialog-modal>
    </x-slot>
</x-admin.action-section>