<x-admin.dialog-modal wire:model.live="show">
    <x-slot name="title">
        {{ __('admin.' . ($id ? 'edit_poll' : 'add_poll') ) }}
    </x-slot>

    <x-slot name="content">

        <!-- Image -->
        <div class="mb-4">
            <label for="imagePath" class="cursor-pointer">
                @if ($imagePath)
                    <img src="{{ $imagePath->temporaryUrl() }}" class="rounded-xl h-40 object-cover">
                @elseif($currentImagePath)
                    <img src="{{ asset('storage/'.$currentImagePath) }}" class="rounded-xl h-40 object-cover">
                @else
                    <div class="rounded-xl h-40 bg-gray-200 flex justify-center items-center">
                        <span class="text-gray-500 text-xs text-center">{{ __('admin.add_image') }}</span>
                    </div>
                @endif
            </label>
            <input type="file" id="imagePath" wire:model="imagePath" class="hidden">
            @error('imagePath') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Title -->
        <div class="mb-4">
            <x-admin.label for="title" value="{!! __('admin.title') !!}" />
            <x-admin.input-text wire:model="title" type="text" class="w-full" placeholder="{{ __('admin.title') }}" />
            <x-admin.input-error for="title" />
        </div>

        <!-- Status -->
        <div class="mb-4">
            <x-admin.label for="finished" value="{!! __('admin.completed') !!}" />
            <x-admin.toggle wire:model="finished" />
            <x-admin.input-error for="finished" />
        </div>

        <!-- Options -->
        <div class="mb-4">
            <x-admin.label value="{!! __('admin.options') !!}" />

            @foreach ($options as $index => $option)
                <div class="flex items-center mb-2" wire:key="option-{{ $index }}">
                    <x-admin.input type="hidden" wire:model="options.{{ $index }}.id" />
                    <x-admin.input-text wire:model="options.{{ $index }}.name" type="text" class="w-full" placeholder="{{ __('admin.option_of_poll') }}" />
                    <x-admin.button  type="button" wire:click="removeOption({{ $index }})" class="ml-2 h-full">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 0.25C8.07164 0.25 6.18657 0.821828 4.58319 1.89317C2.97982 2.96452 1.73013 4.48726 0.992179 6.26884C0.254224 8.05042 0.061142 10.0108 0.437348 11.9021C0.813554 13.7934 1.74215 15.5307 3.10571 16.8943C4.46928 18.2579 6.20656 19.1865 8.09787 19.5627C9.98919 19.9389 11.9496 19.7458 13.7312 19.0078C15.5127 18.2699 17.0355 17.0202 18.1068 15.4168C19.1782 13.8134 19.75 11.9284 19.75 10C19.7474 7.41495 18.7193 4.93654 16.8914 3.10863C15.0635 1.28073 12.5851 0.252647 10 0.25ZM10 18.25C8.36831 18.25 6.77326 17.7661 5.41655 16.8596C4.05984 15.9531 3.00242 14.6646 2.378 13.1571C1.75358 11.6496 1.5902 9.99085 1.90853 8.3905C2.22685 6.79016 3.01259 5.32015 4.16637 4.16637C5.32016 3.01259 6.79017 2.22685 8.39051 1.90852C9.99085 1.59019 11.6497 1.75357 13.1571 2.37799C14.6646 3.00242 15.9531 4.05984 16.8596 5.41655C17.7662 6.77325 18.25 8.3683 18.25 10C18.2474 12.1872 17.3773 14.2841 15.8307 15.8307C14.2841 17.3773 12.1872 18.2474 10 18.25Z" fill="red"/>
                            <path d="M13.53 6.47C13.3894 6.32955 13.1988 6.25066 13 6.25066C12.8013 6.25066 12.6106 6.32955 12.47 6.47L10 8.94L7.53 6.47C7.38783 6.33752 7.19978 6.2654 7.00548 6.26882C6.81118 6.27225 6.6258 6.35097 6.48838 6.48838C6.35097 6.62579 6.27226 6.81118 6.26883 7.00548C6.2654 7.19978 6.33752 7.38782 6.47 7.53L8.94 10L6.47 12.47C6.32955 12.6106 6.25066 12.8012 6.25066 13C6.25066 13.1988 6.32955 13.3894 6.47 13.53C6.61063 13.6705 6.80125 13.7493 7 13.7493C7.19875 13.7493 7.38938 13.6705 7.53 13.53L10 11.06L12.47 13.53C12.6106 13.6705 12.8013 13.7493 13 13.7493C13.1988 13.7493 13.3894 13.6705 13.53 13.53C13.6705 13.3894 13.7493 13.1988 13.7493 13C13.7493 12.8012 13.6705 12.6106 13.53 12.47L11.06 10L13.53 7.53C13.6705 7.38937 13.7493 7.19875 13.7493 7C13.7493 6.80125 13.6705 6.61063 13.53 6.47Z" fill="red"/>
                        </svg>
                    </x-admin.button>
                </div>
            @endforeach
            <x-admin.button :color="'success'" type="button" wire:click="addOption" class="mt-2">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0.25C8.07164 0.25 6.18657 0.821828 4.58319 1.89317C2.97982 2.96452 1.73013 4.48726 0.992179 6.26884C0.254224 8.05042 0.061142 10.0108 0.437348 11.9021C0.813554 13.7934 1.74215 15.5307 3.10571 16.8943C4.46928 18.2579 6.20656 19.1865 8.09787 19.5627C9.98919 19.9389 11.9496 19.7458 13.7312 19.0078C15.5127 18.2699 17.0355 17.0202 18.1068 15.4168C19.1782 13.8134 19.75 11.9284 19.75 10C19.7474 7.41495 18.7193 4.93654 16.8914 3.10863C15.0635 1.28073 12.5851 0.252647 10 0.25ZM10 18.25C8.36831 18.25 6.77326 17.7661 5.41655 16.8596C4.05984 15.9531 3.00242 14.6646 2.378 13.1571C1.75358 11.6496 1.5902 9.99085 1.90853 8.3905C2.22685 6.79016 3.01259 5.32015 4.16637 4.16637C5.32016 3.01259 6.79017 2.22685 8.39051 1.90852C9.99085 1.59019 11.6497 1.75357 13.1571 2.37799C14.6646 3.00242 15.9531 4.05984 16.8596 5.41655C17.7662 6.77325 18.25 8.3683 18.25 10C18.2474 12.1872 17.3773 14.2841 15.8307 15.8307C14.2841 17.3773 12.1872 18.2474 10 18.25Z" fill="white"/>
                    <path d="M14 9.25H10.75V6C10.75 5.80109 10.671 5.61032 10.5303 5.46967C10.3897 5.32902 10.1989 5.25 10 5.25C9.80109 5.25 9.61033 5.32902 9.46968 5.46967C9.32902 5.61032 9.25 5.80109 9.25 6V9.25H6C5.80109 9.25 5.61033 9.32902 5.46967 9.46967C5.32902 9.61032 5.25 9.80109 5.25 10C5.25 10.1989 5.32902 10.3897 5.46967 10.5303C5.61033 10.671 5.80109 10.75 6 10.75H9.25V14C9.25 14.1989 9.32902 14.3897 9.46968 14.5303C9.61033 14.671 9.80109 14.75 10 14.75C10.1989 14.75 10.3897 14.671 10.5303 14.5303C10.671 14.3897 10.75 14.1989 10.75 14V10.75H14C14.1989 10.75 14.3897 10.671 14.5303 10.5303C14.671 10.3897 14.75 10.1989 14.75 10C14.75 9.80109 14.671 9.61032 14.5303 9.46967C14.3897 9.32902 14.1989 9.25 14 9.25Z" fill="white"/>
                </svg>
            </x-admin.button>
        </div>

    </x-slot>

    <x-slot name="footer">
        <x-admin.button :color="'danger'" wire:click="$toggle('show')" wire:loading.attr="disabled" class="mr-2">{{ __('admin.cancel') }}</x-admin.button>

        @if ($id)
            <x-admin.button :color="'info'" type="submit" wire:click="updatePoll({{$id}})">{{ __('admin.save') }}</x-admin.button>
        @else
            <x-admin.button :color="'info'" type="submit" wire:click="save">{{ __('admin.save') }}</x-admin.button>
        @endif
    </x-slot>

</x-admin.dialog-modal>