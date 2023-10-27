<div>
    <!-- component -->
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">

            <div>
                <h2 class="text-2xl font-semibold leading-tight">Students schedule</h2>
            </div>

            {{-- Table --}}
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    @if ($data->isNotEmpty())

                        <table class="min-w-full leading-normal table table-striped text-center">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Email
                                    </th>
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                            {{ $i->email }}</td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                            {{ $i->date }}</td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                            {{ $i->start_schedule }}</td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                            {{ $i->end_schedule }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="my-3">
                            {{ $data->links() }}
                        </div>
                    @else
                        <p>Schedules for students not found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
