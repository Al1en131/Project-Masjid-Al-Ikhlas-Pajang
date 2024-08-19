<x-app-layout>
    <div class="py-9 max-md:px-4 px-20 max-md:py-6">
        <div class="mx-auto ">
            <div class="flex items-center justify-between pb-[31px] max-md:pb-4">
                <div class="">
                    <h1 class="pb-0 text-4xl font-medium text-[#475569] max-md:pb-0 max-md:text-lg">
                        Tambah Data Laporan Keuangan
                    </h1>
                </div>
                <div class="flex items-center justify-end">
                    <div class="rounded-lg bg-[#40534C] p-2">
                        <a class="" href="{{ route('admin.financial.index') }}">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <form action="{{ route('admin.financial.update', $financial->id) }}" method="POST" enctype="multipart/form-data"
                class=" space-y-6">
                @csrf
                @method('put')
                @if ($errors->any())
                    <div class="mb-5 text-red-500">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-10 grid gap-4 sm:grid-cols-2 sm:gap-6">
                    

                    <div class="block sm:col-span-2 sm:flex">
                        <label class="mb-1 block w-56 py-2.5 text-sm font-medium text-gray-900"
                            for="date">Tanggal</label>
                        <input
                            class="text-black border-[#40534C] bg-gray-100 rounded-md px-4 py-2.5 shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50 mb-1 w-full"
                            id="date" name="date" type="date" value="{{ old('date', $financial->date) }}" placeholder="" required="">
                    </div>
                    <div class="block sm:col-span-2 sm:flex">

                        <label class="mb-1 block w-56 py-2.5 text-sm font-medium text-gray-900" for="image">Upload
                            file</label>
                        <input
                            class="block text-sm text-gray-900 border border-[#40534C] rounded-lg cursor-pointer bg-gray-100 focus:outline-none focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50 mb-1 w-full"
                            id="file_input" name="image" type="file" value="{{ old('image', $financial->image) }}">


                    </div>
                </div>
                <button
                    class="text-center w-full py-3 bg-[#40534C] text-white font-bold rounded-md hover:bg-[#D6EFD8] hover:text-[#40534C] hover:border-2 hover:border-[#40534C]"
                    type="submit">
                    Update
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
