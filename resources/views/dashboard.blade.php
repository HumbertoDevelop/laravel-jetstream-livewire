<x-app-layout>
    
    @livewireStyles
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-nav-link class="bg-sky-800 text-white px-2 p-1 rounded-lg mb-2 cursor-pointer hover:text-white hover:bg-sky-600">
                {{__('New Schedule')}}
            </x-nav-link>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:schedules-dashboard-admin />
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-nav-link class="bg-sky-800 text-white px-2 p-1 rounded-lg mb-2 cursor-pointer hover:text-white hover:bg-sky-600">
                {{__('New Student')}}
            </x-nav-link>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:students-dashboard-admin/>
            </div>
        </div>
    </div> 
    
    @livewireScripts
</x-app-layout>
