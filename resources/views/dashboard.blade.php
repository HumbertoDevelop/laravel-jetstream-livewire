<x-app-layout>

    @livewireStyles
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teacher Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:students-dashboard-admin />
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <span class="text-green-500 text-xs">{{ session('success') }}</span>
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:schedules-dashboard-admin />
            </div>
        </div>
    </div>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:students-schedules-dashboard/>
            </div>
        </div>
    </div>

    

    @yield('scripts')
    @livewireScripts
</x-app-layout>
