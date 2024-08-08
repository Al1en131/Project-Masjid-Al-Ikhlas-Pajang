<x-app-layout>
    <div class="container mx-auto px-20 max-md:px-8 py-8">
        <div class="flex justify-between items-center">
            <div class="block mb-4 items-center">
                <h1 class="text-2xl font-semibold text-gray-800 mb-1">Tambah Data Jama'ah</h1>
                <p>Data Jama'ah Masjid Al-Ikhlas Pajang</p>
            </div>
            <div class="items-center">
                <div class="rounded-lg bg-[#42348b] p-2">
                    <a class="" href="{{ route('admin.resident.index') }}">
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.resident.store') }}" class="">
            @csrf
            <div class="shadow-md rounded-xl border-2 border-[#42348b] bg-white p-16 max-md:p-8">
                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4">
                        <label for="nik" class="block text-gray-700 font-medium mb-2">Nomor KK</label>
                        <input type="text" id="nik" name="nik"
                            class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Nama KK</label>
                        <input type="text" id="name" name="name"
                            class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4">
                        <label for="gender" class="block text-gray-700 font-medium mb-2">Jenis Kelamin</label>
                        <select id="gender" name="gender"
                            class="form-select mt-1 block w-full py-2 px-4 bg-gray-100 text-black border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="birth" class="block text-gray-700 font-medium mb-2">Tempat Tanggal Lahir</label>
                        <input type="text" id="birth" name="birth"
                            class="form-input mt-1 block w-full text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4">
                        <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
                        <select id="status" name="status" onchange="toggleSpouseAndChildrenFields()"
                            class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                            <option value="">Pilih Status</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="religion" class="block text-gray-700 font-medium mb-2">Agama</label>
                        <select id="religion" name="religion"
                            class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4">
                        <label for="blood" class="block text-gray-700 font-medium mb-2">Golongan Darah</label>
                        <select id="blood" name="blood"
                            class="form-select mt-1 block w-full bg-gray-100 py-2 px-4 text-black border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                            <option value="">Pilih Golongan Darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="phone" class="block text-gray-700 font-medium mb-2">No. Hp</label>
                        <input type="text" id="phone" name="phone"
                            class="form-input mt-1 block w-full text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4">
                        <label for="job" class="block text-gray-700 font-medium mb-2">Pekerjaan</label>
                        <input type="text" id="job" name="job"
                            class="form-input mt-1 block w-full text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="last_education" class="block text-gray-700 font-medium mb-2">Pendidikan
                            Terakhir</label>
                        <select id="last_education" name="last_education"
                            class="form-select mt-1 block w-full py-2 px-4 bg-gray-100 text-black border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                            <option value="">Pilih Pendidikan Terakhir</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="Diploma">Diploma</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div id="spouseAndChildrenFields" class="hidden">
                <div
                    class=" shadow-md rounded-xl border-2 mt-16 border-[#42348b] bg-white px-16 pb-16 pt-6 max-md:p-8">
                    <h1 class="text-2xl text-[#42348b] border-b-2 border-[#42348b] font-bold mb-16 leading-[3.5rem]">
                        Data Istri</h1>
                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4">
                            <label for="name_wife" class="block text-gray-700 font-medium mb-2">Nama Istri</label>
                            <input type="text" id="name_wife" name="name_wife"
                                class="form-input mt-1 block w-full bg-gray-100 text-black border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <label for="birth_wife" class="block text-gray-700 font-medium mb-2">Tempat Tanggal
                                Lahir</label>
                            <input type="text" id="birth_wife" name="birth_wife"
                                class="form-input mt-1 block w-full bg-gray-100 text-black border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4">
                            <label for="gender_wife" class="block text-gray-700 font-medium mb-2">Jenis
                                Kelamin</label>
                            <select id="gender_wife" name="gender_wife"
                                class="form-select mt-1 block w-full py-2 px-4 bg-gray-100 text-black border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="w-full md:w-1/2 px-4">
                            <label for="religion_wife" class="block text-gray-700 font-medium mb-2">Agama</label>
                            <select id="religion_wife" name="religion_wife"
                                class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4">
                            <label for="blood_wife" class="block text-gray-700 font-medium mb-2">Golongan
                                Darah</label>
                            <select id="blood_wife" name="blood_wife"
                                class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                <option value="">Pilih Golongan Darah</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>

                        <div class="w-full md:w-1/2 px-4">
                            <label for="phone_wife" class="block text-gray-700 font-medium mb-2">No. Hp</label>
                            <input type="text" id="phone_wife" name="phone_wife"
                                class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4">
                            <label for="job_wife" class="block text-gray-700 font-medium mb-2">Pekerjaan</label>
                            <input type="text" id="job_wife" name="job_wife"
                                class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                        </div>

                        <div class="w-full md:w-1/2 px-4">
                            <label for="last_education_wife" class="block text-gray-700 font-medium mb-2 ">Pendidikan
                                Terakhir</label>
                            <select id="last_education_wife" name="last_education_wife"
                                class="form-select mt-1 block w-full py-2 px-4 text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                <option value="">Pilih Pendidikan Terakhir</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Diploma">Diploma</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div
                    class=" shadow-md rounded-xl border-2 mt-16 border-[#42348b] bg-white px-16 pb-16 pt-6 max-md:p-8">
                    <h1 class="text-2xl text-[#42348b] border-b-2 border-[#42348b] font-bold mb-20 leading-[3.5rem]">
                        Data Anak</h1>
                    <div id="childrenFields">
                        <div class="flex flex-wrap -mx-4 mb-6">
                            <div class="w-full md:w-1/2 px-4">
                                <label for="name_child[]" class="block text-gray-700 font-medium mb-2">Nama
                                    Anak</label>
                                <input type="text" id="name_child" name="name_child[]"
                                    class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                            </div>

                            <div class="w-full md:w-1/2 px-4">
                                <label for="birth_child[]" class="block text-gray-700 font-medium mb-2">Tempat Tanggal
                                    Lahir</label>
                                <input type="text" id="birth_child" name="birth_child[]"
                                    class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-4 mb-6">
                            <div class="w-full md:w-1/2 px-4">
                                <label for="gender_child[]" class="block text-gray-700 font-medium mb-2">Jenis
                                    Kelamin</label>
                                <select id="gender_child[]" name="gender_child[]"
                                    class="form-select mt-1 block w-full py-2 px-4 text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="w-full md:w-1/2 px-4">
                                <label for="status_child[]"
                                    class="block text-gray-700 font-medium mb-2">Status</label>
                                <select id="status_child[]" name="status_child[]"
                                    onchange="toggleSpouseAndChildrenFields()"
                                    class="form-select mt-1 block w-full py-2 px-4 text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                    <option value="">Pilih Status</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-4 mb-6">

                            <div class="w-full md:w-1/2 px-4">
                                <label for="blood_child[]" class="block text-gray-700 font-medium mb-2">Golongan
                                    Darah</label>
                                <select id="blood_child[]" name="blood_child[]"
                                    class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                    <option value="">Pilih Golongan Darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="w-full md:w-1/2 px-4">
                                <label for="religion_child[]"
                                    class="block text-gray-700 font-medium mb-2">Agama</label>
                                <select id="religion_child[]" name="religion_child[]"
                                    class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-4 mb-6">

                            <div class="w-full md:w-1/2 px-4">
                                <label for="phone_child[]" class="block text-gray-700 font-medium mb-2">No. Hp</label>
                                <input type="text" id="phone_child[]" name="phone_child[]"
                                    class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                            </div>
                            <div class="w-full md:w-1/2 px-4">
                                <label for="job_child[]"
                                    class="block text-gray-700 font-medium mb-2">Pekerjaan</label>
                                <input type="text" id="job_child[]" name="job_child[]"
                                    class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-4 mb-6">
                            <div class="w-full md:w-1/2 px-4">
                                <label for="last_education_child[]"
                                    class="block text-gray-700 font-medium mb-2">Pendidikan
                                    Terakhir</label>
                                <select id="last_education_child[]" name="last_education_child[]"
                                    class="form-select mt-1 block w-full py-2 px-4 text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                    <option value="">Pilih Pendidikan Terakhir</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-end items-end mt-16">
                        <div class="">
                            <button type="button" onclick="addChildField()"
                                class="py-2 px-4 bg-[#d9d9ff] text-[#42348b] rounded-md flex items-center hover:bg-[#33297a] hover:text-[#d9d9ff] hover:border-2 hover:border-[#d9d9ff]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6 mr-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                                <span>Tambah Anak</span>
                            </button>
                        </div>
                    </div>
                    
                    
                    
                    
                   
                </div>
            </div>

            <div class="flex mt-8">
                <button type="submit"
                    class="text-center w-full py-3 bg-[#42348b] text-white font-bold rounded-md hover:bg-[#d9d9ff] hover:text-[#42348b] hover:border-2 hover:border-[#42348b]">
                    Simpan
                </button>
            </div>
        </form>
    </div>
    <script>
        function toggleSpouseAndChildrenFields() {
            const status = document.getElementById('status').value;
            const spouseAndChildrenFields = document.getElementById('spouseAndChildrenFields');
            if (status === 'Menikah') {
                spouseAndChildrenFields.classList.remove('hidden');
            } else {
                spouseAndChildrenFields.classList.add('hidden');
            }
        }

        function addChildField() {
            const childrenFields = document.getElementById('childrenFields');
            const childFieldHtml = `
            <div class="border-t-2 mt-16 border-[#42348b]">
                 <div class="flex flex-wrap -mx-4 mb-6 pt-16">
                        <div class="w-full md:w-1/2 px-4">
                            <label for="name_child[]" class="block text-gray-700 font-medium mb-2">Nama Anak</label>
                            <input type="text" id="name_child" name="name_child[]"
                                class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                        </div>

                        <div class="w-full md:w-1/2 px-4">
                            <label for="birth_child[]" class="block text-gray-700 font-medium mb-2">Tempat Tanggal
                                Lahir</label>
                            <input type="text" id="birth_child" name="birth_child[]"
                                class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4">
                            <label for="gender_child[]" class="block text-gray-700 font-medium mb-2">Jenis
                                Kelamin</label>
                            <select id="gender_child[]" name="gender_child[]"
                                class="form-select mt-1 block w-full py-2 px-4 text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                >
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <label for="status_child[]" class="block text-gray-700 font-medium mb-2">Status</label>
                            <select id="status_child[]" name="status_child[]"
                                onchange="toggleSpouseAndChildrenFields()"
                                class="form-select mt-1 block w-full py-2 px-4 text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                >
                                <option value="">Pilih Status</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4 mb-6">

                        <div class="w-full md:w-1/2 px-4">
                            <label for="blood_child[]" class="block text-gray-700 font-medium mb-2">Golongan
                                Darah</label>
                            <select id="blood_child[]" name="blood_child[]"
                                class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                >
                                <option value="">Pilih Golongan Darah</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <label for="religion_child[]" class="block text-gray-700 font-medium mb-2">Agama</label>
                            <select id="religion_child[]" name="religion_child[]"
                                class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                >
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4 mb-6">

                        <div class="w-full md:w-1/2 px-4">
                            <label for="phone_child[]" class="block text-gray-700 font-medium mb-2">No. Hp</label>
                            <input type="text" id="phone_child[]" name="phone_child[]"
                                class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                >
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <label for="job_child[]" class="block text-gray-700 font-medium mb-2">Pekerjaan</label>
                            <input type="text" id="job_child[]" name="job_child[]"
                                class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                >
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4">
                            <label for="last_education_child[]" class="block text-gray-700 font-medium mb-2">Pendidikan
                                Terakhir</label>
                            <select id="last_education_child[]" name="last_education_child[]"
                                class="form-select mt-1 block w-full py-2 px-4 text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                >
                                <option value="">Pilih Pendidikan Terakhir</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Diploma">Diploma</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                    </div>
                    </div>
        `;
            childrenFields.insertAdjacentHTML('beforeend', childFieldHtml);
        }
    </script>
</x-app-layout>
