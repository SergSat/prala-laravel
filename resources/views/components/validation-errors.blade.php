@if ($errors->any())
<div {{ $attributes }}>
    <div
        class="px-4 py-2 text-sm border rounded-sm bg-rose-100 dark:bg-rose-400/30 border-rose-200 dark:border-transparent text-rose-600 dark:text-rose-400">
        <div class="font-medium">{{ __('whoops').'!' }} {{ __('something_went_wrong').'.'}}</div>
        <ul class="mt-1 text-sm list-disc list-inside">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif