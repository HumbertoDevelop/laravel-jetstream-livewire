<div class="flex justify-center">
    <form class="w-full">
        @csrf

        {{-- Buttons form --}}
        <div class="flex justify-between">
            <div>
                <x-button type="button" class="bg-green-400 text-white" wire:click="create">
                    {{ __('Save') }}
                </x-button>
            </div>
            <div>
                <button class="bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded" type="button"
                    wire:click="incrementCounter" id="addMore">➕</button>
            </div>
        </div>

        {{-- Body form --}}
        <div class="flex flex-wrap -mx-3 my-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Date
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="date" type="date" name="date" wire:model="date">
                @error('date')
                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                @enderror
            </div>

            @for ($i = 0; $i <= $timesCounter; $i++)
                <div class="flex flex-wrap w-full" {{-- id="time" --}}>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="open">
                            Open
                        </label>
                        <input wire:model="times.{{ $i }}.hora_entrada"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            type="time" name="hora_entrada">
                        @error('times{{ $i }}.hora_entrada')
                            <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="close">
                            Close
                        </label>
                        <input wire:model="times.{{ $i }}.hora_salida"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            type="time" name="hora_salida">
                        @error('times.{{ $i }}.hora_salida')
                            <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            @endfor

        </div>

    </form>
</div>
