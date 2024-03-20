@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'mt-1 block border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm']) !!}>