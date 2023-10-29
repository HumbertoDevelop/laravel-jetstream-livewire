<div class="flex justify-center">
    <form class="w-full">
        @csrf

        {{-- HEAD FORM --}}
        <div>
            <div>
                <x-button type="button" class="bg-gray-500 text-white" wire:click="add">
                    {{ __('Save') }}
                </x-button>
            </div>
            @if (session()->has('error'))
                <h3 class="bg-red-600 font-bold mt-3 p-2 rounded text-center text-sm text-white">
                    {{ session('error') }}</h3>
            @endif
            
        </div>

        <div class="flex my-6">
            <div>
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="date">
                    Date
                </label>
                <select wire:model="selectedDate"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="date" id="date">
                    <option value="0" selected>Select an option</option>
                    @foreach ($dates as $date)
                        <option value="{{ $date->id }}">
                            ({{ $date->date }})
                        </option>
                    @endforeach
                </select>
                @error('date')
                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                @enderror
            </div>
            <div class="mx-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="student">
                    Student
                </label>
                <select wire:model="selectedStudent"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="student" id="student">
                    <option value="0" selected>Select an option</option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}">
                            {{ $student->name }} - ({{ $student->email }})
                        </option>
                    @endforeach
                </select>
                @error('student')
                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                @enderror
            </div>
        </div>

        @if (session()->has('success'))
            <h3 class="bg-blue-300 font-bold mb-3 p-2 rounded text-center text-sm text-white">
                {{ session('success') }}</h3>
        @endif
    </form>
</div>
