<x-app-layout>
    <div class="container mx-auto px-20 max-md:px-4 py-8">
        <div class="flex justify-between items-center">
            <div class="block mb-4 items-center">
                <h1 class="text-2xl font-semibold text-gray-800 mb-1">Ubah Data Jama'ah</h1>
                <p>Data Jama'ah Masjid Al-Ikhlas Pajang</p>
            </div>
            <div class="items-center">
                <div class="rounded-lg bg-[#40534C] p-2">
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

        <form method="POST" action="{{ route('admin.resident.update', ['id' => $resident->id]) }}" class="">
            @csrf
            @method('PUT')
            <div class="shadow-md rounded-xl border-2 border-[#40534C] bg-white p-16 max-md:p-8">
                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                        <label for="nik" class="block text-gray-700 font-medium mb-2">Nomor KK</label>
                        <input type="text" id="nik" name="nik" value="{{ old('nik', $resident->nik) }}"
                            class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                            required>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Nama KK</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $resident->name) }}"
                            class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                            required>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                        <label for="gender" class="block text-gray-700 font-medium mb-2">Jenis Kelamin</label>
                        <select id="gender" name="gender"
                            class="form-select mt-1 block w-full py-2 px-4 bg-gray-100 text-black border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                            required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki"
                                {{ old('gender', $resident->gender) == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki
                            </option>
                            <option value="Perempuan"
                                {{ old('gender', $resident->gender) == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="birth" class="block text-gray-700 font-medium mb-2">Tempat Tanggal Lahir</label>
                        <input type="text" id="birth" name="birth" value="{{ old('birth', $resident->birth) }}"
                            class="form-input mt-1 block w-full text-black bg-gray-100 border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                            required>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                        <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
                        <select id="status" name="status" onchange="toggleSpouseAndChildrenFields()"
                            class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                            required>
                            <option value="">Pilih Status</option>
                            <option value="Menikah"
                                {{ old('status', $resident->status) == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                            <option value="Belum Menikah"
                                {{ old('status', $resident->status) == 'Belum Menikah' ? 'selected' : '' }}>Belum
                                Menikah</option>
                        </select>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="religion" class="block text-gray-700 font-medium mb-2">Agama</label>
                        <select id="religion" name="religion"
                            class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                            required>
                            <option value="">Pilih Agama</option>
                            <option value="Islam"
                                {{ old('religion', $resident->religion) == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen"
                                {{ old('religion', $resident->religion) == 'Kristen' ? 'selected' : '' }}>Kristen
                            </option>
                            <option value="Katolik"
                                {{ old('religion', $resident->religion) == 'Katolik' ? 'selected' : '' }}>Katolik
                            </option>
                            <option value="Hindu"
                                {{ old('religion', $resident->religion) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Buddha"
                                {{ old('religion', $resident->religion) == 'Buddha' ? 'selected' : '' }}>Buddha
                            </option>
                            <option value="Konghucu"
                                {{ old('religion', $resident->religion) == 'Konghucu' ? 'selected' : '' }}>Konghucu
                            </option>
                            <option value="Lainnya"
                                {{ old('religion', $resident->religion) == 'Lainnya' ? 'selected' : '' }}>Lainnya
                            </option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-4 mb-6 ">
                    <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                        <label for="blood" class="block text-gray-700 font-medium mb-2">Golongan Darah</label>
                        <select id="blood" name="blood"
                            class="form-select mt-1 block w-full bg-gray-100 py-2 px-4 text-black border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                            required>
                            <option value="">Pilih Golongan Darah</option>
                            <option value="A" {{ old('blood', $resident->blood) == 'A' ? 'selected' : '' }}>A
                            </option>
                            <option value="B" {{ old('blood', $resident->blood) == 'B' ? 'selected' : '' }}>B
                            </option>
                            <option value="AB" {{ old('blood', $resident->blood) == 'AB' ? 'selected' : '' }}>AB
                            </option>
                            <option value="O" {{ old('blood', $resident->blood) == 'O' ? 'selected' : '' }}>O
                            </option>
                        </select>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="phone" class="block text-gray-700 font-medium mb-2">No. Hp</label>
                        <input type="text" id="phone" name="phone"
                            value="{{ old('phone', $resident->phone) }}"
                            class="form-input mt-1 block w-full text-black bg-gray-100 border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                            required>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                        <label for="job" class="block text-gray-700 font-medium mb-2">Pekerjaan</label>
                        <input type="text" id="job" name="job"
                            value="{{ old('job', $resident->job) }}"
                            class="form-input mt-1 block w-full text-black bg-gray-100 border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                            required>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="last_education" class="block text-gray-700 font-medium mb-2">Pendidikan
                            Terakhir</label>
                        <select id="last_education" name="last_education"
                            class="form-select mt-1 block w-full py-2 px-4 bg-gray-100 text-black border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                            required>
                            <option value="">Pilih Pendidikan</option>
                            <option value="Tidak Sekolah"
                                {{ old('last_education', $resident->last_education) == 'Tidak Sekolah' ? 'selected' : '' }}>
                                Tidak Sekolah</option>
                            <option value="SD"
                                {{ old('last_education', $resident->last_education) == 'SD' ? 'selected' : '' }}>
                                SD</option>
                            <option value="SMP"
                                {{ old('last_education', $resident->last_education) == 'SMP' ? 'selected' : '' }}>
                                SMP</option>
                            <option value="SMA"
                                {{ old('last_education', $resident->last_education) == 'SMA' ? 'selected' : '' }}>
                                SMA</option>
                            <option value="Diploma"
                                {{ old('last_education', $resident->last_education) == 'Diploma' ? 'selected' : '' }}>
                                Diploma</option>
                            <option value="Sarjana"
                                {{ old('last_education', $resident->last_education) == 'Sarjana' ? 'selected' : '' }}>
                                Sarjana</option>
                            <option value="Magister"
                                {{ old('last_education', $resident->last_education) == 'Magister' ? 'selected' : '' }}>
                                Magister</option>
                            <option value="Doktor"
                                {{ old('last_education', $resident->last_education) == 'Doktor' ? 'selected' : '' }}>
                                Doktor</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Spouse Fields -->
            <div id="spouseAndChildrenFields">
                <div class="shadow-md rounded-xl border-2 mt-16 border-[#40534C] bg-white px-16 pb-16 pt-6 max-md:p-8">
                    <h1 class="text-2xl text-[#40534C] border-b-2 border-[#40534C] font-bold mb-14 max-md:mb-8 leading-[3.5rem]">
                        Data Istri</h1>
                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                            <label for="name_wife" class="block text-gray-700 font-medium mb-2">Nama Istri</label>
                            <input type="text" id="name_wife" name="name_wife"
                                class="form-input mt-1 block w-full bg-gray-100 text-black border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                                value="{{ old('name_wife', $wife->name_wife ?? '') }}">
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <label for="birth_wife" class="block text-gray-700 font-medium mb-2">Tempat Tanggal
                                Lahir</label>
                            <input type="text" id="birth_wife" name="birth_wife"
                                class="form-input mt-1 block w-full bg-gray-100 text-black border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                                value="{{ old('birth_wife', $resident->wife->birth_wife ?? '') }}">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                            <label for="gender_wife" class="block text-gray-700 font-medium mb-2">Jenis
                                Kelamin</label>
                            <select id="gender_wife" name="gender_wife"
                                class="form-select mt-1 block w-full py-2 px-4 bg-gray-100 text-black border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki"
                                    {{ old('gender_wife', $resident->wife->gender_wife ?? '') == 'Laki-Laki' ? 'selected' : '' }}>
                                    Laki-Laki</option>
                                <option value="Perempuan"
                                    {{ old('gender_wife', $resident->wife->gender_wife ?? '') == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                        </div>

                        <div class="w-full md:w-1/2 px-4">
                            <label for="religion_wife" class="block text-gray-700 font-medium mb-2">Agama</label>
                            <select id="religion_wife" name="religion_wife"
                                class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50">
                                <option value="">Pilih Agama</option>
                                <option value="Islam"
                                    {{ old('religion_wife', $resident->wife->religion_wife ?? '') == 'Islam' ? 'selected' : '' }}>
                                    Islam</option>
                                <option value="Kristen"
                                    {{ old('religion_wife', $resident->wife->religion_wife ?? '') == 'Kristen' ? 'selected' : '' }}>
                                    Kristen</option>
                                <option value="Katolik"
                                    {{ old('religion_wife', $resident->wife->religion_wife ?? '') == 'Katolik' ? 'selected' : '' }}>
                                    Katolik</option>
                                <option value="Hindu"
                                    {{ old('religion_wife', $resident->wife->religion_wife ?? '') == 'Hindu' ? 'selected' : '' }}>
                                    Hindu</option>
                                <option value="Buddha"
                                    {{ old('religion_wife', $resident->wife->religion_wife ?? '') == 'Buddha' ? 'selected' : '' }}>
                                    Buddha</option>
                                <option value="Konghucu"
                                    {{ old('religion_wife', $resident->wife->religion_wife ?? '') == 'Konghucu' ? 'selected' : '' }}>
                                    Konghucu</option>
                                <option value="Lainnya"
                                    {{ old('religion_wife', $resident->wife->religion_wife ?? '') == 'Lainnya' ? 'selected' : '' }}>
                                    Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                            <label for="blood_wife" class="block text-gray-700 font-medium mb-2">Golongan
                                Darah</label>
                            <select id="blood_wife" name="blood_wife"
                                class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50">
                                <option value="">Pilih Golongan Darah</option>
                                <option value="A"
                                    {{ old('blood_wife', $resident->wife->blood_wife ?? '') == 'A' ? 'selected' : '' }}>
                                    A</option>
                                <option value="B"
                                    {{ old('blood_wife', $resident->wife->blood_wife ?? '') == 'B' ? 'selected' : '' }}>
                                    B</option>
                                <option value="AB"
                                    {{ old('blood_wife', $resident->wife->blood_wife ?? '') == 'AB' ? 'selected' : '' }}>
                                    AB</option>
                                <option value="O"
                                    {{ old('blood_wife', $resident->wife->blood_wife ?? '') == 'O' ? 'selected' : '' }}>
                                    O</option>
                            </select>
                        </div>

                        <div class="w-full md:w-1/2 px-4">
                            <label for="phone_wife" class="block text-gray-700 font-medium mb-2">No. Hp</label>
                            <input type="text" id="phone_wife" name="phone_wife"
                                class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                                value="{{ old('phone_wife', $resident->wife->phone_wife ?? '') }}">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                            <label for="job_wife" class="block text-gray-700 font-medium mb-2">Pekerjaan</label>
                            <input type="text" id="job_wife" name="job_wife"
                                class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                                value="{{ old('job_wife', $resident->wife->job_wife ?? '') }}">
                        </div>

                        <div class="w-full md:w-1/2 px-4">
                            <label for="last_education_wife" class="block text-gray-700 font-medium mb-2">Pendidikan
                                Terakhir</label>
                            <select id="last_education_wife" name="last_education_wife"
                                class="form-select mt-1 block w-full py-2 px-4 text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50">
                                <option value="">Pilih Pendidikan Terakhir</option>
                                <option value="SD"
                                    {{ old('last_education_wife', $resident->wife->last_education_wife ?? '') == 'SD' ? 'selected' : '' }}>
                                    SD</option>
                                <option value="SMP"
                                    {{ old('last_education_wife', $resident->wife->last_education_wife ?? '') == 'SMP' ? 'selected' : '' }}>
                                    SMP</option>
                                <option value="SMA"
                                    {{ old('last_education_wife', $resident->wife->last_education_wife ?? '') == 'SMA' ? 'selected' : '' }}>
                                    SMA</option>
                                <option value="Diploma"
                                    {{ old('last_education_wife', $resident->wife->last_education_wife ?? '') == 'Diploma' ? 'selected' : '' }}>
                                    Diploma</option>
                                <option value="S1"
                                    {{ old('last_education_wife', $resident->wife->last_education_wife ?? '') == 'S1' ? 'selected' : '' }}>
                                    S1</option>
                                <option value="S2"
                                    {{ old('last_education_wife', $resident->wife->last_education_wife ?? '') == 'S2' ? 'selected' : '' }}>
                                    S2</option>
                                <option value="S3"
                                    {{ old('last_education_wife', $resident->wife->last_education_wife ?? '') == 'S3' ? 'selected' : '' }}>
                                    S3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Children Fields -->
                <div class="shadow-md rounded-xl border-2 mt-16 border-[#40534C] bg-white px-16 pb-16 pt-6 max-md:p-8">
                    <h1 class="text-2xl text-[#40534C] border-b-2 border-[#40534C] font-bold mb-14 max-md:mb-8 leading-[3.5rem]">
                        Data Anak</h1>
                    <div id="childrenFields">
                        @foreach ($resident->children as $index => $child)
                            <div class="child-fields flex flex-wrap  -mx-4 mb-6">
                                <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                                    <label for="name_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Nama Anak</label>
                                    <input type="text" id="name_child_{{ $index }}" name="name_child[]"
                                        class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                                        value="{{ old('name_child.' . $index, $child->name_child) }}">
                                </div>

                                <div class="w-full md:w-1/2 px-4">
                                    <label for="birth_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Tempat Tanggal Lahir</label>
                                    <input type="text" id="birth_child_{{ $index }}" name="birth_child[]"
                                        class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                                        value="{{ old('birth_child.' . $index, $child->birth_child) }}">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-4 mb-6">
                                <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                                    <label for="gender_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Jenis Kelamin</label>
                                    <select id="gender_child_{{ $index }}" name="gender_child[]"
                                        class="form-select mt-1 block w-full py-2 px-4 text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki"
                                            {{ old('gender_child.' . $index, $child->gender_child) == 'Laki-Laki' ? 'selected' : '' }}>
                                            Laki-Laki</option>
                                        <option value="Perempuan"
                                            {{ old('gender_child.' . $index, $child->gender_child) == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                </div>
                                <div class="w-full md:w-1/2 px-4">
                                    <label for="status_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Status</label>
                                    <select id="status_child_{{ $index }}" name="status_child[]"
                                        onchange="toggleSpouseAndChildrenFields()"
                                        class="form-select mt-1 block w-full py-2 px-4 text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50">
                                        <option value="">Pilih Status</option>
                                        <option value="Menikah"
                                            {{ old('status_child.' . $index, $child->status_child) == 'Menikah' ? 'selected' : '' }}>
                                            Menikah</option>
                                        <option value="Belum Menikah"
                                            {{ old('status_child.' . $index, $child->status_child) == 'Belum Menikah' ? 'selected' : '' }}>
                                            Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-4 mb-6">
                                <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                                    <label for="blood_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Golongan Darah</label>
                                    <select id="blood_child_{{ $index }}" name="blood_child[]"
                                        class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50">
                                        <option value="">Pilih Golongan Darah</option>
                                        <option value="A"
                                            {{ old('blood_child.' . $index, $child->blood_child) == 'A' ? 'selected' : '' }}>
                                            A</option>
                                        <option value="B"
                                            {{ old('blood_child.' . $index, $child->blood_child) == 'B' ? 'selected' : '' }}>
                                            B</option>
                                        <option value="AB"
                                            {{ old('blood_child.' . $index, $child->blood_child) == 'AB' ? 'selected' : '' }}>
                                            AB</option>
                                        <option value="O"
                                            {{ old('blood_child.' . $index, $child->blood_child) == 'O' ? 'selected' : '' }}>
                                            O</option>
                                    </select>
                                </div>
                                <div class="w-full md:w-1/2 px-4">
                                    <label for="religion_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Agama</label>
                                    <select id="religion_child_{{ $index }}" name="religion_child[]"
                                        class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50">
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam"
                                            {{ old('religion_child.' . $index, $child->religion_child) == 'Islam' ? 'selected' : '' }}>
                                            Islam</option>
                                        <option value="Kristen"
                                            {{ old('religion_child.' . $index, $child->religion_child) == 'Kristen' ? 'selected' : '' }}>
                                            Kristen</option>
                                        <option value="Katolik"
                                            {{ old('religion_child.' . $index, $child->religion_child) == 'Katolik' ? 'selected' : '' }}>
                                            Katolik</option>
                                        <option value="Hindu"
                                            {{ old('religion_child.' . $index, $child->religion_child) == 'Hindu' ? 'selected' : '' }}>
                                            Hindu</option>
                                        <option value="Buddha"
                                            {{ old('religion_child.' . $index, $child->religion_child) == 'Buddha' ? 'selected' : '' }}>
                                            Buddha</option>
                                        <option value="Konghucu"
                                            {{ old('religion_child.' . $index, $child->religion_child) == 'Konghucu' ? 'selected' : '' }}>
                                            Konghucu</option>
                                        <option value="Lainnya"
                                            {{ old('religion_child.' . $index, $child->religion_child) == 'Lainnya' ? 'selected' : '' }}>
                                            Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-4 mb-6">
                                <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                                    <label for="phone_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">No. Hp</label>
                                    <input type="text" id="phone_child_{{ $index }}" name="phone_child[]"
                                        class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                                        value="{{ old('phone_child.' . $index, $child->phone_child) }}">
                                </div>
                                <div class="w-full md:w-1/2 px-4">
                                    <label for="job_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Pekerjaan</label>
                                    <input type="text" id="job_child_{{ $index }}" name="job_child[]"
                                        class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                                        value="{{ old('job_child.' . $index, $child->job_child) }}">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-4 mb-6">
                                <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                                    <label for="last_education_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Pendidikan Terakhir</label>
                                    <select id="last_education_child_{{ $index }}"
                                        name="last_education_child[]"
                                        class="form-select mt-1 block w-full py-2 px-4 text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50">
                                        <option value="">Pilih Pendidikan Terakhir</option>
                                        <option value="SD"
                                            {{ old('last_education_child.' . $index, $child->last_education_child) == 'SD' ? 'selected' : '' }}>
                                            SD</option>
                                        <option value="SMP"
                                            {{ old('last_education_child.' . $index, $child->last_education_child) == 'SMP' ? 'selected' : '' }}>
                                            SMP</option>
                                        <option value="SMA"
                                            {{ old('last_education_child.' . $index, $child->last_education_child) == 'SMA' ? 'selected' : '' }}>
                                            SMA</option>
                                        <option value="Diploma"
                                            {{ old('last_education_child.' . $index, $child->last_education_child) == 'Diploma' ? 'selected' : '' }}>
                                            Diploma</option>
                                        <option value="S1"
                                            {{ old('last_education_child.' . $index, $child->last_education_child) == 'S1' ? 'selected' : '' }}>
                                            S1</option>
                                        <option value="S2"
                                            {{ old('last_education_child.' . $index, $child->last_education_child) == 'S2' ? 'selected' : '' }}>
                                            S2</option>
                                        <option value="S3"
                                            {{ old('last_education_child.' . $index, $child->last_education_child) == 'S3' ? 'selected' : '' }}>
                                            S3</option>
                                    </select>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="w-full flex justify-end items-end mt-16 max-md:mt-8">
                        <div class="">
                            <button type="button" onclick="addChildField()"
                                class="py-2 px-4 bg-[#D6EFD8] text-[#40534C] rounded-md flex items-center hover:bg-[#40534C] hover:text-[#D6EFD8] hover:border-2 hover:border-[#D6EFD8]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                                <span>Tambah Anak</span>
                            </button>
                        </div>
                    </div>
                    
                </div>
                <div class="flex mt-8">
                    <button type="submit"
                        class="text-center w-full py-3 bg-[#40534C] text-white font-bold rounded-md hover:bg-[#D6EFD8] hover:text-[#40534C] hover:border-2 hover:border-[#40534C]">
                        Update
                    </button>
                </div>
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
            <div class="border-b-2 mt-16 border-[#40534C] max-md:mt-6">
                 <div class="flex flex-wrap -mx-4 mb-6 pt-16 max-md:pt-8">
                        <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                            <label for="name_child[]" class="block text-gray-700 font-medium mb-2">Nama Anak</label>
                            <input type="text" id="name_child" name="name_child[]"
                                class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50">
                        </div>

                        <div class="w-full md:w-1/2 px-4">
                            <label for="birth_child[]" class="block text-gray-700 font-medium mb-2">Tempat Tanggal
                                Lahir</label>
                            <input type="text" id="birth_child" name="birth_child[]"
                                class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                            <label for="gender_child[]" class="block text-gray-700 font-medium mb-2">Jenis
                                Kelamin</label>
                            <select id="gender_child[]" name="gender_child[]"
                                class="form-select mt-1 block w-full py-2 px-4 text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
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
                                class="form-select mt-1 block w-full py-2 px-4 text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                                >
                                <option value="">Pilih Status</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4 mb-6">

                        <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                            <label for="blood_child[]" class="block text-gray-700 font-medium mb-2">Golongan
                                Darah</label>
                            <select id="blood_child[]" name="blood_child[]"
                                class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
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
                                class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#40534C] rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
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

                        <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                            <label for="phone_child[]" class="block text-gray-700 font-medium mb-2">No. Hp</label>
                            <input type="text" id="phone_child[]" name="phone_child[]"
                                class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                                >
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <label for="job_child[]" class="block text-gray-700 font-medium mb-2">Pekerjaan</label>
                            <input type="text" id="job_child[]" name="job_child[]"
                                class="form-input mt-1 block w-full text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
                                >
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4 max-md:mb-6">
                            <label for="last_education_child[]" class="block text-gray-700 font-medium mb-2">Pendidikan
                                Terakhir</label>
                            <select id="last_education_child[]" name="last_education_child[]"
                                class="form-select mt-1 block w-full py-2 px-4 text-black border-[#40534C] bg-gray-100 rounded-md shadow-sm focus:border-[#40534C] focus:ring focus:ring-[#40534C] focus:ring-opacity-50"
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
