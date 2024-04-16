<div class="flex items-center justify-center gap-2 py-2 mt-5 bg-white rounded-full px-7 {{(!$previousPoll && !$nextPoll) ? 'hidden' : ''}} ">
    @if ($previousPoll)
        <a href="{{ route(($previousPoll->finished ? 'finished' : 'unfinished') . '-polls.show', $previousPoll) }}" class="inline-flex items-center gap-3 group">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="group-hover:opacity-60">
                <path d="M14.8996 17.3008L10.0996 12.5008L14.8996 7.70078" stroke="black" stroke-linecap="round"
                      stroke-linejoin="round" />
            </svg>

            <span class="text-lg group-hover:opacity-60">{{ __('back') }}</span>
        </a>
    @endif
    @if ($previousPoll && $nextPoll)
        <div class="h-6 border-l border-black"></div>
    @endif
    @if ($nextPoll)
        <a href="{{ route(($nextPoll->finished ? 'finished' : 'unfinished') . '-polls.show', $nextPoll) }}" class="inline-flex items-center gap-3 text-xl group text-pr-blue">
            <span class="text-lg group-hover:opacity-60">{{ __('forward') }}</span>
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" class="group-hover:opacity-60">
                <path d="M10.1004 7.69922L14.9004 12.4992L10.1004 17.2992" stroke="#0038FF" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    @endif
</div>