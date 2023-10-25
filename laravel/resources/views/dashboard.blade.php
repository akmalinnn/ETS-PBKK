<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}\

        </h2>
        <x-nav-link :href="route('form_rekam')" :active="request()->routeIs('form_rekam')">
            {{ __('Form Rekam') }}
        </x-nav-link>
        <x-nav-link :href="route('list_rekam')" :active="request()->routeIs('list_rekam')">
            {{ __('List Rekam') }}
        </x-nav-link>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
