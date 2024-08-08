<x-app-layout>
    <div class="container mx-auto px-20 max-md:px-8 py-8">
        <div class="flex justify-between items-center">
            <div class="block mb-4 items-center">
                <h1 class="text-2xl font-semibold text-gray-800 mb-1">Ubah Data Jama'ah</h1>
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

        <form method="POST" action="{{ route('admin.resident.update', ['id' => $resident->id]) }}" class="">
            @csrf
            @method('PUT')
            <div class="shadow-md rounded-xl border-2 border-[#42348b] bg-white p-16 max-md:p-8">
                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4">
                        <label for="nik" class="block text-gray-700 font-medium mb-2">Nomor KK</label>
                        <input type="text" id="nik" name="nik" value="{{ old('nik', $resident->nik) }}"
                            class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Nama KK</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $resident->name) }}"
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
                            class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
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

                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4">
                        <label for="blood" class="block text-gray-700 font-medium mb-2">Golongan Darah</label>
                        <select id="blood" name="blood"
                            class="form-select mt-1 block w-full bg-gray-100 py-2 px-4 text-black border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
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
                            class="form-input mt-1 block w-full text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4">
                        <label for="job" class="block text-gray-700 font-medium mb-2">Pekerjaan</label>
                        <input type="text" id="job" name="job"
                            value="{{ old('job', $resident->job) }}"
                            class="form-input mt-1 block w-full text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                            required>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <label for="last_education" class="block text-gray-700 font-medium mb-2">Pendidikan
                            Terakhir</label>
                        <select id="last_education" name="last_education"
                            class="form-select mt-1 block w-full py-2 px-4 bg-gray-100 text-black border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
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
                <div class="shadow-md rounded-xl border-2 mt-16 border-[#42348b] bg-white px-16 pb-16 pt-6 max-md:p-8">
                    <h1 class="text-2xl text-[#42348b] border-b-2 border-[#42348b] font-bold mb-16 leading-[3.5rem]">
                        Data Istri</h1>
                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4">
                            <label for="name_wife" class="block text-gray-700 font-medium mb-2">Nama Istri</label>
                            <input type="text" id="name_wife" name="name_wife"
                                class="form-input mt-1 block w-full bg-gray-100 text-black border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                value="{{ old('name_wife', $wife->name ?? '') }}"
