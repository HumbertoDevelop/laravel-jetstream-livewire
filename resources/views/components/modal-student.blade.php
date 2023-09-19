@props(['title'])
<div class="fixed z-50 inset-0" x-data="{ show: false }" x-show="show" x-on:open-modal-student.window='show = true'
    x-on:close-modal-student.window='show = false' x-on:keydown.escape.window="show = false">
    {{-- Gray background --}}
    <div class="fixed inset-0 bg-gray-300 opacity-40" x-on:click="show = false">

    </div>
    {{-- Modal body --}}
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl grid grid-cols-1 justify-center p-4 overflow-scroll"
        style="max-height: 500px">
        <div class="flex justify-center">
            <form class="w-full max-w-lg">
                <div class="flex justify-between">
                    <x-button x-data x-on:click="$dispatch('close-modal-student')" class="mb-3 inline">
                        {{ __('Close') }}
                    </x-button>
                    <button class="bg-sky-500 hover:bg-gray-600 px-2 py-1 rounded" type="button"
                        id="addMore">Add</button>
                </div>
                <div class="my-4">
                    @if (@isset($title))
                        <h1 class="text-zinc-900 font-bold text-2xl">{{ $title }}</h1>
                    @endif
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Email
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="email" name="email">
                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" name="name">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Last name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" name="lastname">
                    </div>
                </div>
                <x-button type="submit">
                    
                </x-button>
            </form>
        </div>
    </div>
</div>
