<div>

    <x-slot name="header">
        <x-header-back :route="route('professions.index')"
                       :title="__('employee') . ' ' . $user->name"
                       :titleBack="__('admin.back_to_list')"
        />
    </x-slot>

    <x-breadcrumbs :$breadcrumbs />

    <div class="flex flex-col items-center w-full mx-auto">

        <div class="w-full grid grid-cols-1 gap-10 xs:grid-cols-2">
            <div>
                <section class="w-auto p-5 bg-white xxs:w-max mt-7 lg:p-8 lg:mt-5 mb-4 rounded-xl drop-shadow-lg">
                    <div class="min-w-[210px] max-w-72 flex flex-col items-center w-full gap-3 p-5 bg-white border rounded-lg sm:gap-5 border-pr-gray-sky">
                        <a href="{{ route('employee.show', $user->id) }}" class="flex flex-col items-center gap-3">
                            <picture>
                                <img src="{{ $user->profile_photo_url }}" alt="avatar" class="w-24 h-24 object-cover rounded-full">
                            </picture>
                            <div class="text-center">
                                <h3 class="text-2xl">{{ $user->name }}</h3>
                            </div>
                        </a>
                        <div class="flex flex-col items-center text-center text-pr-gray-sky max-w-full">
                            <a href="mailto:{{ $user->email }}" class="max-w-full break-words">{{ $user->email }}</a>
                        </div>
                    </div>
                </section>

                <section class="flex flex-col mx-auto lg:mx-0">
                    <div class="flex justify-between items-center pt-5 mb-2">
                        <h3 class="text-xl text-pr-blue lg:text-2xl">{{ __('tasks') }}</h3>
                        <button wire:click="showModal">
                            <svg width="35" height="33" viewBox="0 0 35 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.001 2.00391H8.00098C4.68727 2.00391 2.00098 4.6902 2.00098 8.0039V24.6706C2.00098 27.9843 4.68727 30.6706 8.00098 30.6706H27.001C30.3147 30.6706 33.001 27.9843 33.001 24.6706V8.00391C33.001 4.6902 30.3147 2.00391 27.001 2.00391ZM8.00098 0.00390625C3.5827 0.00390625 0.000976562 3.58562 0.000976562 8.0039V24.6706C0.000976562 29.0888 3.5827 32.6706 8.00098 32.6706H27.001C31.4193 32.6706 35.001 29.0889 35.001 24.6706V8.00391C35.001 3.58563 31.4193 0.00390625 27.001 0.00390625H8.00098Z" fill="#0038FF"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.9163 17.3387H11.083V15.3387H23.9163V17.3387Z" fill="#0038FF"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.4995 9.92187V22.7552H16.4995V9.92187H18.4995Z" fill="#0038FF"/>
                            </svg>
                        </button>
                    </div>
                    <div>
                        @if ($tasks->count() === 0)
                            <p class="text-orange-500">{{ __('currently_tasks_are_missing') }}</p>
                        @else
                            @foreach ($tasks as $task)
                                <div class="{{$task->completed ? '--pr-success' : ''}} border-2 border-white mt-5 flex min-w-16 max-w-xl items-center justify-between gap-4 rounded-md bg-white p-5 drop-shadow-lg max-[320px]:flex-col">
                                    <p class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
                                        {{ $task->name }}
                                    </p>
                                    <button wire:click="toggleTaskCompletion({{ $task->id }})" wire:confirm="{{ __('confirm_change_task_status') }}" class="ml-auto text-sm whitespace-nowrap sm:text-base">
                                        {{$task->completed ? __('completed') : __('pending') }}
                                    </button>
                                    <button wire:click="deleteTask({{ $task->id }})" wire:confirm="{{ __('confirm_delete_task') }}">
                                        <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.44772 0.447715 4 1 4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H1C0.447715 6 0 5.55228 0 5Z" fill="#C4C4C4" fill-opacity="0.4"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C7.73478 2 7.48043 2.10536 7.29289 2.29289C7.10536 2.48043 7 2.73478 7 3V5C7 5.55228 6.55228 6 6 6C5.44772 6 5 5.55228 5 5V3C5 2.20435 5.31607 1.44129 5.87868 0.87868C6.44129 0.31607 7.20435 0 8 0H12C12.7956 0 13.5587 0.31607 14.1213 0.87868C14.6839 1.44129 15 2.20435 15 3V5C15 5.55228 14.5523 6 14 6C13.4477 6 13 5.55228 13 5V3C13 2.73478 12.8946 2.48043 12.7071 2.29289C12.5196 2.10536 12.2652 2 12 2H8ZM3 4C3.55228 4 4 4.44772 4 5V19C4 19.2652 4.10536 19.5196 4.29289 19.7071C4.48043 19.8946 4.73478 20 5 20H15C15.2652 20 15.5196 19.8946 15.7071 19.7071C15.8946 19.5196 16 19.2652 16 19V5C16 4.44772 16.4477 4 17 4C17.5523 4 18 4.44772 18 5V19C18 19.7957 17.6839 20.5587 17.1213 21.1213C16.5587 21.6839 15.7957 22 15 22H5C4.20435 22 3.44129 21.6839 2.87868 21.1213C2.31607 20.5587 2 19.7957 2 19V5C2 4.44772 2.44772 4 3 4Z" fill="#C4C4C4" fill-opacity="0.4"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9C8.55228 9 9 9.44772 9 10V16C9 16.5523 8.55228 17 8 17C7.44772 17 7 16.5523 7 16V10C7 9.44772 7.44772 9 8 9Z" fill="#C4C4C4" fill-opacity="0.4"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C12.5523 9 13 9.44772 13 10V16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V10C11 9.44772 11.4477 9 12 9Z" fill="#C4C4C4" fill-opacity="0.4"/>
                                        </svg>
                                    </button>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </section>
            </div>

            <div>
                <section>
                    Tests
                </section>
                <section>
                    Practices
                </section>
            </div>

        </div>

    </div>

    <livewire:pages.employee.add-task-modal :userId="$user->id" />

</div>