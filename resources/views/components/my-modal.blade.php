@props(['title'])
<div class="fixed z-50 inset-0" x-data="{ show: false }" x-show="show" x-on:open-modal.window='show = true'
    x-on:close-modal.window='show = false' x-on:keydown.escape.window="show = false">
    {{-- Gray background --}}
    <div class="fixed inset-0 bg-gray-300 opacity-40" x-on:click="show = false">

    </div>
    {{-- Modal body --}}
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl grid grid-cols-1 justify-center items-center p-4 overflow-scroll"
        style="max-height: 500px">
        <livewire:schedule-registration/>
    </div>
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
