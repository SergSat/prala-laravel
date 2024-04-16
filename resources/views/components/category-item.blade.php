@props(['category', 'currentCategory'])

<div class="flex items-center">
    @if ($category->parent_id === null)
        <span class="text-gray-500 font-bold pe-2">{{ __('profession') }}: </span>
    @endif
    <button wire:click="$dispatch('set-category', {categoryId: {{$category->id}} })"
            class="rounded-md px-2 bg-gray-300 text-gray-500 hover:bg-gray-500 hover:text-white
            {{ $category->parent_id === null ? '' : 'me-2' }}
            {{ $currentCategory && $currentCategory->id === $category->id ? 'bg-pr-blue text-white' : '' }}"
    >
        {{ $category->name }}
    </button>
{{--    <span class="px-1">{{ (!empty($loop) && $loop->last) || $category->parent_id === null ? '' : '' }}</span>--}}
    @if ($category->subcategories->isNotEmpty())
        <svg class="rtl:rotate-180 w-2 h-2 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <div class="flex items-center">
            @foreach ($category->subcategories as $child)
                <x-category-item :category="$child" :currentCategory="$currentCategory"/>
            @endforeach
        </div>
    @endif
</div>
