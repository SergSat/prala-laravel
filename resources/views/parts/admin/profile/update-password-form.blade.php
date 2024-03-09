<x-admin.form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('admin.update_password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Переконайтеся, що ваш обліковий запис використовує довгий випадковий пароль для захисту.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-admin.label for="current_password" value="{{ __('admin.current_password') }}" />
            <x-admin.input id="current_password" type="password" class="block w-full mt-1"
                wire:model="state.current_password" autocomplete="current-password" />
            <x-admin.input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-admin.label for="password" value="{{ __('admin.new_password') }}" />
            <x-admin.input id="password" type="password" class="block w-full mt-1" wire:model="state.password"
                autocomplete="new-password" />
            <x-admin.input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-admin.label for="password_confirmation" value="{{ __('admin.new_password_confirmation') }}" />
            <x-admin.input id="password_confirmation" type="password" class="block w-full mt-1"
                wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-admin.input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-admin.action-message class="me-3" on="saved">
            {{ __('admin.saved') }}
        </x-admin.action-message>

        <x-admin.button>
            {{ __('admin.save') }}
        </x-admin.button>
    </x-slot>
</x-admin.form-section>