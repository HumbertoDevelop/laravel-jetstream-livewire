<div>
    <!-- component -->
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">

            <div>
                <h2 class="text-2xl font-semibold leading-tight">My Schedules</h2>
            </div>


            {{-- Table --}}
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    @isset($schedules)
                        @if ($schedules->isNotEmpty())
                            <table class="min-w-full leading-normal table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Date
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Schedule start
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Schedule end
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($times as $i)
                                        @foreach ($i as $j)
                                            <tr>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                                    {{ $j->date }}</td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                                    {{ $j->start_schedule }}</td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                                    {{ $j->end_schedule }}</td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                                    <div class="container">
                                                        <a id="{{ $j->id }}" href="pdfFile/{{ $j->id }}"
                                                            name="option" target="_blank"
                                                            class="inline-flex items-center px-4 py-2 bg-green-700 text-white border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                                            href="/pdfFile">Definitely</a>
                                                        <a id="{{ $j->id }}" href="pdfFile/{{ $j->id }}"
                                                            name="option" target="_blank"
                                                            class="inline-flex items-center px-4 py-2 bg-orange-700 text-white border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Only
                                                            if absolutely necessary</a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach


                                </tbody>
                            </table>
                        @else
                            <p>There's not schedules assigned yet.</p>
                        @endif
                    @else
                        <p>There's not schedules assigned yet.</p>
                    @endisset

                </div>
            </div>
        </div>
    </div>
</div>
