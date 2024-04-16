<ul wire:key="$key" class="flex flex-col gap-5">
    @foreach($poll->options as $key => $option)
        <li wire:key="$key" class="flex items-center justify-between gap-4 rounded-md border-2 border-pr-gray-soft bg-white p-5 drop-shadow-lg max-[320px]:flex-col">
            <p class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
                {{ $option->name }}
            </p>
            <button type="submit" class="text-sm whitespace-nowrap sm:text-base">Обрати</button>
        </li>
    @endforeach
</ul>
