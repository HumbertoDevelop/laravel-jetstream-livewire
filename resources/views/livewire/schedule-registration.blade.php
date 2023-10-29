<div class="flex justify-center">
    <form class="w-full">
        @csrf
        <div class="flex justify-between">
            <div>
                <x-button type="button" class="bg-gray-500 text-white" wire:click="create">
                    {{ __('Save') }}
                </x-button>
            </div>

            <div>
                <button class="bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded" type="button"
                    wire:click="incrementCounter" id="addMore">➕</button>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 my-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Date
                </label>
                <input
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    id="date" type="date" name="date" wire:model="date">
                @error('date')
                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                @enderror
            </div>

            @for ($i = 0; $i <= $timesCounter; $i++)
                <div class="flex flex-wrap w-full mt-6 ">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="open">
                            Open
                        </label>
                        <input wire:model="times.{{ $i }}.hora_entrada"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
