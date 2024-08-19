<x-app-layout>
    <div class="py-9 max-md:px-4 max-md:py-6">
        <div class="mx-auto sm:px-6 lg:px-20">
            <div class="flex items-center justify-between pb-[31px] max-md:pb-4">
                <div class="">
                    <h1 class="pb-2 text-4xl font-medium text-[#475569] max-md:pb-0 max-md:text-lg">
                        Profile Masjid
                    </h1>
                </div>
                <div class="flex items-center justify-end">
                    <div class="rounded-lg bg-[#40534C] p-2">
                        <a class="" href="{{ route('dashboard') }}">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data"
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
                    {{-- <div class="block sm:col-span-2 sm:flex">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6" id="upload-container">
                                @if ($management->getFirstMediaUrl('management'))
                                    <div class="mb-4 flex justify-center md:justify-center">
                                        <img class="h-40 w-auto object-cover" id="media"
                                            src="{{ $management->getFirstMediaUrl('management') }}" alt="Uploaded Logo">
                                    </div>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to update logo</p>
                                @else
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload logo</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1 Mb)
                                    </p>
                                @endif
                            </div>
                            <input
                                class="w-full mb-1 text-sm hidden text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                type="file" name="media" accept="image/png, image/jpeg" id="dropzone-file">
                        </label>
                    </div> --}}
                    
                    <div class="block sm:col-span-2 sm:flex">
                        <label class="mb-1 block w-56 py-2.5 text-sm font-medium text-gray-900"
                            for="detail_contact">Detail Kontak</label>
                        <input
                            class="text-black border-[#40534C] bg-gray-100 rounded-md px-4 py-2.5 shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50 mb-1 w-full"
                            id="detail_contact" name="detail_contact" type="text"
                            value="{{ old('detail_contact', $profile->detail_contact) }}"
                            placeholder="Isi Tentang Masjid" required="">
                    </div>
                    <div class="block sm:col-span-2 sm:flex">
                        <label class="mb-1 block w-56 py-2.5 text-sm font-medium text-gray-900"
                            for="detail_account_number">No. Rekening</label>
                        <input
                            class="text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm px-4 py-2.5 focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50 mb-1 w-full"
                            id="detail_account_number" name="detail_account_number" type="text"
                            value="{{ old('detail_account_number', $profile->detail_account_number) }}"
                            placeholder="Isi Tentang Masjid" required="">
                    </div>

                    <div class="block sm:col-span-2 sm:flex">
                        <label class="mb-1 block w-56 py-2.5 text-sm font-medium text-gray-900" for="about">Tentang
                            Masjid</label>
                        <textarea
                            class="text-black border-[#40534C] bg-gray-100 rounded-md px-4 py-2.5 shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50 mb-1 w-full"
                            id="about" name="about" rows="4" placeholder="Your description here" required>{{ old('about', $profile->about) }}</textarea>

                    </div>
                    <div class="block sm:col-span-2 sm:flex">
                        <label class="mb-1 block w-56 py-2.5 text-sm font-medium text-gray-900" for="activity">Aktivitas
                            Masjid</label>
                        <textarea
                            class="text-black border-[#40534C] bg-gray-100 rounded-md px-4 py-2.5 shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50 mb-1 w-full"
                            id="activity" name="activity" rows="4" placeholder="Your description here" required>{{ old('activity', $profile->activity) }}</textarea>

                    </div>
                    <div class="block sm:col-span-2 sm:flex">
                        <label class="mb-1 block w-56 py-2.5 text-sm font-medium text-gray-900" for="gallery">Galeri
                            Masjid</label>
                        <textarea
                            class="text-black border-[#40534C] bg-gray-100 rounded-md px-4 py-2.5 shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50 mb-1 w-full"
                            id="gallery" name="gallery" rows="4" placeholder="Your description here" required>{{ old('gallery', $profile->gallery) }}</textarea>

                    </div>
                    <div class="block sm:col-span-2 sm:flex">
                        <label class="mb-1 block w-56 py-2.5 text-sm font-medium text-gray-900" for="address">Alamat Masjid
                            Masjid</label>
                        <textarea
                            class="text-black border-[#40534C] bg-gray-100 rounded-md px-4 py-2.5 shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50 mb-1 w-full"
                            id="address" name="address" rows="4" placeholder="Your description here" required>{{ old('address', $profile->address) }}</textarea>

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
