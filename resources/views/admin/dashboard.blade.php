<x-admin-layout>

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <x-admin.welcome-banner />

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">


        </div>

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

        </div>

    </div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">
            {{ __('admin.home') }}
        </h2>
    </x-slot>
</x-admin-layout>
