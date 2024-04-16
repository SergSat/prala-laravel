<article class="grid w-full grid-flow-row grid-cols-1 gap-5 lg:grid-cols-2">

    <x-slot name="header">
        <h1 class="sr-only">{{ __('my_tasks_studies_and_news') }}</h1>
    </x-slot>

    <!-- Tasks -->
    <section class="flex flex-col mx-auto lg:mx-0">
        <h3 class="pt-5 pl-5 text-xl text-pr-blue lg:text-2xl">{{ __('my_tasks') }}</h3>
        <div>
            @foreach ($tasks as $task)
                <div class="{{$task->completed ? '--pr-success' : ''}} border-2 border-white mt-5 flex min-w-16 max-w-xl items-center justify-between gap-4 rounded-md bg-white p-5 drop-shadow-lg max-[320px]:flex-col">
                    <p class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
                        {{ $task->name }}
                    </p>
                    <button wire:click="toggleTaskCompletion({{ $task->id }})" wire:confirm="{{ __('confirm_change_task_status') }}" class="text-sm whitespace-nowrap sm:text-base">
                        {{$task->completed ? __('completed') : __('pending') }}
                    </button>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Tasks -->

    <!-- Training -->
    <section class="block">
        <div class="flex flex-col max-w-xl px-10 pb-10 mx-auto text-center bg-white mt-7 min-w-16 rounded-xl drop-shadow-lg lg:mx-0 lg:mt-0">
            <h3 class="pt-5 text-xl text-pr-blue lg:text-2xl">{{ __('studies') }}</h3>

            <div class="grid grid-rows-4">
                @include('parts.trainig-profession')

                @include('parts.trainig-profession')

                @include('parts.trainig-profession')

                @include('parts.trainig-profession')
            </div>
        </div>
    </section>
    <!-- Training -->

    <!-- News -->
    <section class="max-w-xl pt-5 mx-auto lg:mx-0">

        <!-- News header -->
        <div class="flex justify-between px-6">
            <h3 class="text-xl text-pr-blue lg:text-2xl">{{ __('news') }}</h3>

            <div class="grid group place-items-center gap-y-1">
                <a href="{{ route('news.index') }}" class="transition-colors duration-200 text-pr-blue group-hover:text-pr-blueviolet">
                    {{ __('read_all') }}
                </a>
                <a href="#" class="transition duration-200 ease-in-out delay-150 group-hover:translate-x-3">
                    <svg width="56" height="12" viewBox="0 0 56 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="transition-colors duration-200 group-hover:group-hover:stroke-pr-blueviolet"
                              d="M0.368164 6.52734L54.6318 6.52734" stroke="#302CFF" stroke-width="0.669922" />
                        <path class="transition-colors duration-200 group-hover:group-hover:stroke-pr-blueviolet"
                              d="M47.0957 11.3008L54.6323 6.52759L47.0957 1.00073" stroke="#302CFF"
                              stroke-width="0.669922" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- News header -->

        <!-- News List -->
        <div class="mt-5 bg-white rounded-lg py-7 drop-shadow-lg">
            <ul class="px-6">
                @foreach($news as $newsItem)
                    <li>
                        <h4 class="flex items-center text-lg before:mr-2 before:block before:h-2 before:w-2 before:shrink-0 before:rounded-full before:bg-pr-blue before:content-['']">
                            {{ $newsItem->title }}
                        </h4>
                        <p class="pt-3 pl-4 text-pr-darklategray">
                            {!! cleanHtml($newsItem->content) !!}
                        </p>
                        <hr class="h-px my-5 ml-5 border-0 bg-pr-gray-sky" />
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <!-- News -->

</article>