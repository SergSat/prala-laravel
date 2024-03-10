<x-admin.form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('admin.profile_information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Оновіть інформацію про профіль облікового запису та адресу електронної пошти.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
            <!-- Profile Photo File Input -->
            <input type="file" id="photo" class="hidden" wire:model.live="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

            <x-admin.label for="photo" value="{{ __('Photo') }}" />

            <!-- Current Profile Photo -->
            <div class="mt-2" x-show="! photoPreview">
                <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                    class="object-cover w-20 h-20 rounded-full">
            </div>

            <!-- New Profile Photo Preview -->
            <div class="mt-2" x-show="photoPreview" style="display: none;">
                <span class="block w-20 h-20 bg-center bg-no-repeat bg-cover rounded-full"
                    x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                </span>
            </div>

            <x-admin.secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                {{ __('Select A New Photo') }}
            </x-admin.secondary-button>

            @if ($this->user->profile_photo_path)
            <x-admin.secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                {{ __('Remove Photo') }}
            </x-admin.secondary-button>
            @endif

            <x-admin.input-error for="photo" class="mt-2" />
        </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-admin.label for="name" value="{!!  __('admin.name') !!}" />
            <x-admin.input id="name" type="text" class="block w-full mt-1" wire:model="state.name" required
                autocomplete="name" />
            <x-admin.input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-admin.label for="email" value="{{ __('Email') }}" />
            <x-admin.input id="email" type="email" class="block w-full mt-1" wire:model="state.email" required
                autocomplete="username" />
            <x-admin.input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && !
            $this->user->hasVerifiedEmail())
            <p class="mt-2 text-sm dark:text-white">
                {{ __('Your email address is unverified.') }}

                <button type="button"
                    class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    wire:click.prevent="sendEmailVerification">
                    {{ __('Click here to re-send the verification email.') }}
                </button>
            </p>

            @if ($this->verificationLinkSent)
            <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-400">
                {{ __('A new verification link has been sent to your email address.') }}
            </p>
            @endif
            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-admin.action-message class="me-3" on="saved">
            {{ __('admin.saved') }}.
        </x-admin.action-message>

        <x-admin.button wire:loading.attr="disabled" wire:target="photo">
            {{ __('admin.save') }}
        </x-admin.button>
    </x-slot>
</x-admin.form-section>