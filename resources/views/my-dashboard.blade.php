<x-app-layout>

    @livewireStyles
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:dashboard-for-students />
            </div>
        </div>
    </div>

    @yield('scripts')
    @livewireScripts
</x-app-layout>
