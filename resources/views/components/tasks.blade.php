@props(['tasks'])
<div>
    @foreach ($tasks as $task)
        <div class="{{$task->completed ? '--pr-success' : ''}} border-2 border-white mt-5 flex min-w-16 max-w-xl items-center justify-between gap-4 rounded-md bg-white p-5 drop-shadow-lg max-[320px]:flex-col">
            <p class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
                {{ $task->name }}
            </p>
            <p class="text-sm whitespace-nowrap sm:text-base">{{$task->completed ? 'Завершено' : 'Ожидается'}}</p>
        </div>
    @endforeach
</div>