<x-app-layout>
    <div class="flex flex-col min-h-full max-md:px-4 lg:px-20 py-9 max-md:py-6">
        <div class="max-w-full flex-grow">
            <div class="flex justify-between items-center mb-6 max-md:mb-4">
                <div class="font-Poppins">
                    <h1 class="text-4xl text-[#475569] font-medium pb-2 max-md:text-lg max-md:pb-0">Data Istri</h1>
                </div>

            </div>
            <div class="rounded-lg mb-7 max-md:mb-4 flex justify-between items-center w-full gap-2 max-md:gap-0">
                <div class="flex flex-wrap items-center w-full">
                    <!-- Search Bar -->
                    <div class="relative flex-grow">
                        <input type="text" id="table-search" placeholder="Search for items"
                            class="block w-full px-10 py-2 text-sm me-5 text-gray-900 border border-[#40534C] rounded-lg bg-gray-50 focus:ring-[#40534C] focus:border-[#40534C] " />
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
                    class="bg-[#40534C] text-white max-md:ml-4 px-4 py-2 w-16 rounded-lg shadow hover:border-[#40534C] hover:border hover:bg-[#d9d9ff] hover:text-[#40534C] focus:outline-none focus:ring-2 focus:ring-[#40534C] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                </button> --}}

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
                            <thead class="text-xs text-white uppercase bg-secondary">
                                <tr class="bg-[#40534C] text-white text-nowrap">
                                    <th class="px-6 py-3 text-center">No.</th>
                                    <th class="px-6 py-3 ">Nama Istri</th>
                       
                                    <th class="px-6 py-3">Tanggal Lahir</th>
                                    <th class="px-6 py-3 text-center">Gol. Darah</th>
                                    <th class="px-6 py-3">No. Telp</th>
                                    <th class="px-6 py-3">Nama Suami</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wives as $index => $wife)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 text-center">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4 ">{{ $wife->name_wife }}</td>
                                   
                                        <td class="px-6 py-">{{ $wife->birth_wife }}</td>
                                        <td class="px-6 py-4 text-center">{{ $wife->blood_wife }}</td>
                                        <td class="px-6 py-4">{{ $wife->phone_wife }}</td>
                                        <td class="px-6 py-4">{{ $wife->resident->name }}</td> <!-- Nama Suami -->
                                        {{-- <td class="px-6 py-4">
                                            <div class="w-full flex justify-around">
                                                <a href="{{ route('admin.wives.edit', ['id' => $wife->id]) }}"
                                                    class="text-yellow-500">
                                                    <!-- Edit Icon -->
                                                </a>
                                                <a href="{{ route('admin.wives.destroy', ['id' => $wife->id]) }}"
                                                    class="delete text-red-600">
                                                    <!-- Delete Icon -->
                                                </a>
                                            </div>
                                        </td> --}}
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
