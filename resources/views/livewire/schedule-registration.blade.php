<div class="flex justify-center">
    <form class="w-full"  >
        @csrf
        <div class="flex justify-between">
            <div>
                <x-button type="button" class="bg-green-400 text-white" 
                wire:click="create" 
                {{-- x-on:click="$dispatch('close-modal')" --}}
                >
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
        <div class="flex flex-wrap -mx-3 mb-6">
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
            <div class="flex flex-wrap w-full" id="time">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="open">
                        Hora de entrada
                    </label>
                    <input wire:model="times.0.hora_entrada"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="hora_entrada" type="time" name="hora_entrada">
                    @error('times.0.hora_entrada')
                        <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="close">
                        Hora de salida
                    </label>
                    <input wire:model="times.0.hora_salida"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="hora_salida" type="time" name="hora_salida">
                    @error('times.0.hora_salida')
                        <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
        </div>
        
    </form>
</div>
@section('scripts')
    <script>
        const addMoreBtn = document.getElementById('addMore');
        addMoreBtn.addEventListener('click', function(e) {
            // Crear un nuevo elemento de entrada de tiempo
            const template = `
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="grid-first-name">
                Open
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="grid-first-name" type="time" name="times[]">
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="grid-last-name">
                Close
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-last-name" type="time" name="times[]">
        </div>
    `;
            // Agregar el nuevo elemento de entrada de tiempo al contenedor
            const timeContainer = document.getElementById('time');
            timeContainer.insertAdjacentHTML('beforeend', template);

        });
    </script>
@endsection