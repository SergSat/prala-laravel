@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'placeholder-gray-400 text-gray-700 block border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm']) !!}>