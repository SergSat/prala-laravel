<div
        x-data="{top: 0}"
        x-init="top = document.querySelector('header').offsetHeight" :style="'top:' + top + 'px'"
        class="sticky z-30">
    @if (!empty($notifications))
        @foreach ($notifications as $key => $notification)
            <x-admin.alert wire:key :key="$key" :status="$notification['status']" @saved="$refresh">
                {{ $notification['message'] }}
            </x-admin.alert>
        @endforeach
    @endif
</div>

