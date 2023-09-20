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

