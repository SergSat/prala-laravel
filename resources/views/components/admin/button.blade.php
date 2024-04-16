@props(['color', 'disabled' => false])

@php
    $color = [
        'none' => '',
        'default' => 'bg-gray-500 text-white border-gray-300 focus:ring-gray-500/50 focus:border-gray-500 hover:bg-gray-600',
        'success' => 'bg-green-500 text-white border-transparent focus:ring-green-500/50 focus:border-green-500 hover:bg-green-600',
        'danger' => 'bg-red-500 text-white border-transparent focus:ring-red-500/50 focus:border-red-500 hover:bg-red-600',
        'warning' => 'bg-yellow-500 text-slate-700 border-transparent focus:ring-yellow-500/50 focus:border-yellow-500 hover:bg-yellow-600',
        'info' => 'bg-blue-500 text-white border-transparent focus:ring-blue-500/50 focus:border-blue-500 hover:bg-blue-600',
    ][$color ?? 'none'];
@endphp
<button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center justify-center px-4 py-2 text-sm font-medium rounded-lg focus:ring-4 ' . $color]) }}>
    {{ $slot }}
</button>
