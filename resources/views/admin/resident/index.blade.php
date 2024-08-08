<x-app-layout>
    <div class="flex flex-col min-h-full max-md:px-10 lg:px-20 py-9 max-md:py-6">
        <div class="max-w-full flex-grow">
            <div class="flex justify-between items-center mb-6 max-md:mb-4">
                <div class="font-Poppins">
                    <h1 class="text-4xl text-[#475569] font-medium pb-2 max-md:text-lg max-md:pb-0">Data Jama'ah</h1>
                </div>
                <div class=" md:justify-end max-md:contents items-center hidden">
                    <a href="{{ route('admin.resident.create') }}">
                        <button type="button"
                            class="focus:outline-none text-white flex items-center bg-[#42348b] hover:bg-[#d9d9ff] hover:text-[#42348b] hover:border-[#42348b] hover:border rounded-lg text-sm px-4 py-2.5 max-md:px-4 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg> <span>Tambah Jama'ah</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="rounded-lg mb-7 max-md:mb-4 flex justify-between items-center w-full gap-2 max-md:gap-0">
                <div class="flex flex-wrap items-center w-9/12">
                    <!-- Search Bar -->
                    <div class="relative flex-grow">
                        <input type="text" id="table-search" placeholder="Search for items"
                            class="block w-full px-10 py-2 text-sm me-5 text-gray-900 border border-[#42348b] rounded-lg bg-gray-50 focus:ring-[#42348b] focus:border-[#42348b] " />
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 19l-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Filter Button -->
                {{-- <button id="filter-button"
                    class="bg-[#42348b] text-white max-md:ml-4 px-4 py-2 w-16 rounded-lg shadow hover:border-[#42348b] hover:border hover:bg-[#d9d9ff] hover:text-[#42348b] focus:outline-none focus:ring-2 focus:ring-[#42348b] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                </button> --}}

                <div class=" md:justify-end max-md:contents w-3/12 items-center">
                    <a href="{{ route('admin.resident.create') }}">
                        <button type="button"
                            class="focus:outline-none max-md:hidden text-white text-center justify-center flex items-center bg-[#42348b] hover:bg-[#d9d9ff] hover:border-[#42348b] hover:border hover:text-[#42348b] rounded-lg text-sm px-4 py-2.5 max-md:px-4 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg> <span>Tambah Jama'ah</span>
                        </button>
                    </a>
                </div>

                <!-- Filter Panel -->
                <!-- Modal Background -->
                {{-- <div id="filter-modal" class="hidden">
                    <button id="close-modal">Close</button>
                    <div>
                        <label for="status-filter">Status:</label>
                        <input type="text" id="status-filter">
                    </div>
                    <div>
                        <label for="orphan-filter">Orphan:</label>
                        <input type="text" id="orphan-filter">
                    </div>
                    <div>
                        <label for="blood-filter">Blood:</label>
                        <input type="text" id="blood-filter">
                    </div>
                    <button id="reset-filter">Reset</button>
                    <button id="apply-filter">Apply</button>
                </div> --}}


            </div>
            <div class="text-gray-900">
                <div class="relative sm:rounded-lg">
                    <div class="overflow-x-auto rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-white uppercase bg-secondary ">
                                <tr class="bg-[#42348b] text-white text-nowrap">
                                    <th class="px-6 py-3">No.</th>
                                    <th class="px-6 py-3">NIK</th>
                                    <th class="px-6 py-3">Nama</th>
                                    <th class="px-6 py-3">Jenis Kelamin</th>
                                    <th class="px-6 py-3">Tanggal Lahir</th>
                                    <th class="px-6 py-3">Status</th>
                                    <th class="px-6 py-3">Gol. Darah</th>
                                    <th class="px-6 py-3">No. Telp</th>
                                    <th class="px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($residents as $index => $resident)
                                    <tr class="bg-white border-b">
                                        <th scope="row"
                                            class="px-6 py-4 text-gray-900 whitespace-wrap font-normal survey-title">
                                            {{ ++$index }}</th>
                                        <td class="px-6 py-4">{{ $resident->nik }}</td>
                                        <td class="px-6 py-4">{{ $resident->name }}</td>
                                        <td class="px-6 py-4 content-center w-10 text-center">
                                            {{ $resident->gender }}
                                        </td>
                                        <td class="px-6 py-4 w-12 content-center text-center">{{ $resident->birth }}
                                        </td>
                                        <td class="px-6 py-4 content-center w-10">
                                            {{ $resident->status }}
                                        </td>
                                        <td class="px-6 py-4 content-center text-center w-10">
                                            {{ $resident->blood }}
                                        </td>
                                        <td class="px-6 py-4 content-center w-10">
                                            {{ $resident->phone }}
                                        </td>
                                        <td class="px-6 py-4 content-center w-10">
                                            <div class="w-full flex justify-around">
                                                <a href="{{ route('admin.resident.edit', ['id' => $resident->id]) }}"
                                                    class="text-yellow-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('admin.resident.destroy', ['id' => $resident->id]) }}"
                                                    method="POST" class="delete text-red-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle the filter modal
        const filterButton = document.getElementById('filter-button');
        const filterModal = document.getElementById('filter-modal');
        const closeModal = document.getElementById('close-modal');
        const resetFilter = document.getElementById('reset-filter');
        const applyFilter = document.getElementById('apply-filter');
        const tableSearch = document.getElementById('table-search');

        if (filterButton && filterModal) {
            filterButton.addEventListener('click', function() {
                filterModal.classList.toggle('hidden');
            });
        }

        if (closeModal) {
            closeModal.addEventListener('click', function() {
                filterModal.classList.add('hidden');
            });
        }

        if (resetFilter) {
            resetFilter.addEventListener('click', function() {
                document.getElementById('status-filter').value = '';
                document.getElementById('orphan-filter').value = '';
                document.getElementById('blood-filter').value = '';
            });
        }

        if (applyFilter) {
            applyFilter.addEventListener('click', function() {
                const statusValue = document.getElementById('status-filter').value.toLowerCase().trim();
                const orphanValue = document.getElementById('orphan-filter').value.toLowerCase().trim();
                const bloodValue = document.getElementById('blood-filter').value.toLowerCase().trim();

                const rows = document.querySelectorAll('tbody tr');

                rows.forEach(row => {
                    const statusCell = row.querySelector('td:nth-child(5)').textContent
                        .toLowerCase().trim();
                    const orphanCell = row.querySelector('td:nth-child(6)').textContent
                        .toLowerCase().trim();
                    const bloodCell = row.querySelector('td:nth-child(7)').textContent
                        .toLowerCase().trim();

                    let match = true;

                    if (statusValue && statusCell !== statusValue) {
                        match = false;
                    }
                    if (orphanValue && orphanCell !== orphanValue) {
                        match = false;
                    }
                    if (bloodValue && bloodCell !== bloodValue) {
                        match = false;
                    }

                    row.style.display = match ? '' : 'none';
                });

                filterModal.classList.add('hidden');
            });
        }

        if (tableSearch) {
            tableSearch.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase().trim();
                const rows = document.querySelectorAll('tbody tr');

                rows.forEach(row => {
                    const cells = row.querySelectorAll('td');
                    let match = false;

                    cells.forEach(cell => {
                        if (cell.textContent.toLowerCase().includes(searchTerm)) {
                            match = true;
                        }
                    });

                    row.style.display = match ? '' : 'none';
                });
            });
        }
    });
</script>