>
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <label for="birth_wife" class="block text-gray-700 font-medium mb-2">Tempat Tanggal
                                Lahir</label>
                            <input type="text" id="birth_wife" name="birth_wife"
                                class="form-input mt-1 block w-full bg-gray-100 text-black border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                value="{{ old('birth_wife', $resident->wife->birth_date ?? '') }}">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4">
                            <label for="gender_wife" class="block text-gray-700 font-medium mb-2">Jenis
                                Kelamin</label>
                            <select id="gender_wife" name="gender_wife"
                                class="form-select mt-1 block w-full py-2 px-4 bg-gray-100 text-black border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki"
                                    {{ old('gender_wife', $resident->wife->gender ?? '') == 'Laki-Laki' ? 'selected' : '' }}>
                                    Laki-Laki</option>
                                <option value="Perempuan"
                                    {{ old('gender_wife', $resident->wife->gender ?? '') == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                        </div>

                        <div class="w-full md:w-1/2 px-4">
                            <label for="religion_wife" class="block text-gray-700 font-medium mb-2">Agama</label>
                            <select id="religion_wife" name="religion_wife"
                                class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                <option value="">Pilih Agama</option>
                                <option value="Islam"
                                    {{ old('religion_wife', $resident->wife->religion ?? '') == 'Islam' ? 'selected' : '' }}>
                                    Islam</option>
                                <option value="Kristen"
                                    {{ old('religion_wife', $resident->wife->religion ?? '') == 'Kristen' ? 'selected' : '' }}>
                                    Kristen</option>
                                <option value="Katolik"
                                    {{ old('religion_wife', $resident->wife->religion ?? '') == 'Katolik' ? 'selected' : '' }}>
                                    Katolik</option>
                                <option value="Hindu"
                                    {{ old('religion_wife', $resident->wife->religion ?? '') == 'Hindu' ? 'selected' : '' }}>
                                    Hindu</option>
                                <option value="Buddha"
                                    {{ old('religion_wife', $resident->wife->religion ?? '') == 'Buddha' ? 'selected' : '' }}>
                                    Buddha</option>
                                <option value="Konghucu"
                                    {{ old('religion_wife', $resident->wife->religion ?? '') == 'Konghucu' ? 'selected' : '' }}>
                                    Konghucu</option>
                                <option value="Lainnya"
                                    {{ old('religion_wife', $resident->wife->religion ?? '') == 'Lainnya' ? 'selected' : '' }}>
                                    Lainnya</option>
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
                                <option value="A"
                                    {{ old('blood_wife', $resident->wife->blood_type ?? '') == 'A' ? 'selected' : '' }}>
                                    A</option>
                                <option value="B"
                                    {{ old('blood_wife', $resident->wife->blood_type ?? '') == 'B' ? 'selected' : '' }}>
                                    B</option>
                                <option value="AB"
                                    {{ old('blood_wife', $resident->wife->blood_type ?? '') == 'AB' ? 'selected' : '' }}>
                                    AB</option>
                                <option value="O"
                                    {{ old('blood_wife', $resident->wife->blood_type ?? '') == 'O' ? 'selected' : '' }}>
                                    O</option>
                            </select>
                        </div>

                        <div class="w-full md:w-1/2 px-4">
                            <label for="phone_wife" class="block text-gray-700 font-medium mb-2">No. Hp</label>
                            <input type="text" id="phone_wife" name="phone_wife"
                                class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                value="{{ old('phone_wife', $resident->wife->phone ?? '') }}">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full md:w-1/2 px-4">
                            <label for="job_wife" class="block text-gray-700 font-medium mb-2">Pekerjaan</label>
                            <input type="text" id="job_wife" name="job_wife"
                                class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                value="{{ old('job_wife', $resident->wife->job ?? '') }}">
                        </div>

                        <div class="w-full md:w-1/2 px-4">
                            <label for="last_education_wife" class="block text-gray-700 font-medium mb-2">Pendidikan
                                Terakhir</label>
                            <select id="last_education_wife" name="last_education_wife"
                                class="form-select mt-1 block w-full py-2 px-4 text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                <option value="">Pilih Pendidikan Terakhir</option>
                                <option value="SD"
                                    {{ old('last_education_wife', $resident->wife->education ?? '') == 'SD' ? 'selected' : '' }}>
                                    SD</option>
                                <option value="SMP"
                                    {{ old('last_education_wife', $resident->wife->education ?? '') == 'SMP' ? 'selected' : '' }}>
                                    SMP</option>
                                <option value="SMA"
                                    {{ old('last_education_wife', $resident->wife->education ?? '') == 'SMA' ? 'selected' : '' }}>
                                    SMA</option>
                                <option value="Diploma"
                                    {{ old('last_education_wife', $resident->wife->education ?? '') == 'Diploma' ? 'selected' : '' }}>
                                    Diploma</option>
                                <option value="S1"
                                    {{ old('last_education_wife', $resident->wife->education ?? '') == 'S1' ? 'selected' : '' }}>
                                    S1</option>
                                <option value="S2"
                                    {{ old('last_education_wife', $resident->wife->education ?? '') == 'S2' ? 'selected' : '' }}>
                                    S2</option>
                                <option value="S3"
                                    {{ old('last_education_wife', $resident->wife->education ?? '') == 'S3' ? 'selected' : '' }}>
                                    S3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Children Fields -->
                <div class="shadow-md rounded-xl border-2 mt-16 border-[#42348b] bg-white px-16 pb-16 pt-6 max-md:p-8">
                    <h1 class="text-2xl text-[#42348b] border-b-2 border-[#42348b] font-bold mb-20 leading-[3.5rem]">
                        Data Anak</h1>
                    <div id="childrenFields">
                        @foreach ($resident->children as $index => $child)
                            <div class="child-fields flex flex-wrap -mx-4 mb-6">
                                <div class="w-full md:w-1/2 px-4">
                                    <label for="name_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Nama Anak</label>
                                    <input type="text" id="name_child_{{ $index }}" name="name_child[]"
                                        class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                        value="{{ old('name_child.' . $index, $child->name) }}">
                                </div>

                                <div class="w-full md:w-1/2 px-4">
                                    <label for="birth_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Tempat Tanggal Lahir</label>
                                    <input type="text" id="birth_child_{{ $index }}" name="birth_child[]"
                                        class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                        value="{{ old('birth_child.' . $index, $child->birth_date) }}">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-4 mb-6">
                                <div class="w-full md:w-1/2 px-4">
                                    <label for="gender_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Jenis Kelamin</label>
                                    <select id="gender_child_{{ $index }}" name="gender_child[]"
                                        class="form-select mt-1 block w-full py-2 px-4 text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki"
                                            {{ old('gender_child.' . $index, $child->gender) == 'Laki-Laki' ? 'selected' : '' }}>
                                            Laki-Laki</option>
                                        <option value="Perempuan"
                                            {{ old('gender_child.' . $index, $child->gender) == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                </div>
                                <div class="w-full md:w-1/2 px-4">
                                    <label for="status_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Status</label>
                                    <select id="status_child_{{ $index }}" name="status_child[]"
                                        onchange="toggleSpouseAndChildrenFields()"
                                        class="form-select mt-1 block w-full py-2 px-4 text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                        <option value="">Pilih Status</option>
                                        <option value="Menikah"
                                            {{ old('status_child.' . $index, $child->status) == 'Menikah' ? 'selected' : '' }}>
                                            Menikah</option>
                                        <option value="Belum Menikah"
                                            {{ old('status_child.' . $index, $child->status) == 'Belum Menikah' ? 'selected' : '' }}>
                                            Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-4 mb-6">
                                <div class="w-full md:w-1/2 px-4">
                                    <label for="blood_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Golongan Darah</label>
                                    <select id="blood_child_{{ $index }}" name="blood_child[]"
                                        class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                        <option value="">Pilih Golongan Darah</option>
                                        <option value="A"
                                            {{ old('blood_child.' . $index, $child->blood_type) == 'A' ? 'selected' : '' }}>
                                            A</option>
                                        <option value="B"
                                            {{ old('blood_child.' . $index, $child->blood_type) == 'B' ? 'selected' : '' }}>
                                            B</option>
                                        <option value="AB"
                                            {{ old('blood_child.' . $index, $child->blood_type) == 'AB' ? 'selected' : '' }}>
                                            AB</option>
                                        <option value="O"
                                            {{ old('blood_child.' . $index, $child->blood_type) == 'O' ? 'selected' : '' }}>
                                            O</option>
                                    </select>
                                </div>
                                <div class="w-full md:w-1/2 px-4">
                                    <label for="religion_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Agama</label>
                                    <select id="religion_child_{{ $index }}" name="religion_child[]"
                                        class="form-select mt-1 block w-full py-2 px-4 text-black bg-gray-100 border-[#42348b] rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam"
                                            {{ old('religion_child.' . $index, $child->religion) == 'Islam' ? 'selected' : '' }}>
                                            Islam</option>
                                        <option value="Kristen"
                                            {{ old('religion_child.' . $index, $child->religion) == 'Kristen' ? 'selected' : '' }}>
                                            Kristen</option>
                                        <option value="Katolik"
                                            {{ old('religion_child.' . $index, $child->religion) == 'Katolik' ? 'selected' : '' }}>
                                            Katolik</option>
                                        <option value="Hindu"
                                            {{ old('religion_child.' . $index, $child->religion) == 'Hindu' ? 'selected' : '' }}>
                                            Hindu</option>
                                        <option value="Buddha"
                                            {{ old('religion_child.' . $index, $child->religion) == 'Buddha' ? 'selected' : '' }}>
                                            Buddha</option>
                                        <option value="Konghucu"
                                            {{ old('religion_child.' . $index, $child->religion) == 'Konghucu' ? 'selected' : '' }}>
                                            Konghucu</option>
                                        <option value="Lainnya"
                                            {{ old('religion_child.' . $index, $child->religion) == 'Lainnya' ? 'selected' : '' }}>
                                            Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-4 mb-6">
                                <div class="w-full md:w-1/2 px-4">
                                    <label for="phone_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">No. Hp</label>
                                    <input type="text" id="phone_child_{{ $index }}" name="phone_child[]"
                                        class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                        value="{{ old('phone_child.' . $index, $child->phone) }}">
                                </div>
                                <div class="w-full md:w-1/2 px-4">
                                    <label for="job_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Pekerjaan</label>
                                    <input type="text" id="job_child_{{ $index }}" name="job_child[]"
                                        class="form-input mt-1 block w-full text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50"
                                        value="{{ old('job_child.' . $index, $child->job) }}">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-4 mb-6">
                                <div class="w-full md:w-1/2 px-4">
                                    <label for="last_education_child_{{ $index }}"
                                        class="block text-gray-700 font-medium mb-2">Pendidikan Terakhir</label>
                                    <select id="last_education_child_{{ $index }}"
                                        name="last_education_child[]"
                                        class="form-select mt-1 block w-full py-2 px-4 text-black border-[#42348b] bg-gray-100 rounded-md shadow-sm focus:border-[#42348b] focus:ring focus:ring-[#42348b] focus:ring-opacity-50">
                                        <option value="">Pilih Pendidikan Terakhir</option>
                                        <option value="SD"
                                            {{ old('last_education_child.' . $index, $child->education) == 'SD' ? 'selected' : '' }}>
                                            SD</option>
                                        <option value="SMP"
                                            {{ old('last_education_child.' . $index, $child->education) == 'SMP' ? 'selected' : '' }}>
                                            SMP</option>
                                        <option value="SMA"
                                            {{ old('last_education_child.' . $index, $child->education) == 'SMA' ? 'selected' : '' }}>
                                            SMA</option>
                                        <option value="Diploma"
                                            {{ old('last_education_child.' . $index, $child->education) == 'Diploma' ? 'selected' : '' }}>
                                            Diploma</option>
                                        <option value="S1"
                                            {{ old('last_education_child.' . $index, $child->education) == 'S1' ? 'selected' : '' }}>
                                            S1</option>
                                        <option value="S2"
                                            {{ old('last_education_child.' . $index, $child->education) == 'S2' ? 'selected' : '' }}>
                                            S2</option>
                                        <option value="S3"
                                            {{ old('last_education_child.' . $index, $child->education) == 'S3' ? 'selected' : '' }}>
                                            S3</option>
                                    </select>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" onclick="addChildField()"
                        class="mt-4 py-2 px-10 bg-[#d9d9ff] gap-2 justify-start text-[#42348b] rounded-md flex items-center hover:bg-[#33297a] hover:text-[#d9d9ff] hover:border-2 hover:border-[#d9d9ff]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                            stroke="currentColor" className="size-3">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Tambah Anak
                    </button>
                </div>
                <div class="flex mt-8">
                    <button type="submit"
                        class="text-center w-full py-3 bg-[#42348b] text-white font-bold rounded-md hover:bg-[#d9d9ff] hover:text-[#42348b] hover:border-2 hover:border-[#42348b]">
                        Update
                    </button>
                </div>
            </div>

        </form>

    </div>
</x-app-layout>
