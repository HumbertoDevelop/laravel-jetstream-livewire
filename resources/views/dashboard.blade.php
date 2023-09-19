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
            <x-my-modal title="Schedule">
            </x-my-modal>
            <x-button x-data x-on:click="$dispatch('open-modal')" class="mb-3" type="button">
                {{ __('New Schedule') }}
            </x-button>
            @if (session('success'))
                <span class="text-green-500 text-xs">{{ session('success') }}</span>
            @endif
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:schedules-dashboard-admin />
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <x-my-modal title="Stundent">
            </x-my-modal>
            <x-button x-data x-on:click="$dispatch('open-modal')" class="mb-3">
                {{__('New Student')}}
            </x-button> --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:students-dashboard-admin />
            </div>
        </div>
    </div>
    @yield('scripts')
    @livewireScripts
</x-app-layout>
