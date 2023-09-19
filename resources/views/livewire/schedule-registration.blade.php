<div class="flex justify-center">
    <form class="w-full max-w-lg"  method="POST" >
        <div class="flex justify-between">
            <div>
                <x-button type="submit" class="bg-green-400 text-white" wire:click.prevent="create">
                    {{ __('Save') }}
                </x-button>
                <x-button x-data x-on:click="$dispatch('close-modal')" class="mb-3 inline" type="button">
                    {{ __('Close') }}
                </x-button>
            </div>
            <div>
                <button class="bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded" type="button" id="addMore">➕</button>
            </div>
        </div>
        <div class="my-4">
            @if (@isset($title))
                <h1 class="text-zinc-900 font-bold text-2xl">{{ $title }}</h1>
            @endif
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Date
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="date" name="date">
                @error('date')
                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-wrap w-full" id="time">

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="open">
                        Open
                    </label>
                    <input wire:modal="open"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="open" type="time" name="times[]">
                    @error('times')
                        <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="close">
                        Close
                    </label>
                    <input wire:modal="close"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="close" type="time" name="times[]">
                    @error('times')
                        <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </form>
</div>
