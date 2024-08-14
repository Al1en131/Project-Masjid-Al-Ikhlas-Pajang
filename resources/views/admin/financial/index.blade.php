<!-- resources/views/financials/index.blade.php -->

<x-app-layout>
    <div class="flex flex-col min-h-full max-md:px-10 lg:px-20 py-9 max-md:py-6">
        <div class="max-w-full flex-grow">
            <div class="flex justify-between items-center mb-6 max-md:mb-4">
                <div class="font-Poppins">
                    <h1 class="text-4xl text-[#475569] font-medium pb-2 max-md:text-lg max-md:pb-0">Financial Records</h1>
                </div>
                {{-- <div class="md:justify-end max-md:contents items-center">
                    <a href="{{ route('admin.financial.create') }}">
                        <button type="button"
                            class="focus:outline-none text-white flex items-center bg-[#40534C] hover:bg-[#d9d9ff] hover:text-[#40534C] hover:border-[#40534C] hover:border rounded-lg text-sm px-4 py-2.5 max-md:px-4 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg> <span>Add New Record</span>
                        </button>
                    </a>
                </div> --}}
            </div>

            @if(session('success'))
                <div align="center">
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            function showSuccessAlert() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: '{{ session('success') }}',
                                    customClass: {
                                        confirmButton: 'btn-success'
                                    },
                                });
                            }
                            showSuccessAlert();
                        });
                    </script>
                    <style>
                        .btn-success {
                            background-color: #40534C;
                            color: #fff;
                            border: none;
                            border-radius: 4px;
                            padding: 0.5em 1em;
                            font-size: 16px;
                        }
                    </style>
                </div>
            @endif

            <div class="text-gray-900">
                <div class="relative sm:rounded-lg">
                    <div class="overflow-x-auto rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-white uppercase bg-secondary">
                                <tr class="bg-[#40534C] text-white text-nowrap">
                                    <th class="px-6 py-3">Date</th>
                                    <th class="px-6 py-3">Media</th>
                                    <th class="px-6 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($financials as $financial)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 text-gray-900 whitespace-wrap font-normal">
                                            {{ \Carbon\Carbon::parse($financial->date)->format('F Y') }}
                                        </td>
                                        <td class="px-6 py-4">
                                    
                                            <img src="{{ $financial->getFirstMediaUrl('financial') }}" alt="Financial Media">
                                
                                        </td>
                                        {{-- <td class="px-6 py-4 content-center w-10 text-center">
                                            <div class="w-full flex justify-around">
                                                <a href="{{ route('financials.edit', $financial->id) }}"
                                                    class="text-yellow-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                </a>
                                                <form action="{{ route('financials.destroy', $financial->id) }}"
                                                    method="POST" class="delete" data-id="{{ $financial->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </button>
                                                </form>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('.delete');

        deleteLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const url = this.getAttribute('href');
                const id = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                });
            });
        });
    });
</script>
