<div class="flex flex-col gap-5 p-5 mt-5 bg-white xl:mt-7 lg:p-8 lg:mt-5 rounded-xl drop-shadow-lg">
    @if($poll)
        <h3 class="text-lg text-center text-pr-blue lg:text-xl">
            <a href="{{ route('unfinished-polls.show', $poll) }}">{{ $poll->title }}</a>
        </h3>
    @endif
    @if($poll && $poll->image_path)
        <picture>
            <img width="504px" height="204px" src="{{ asset('storage/' . $poll->image_path) }}"
                 alt="{{ $poll->title }}" class="object-cover w-full mt-5 rounded-xl bg-pr-gray-soft" />
        </picture>
    @endif
    <ul class="flex flex-col gap-5">
        @if($poll && $poll->options->count() > 0)
            @foreach($poll->options as $key => $option)

                @php
                        $score_style = '';
                        if ($poll->finished) {
                            $percentage = $option->votesPercentage;
                            $score_style = "background-image: linear-gradient(to right, #d1fae5 " . $percentage . "%, transparent " . $percentage . "%);";
                        }
                @endphp

                <li wire:key="option-{{ $option->id }}" class="{{ $option->id === $chosenOptionId ? '--pr-success' : '' }} flex items-center justify-between gap-4 rounded-md border-2 border-pr-gray-soft bg-white p-5 drop-shadow-lg max-[320px]:flex-col"
                    style="{{$score_style}}">
                    <p class="flex items-center text-balance text-sm before:mr-2 before:block before:h-2.5 before:w-2.5 before:shrink-0 before:rounded-full before:bg-pr-gray-soft before:content-[''] sm:text-base">
                        {{ $option->name }}
                    </p>
                    <button wire:confirm="{{ __('confirm_vote_for') }}: {{$option->name}}"
                            wire:click="vote({{ $option->id }})"
                            class="text-sm whitespace-nowrap sm:text-base"
                            {{ $voted ? 'disabled' : '' }}
                    >
                        {{ $option->id === $chosenOptionId ? __('chosen') : __('choose') }}
                    </button>
                </li>
            @endforeach
        @endif
    </ul>
</div>
