<div x-data="{top: 0}" x-init="top = document.querySelector('header').offsetHeight"
     :style="'top:' + top + 'px'" class="fixed left-20 lg:sidebar-expanded:!left-64 right-0 z-30">
    @if (!empty($notifications))
        @foreach ($notifications as $key => $notification)
            <x-admin.alert wire:key :key="$key" :status="$notification['status']" @saved="$refresh">
                {{ $notification['message'] }}
            </x-admin.alert>
        @endforeach
    @endif
</div>

