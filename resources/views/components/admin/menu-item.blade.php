@props(['route', 'title'])
<li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 {{ request()->routeIs($route) ? ' bg-slate-700' : '' }}">
    <a class="block text-slate-200 hover:text-white truncate transition duration-150"
       href="{{ Route::has($route) ? route($route) : '#' }}" wire:navigate>
        <div class="flex items-center">
            {{ $slot }}
            <span class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">{{ $title }}</span>
        </div>
    </a>
</li>