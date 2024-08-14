<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <style>
            .bg-purple {
                background-color: #40534C !important;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            }
            .text-white {
                color: #C9DABF !important;
            }
            .transition-colors {
                transition: background-color 0.3s ease, color 0.3s ease;
            }
            .text-shadow {
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4); /* Mengatur posisi dan warna shadow */
}
        </style>
        

</head>

<body class="antialiased" id="home">
    <nav id="navbar" class="bg-transparent px-20 border-gray-200 max-md:px-4 fixed top-0 w-full py-2 z-50 transition-colors duration-300">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4">
          <a href="#" class="flex items-center">
            <span id="navbar-title" class="self-center text-2xl font-semibold whitespace-nowrap text-[#40534C] transition-colors">Al-Ikhlas</span>
          </a>
          <div class="flex md:hidden">
            <button id="menu-toggle" type="button" class="inline-flex items-center w-10 h-10 justify-center text-sm text-gray-500 hover:text-[#C9DABF]">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
            </button>
          </div>
          <ul id="nav-menu" class="hidden flex-col p-4 md:p-0 font-medium md:flex md:flex-row md:space-x-8 md:mt-0 md:border-0 md:ml-auto bg-[#40534C] md:bg-transparent absolute md:static top-16 left-0 right-0 md:w-auto w-full">
            <li><a href="#about" class="block py-2 pl-3 pr-4 text-[#40534C] max-md:text-[#C9DABF] md:p-0 transition-colors text-shadow">Tentang</a></li>
            <li><a href="#activities" class="block py-2 pl-3 pr-4 text-[#40534C] max-md:text-[#C9DABF] md:p-0 transition-colors text-shadow">Kegiatan</a></li>
            <li><a href="#gallery" class="block py-2 pl-3 pr-4 text-[#40534C] max-md:text-[#C9DABF] md:p-0 transition-colors text-shadow">Galeri</a></li>
            <li><a href="#tutorial" class="block py-2 pl-3 pr-4 text-[#40534C] max-md:text-[#C9DABF] md:p-0 transition-colors text-shadow">Tutorial</a></li>
            <li><a href="#contact" class="block py-2 pl-3 pr-4 text-[#40534C] max-md:text-[#C9DABF] md:p-0 transition-colors text-shadow">Kontak</a></li>
          </ul>
        </div>
    </nav> 
    <img src="{{ asset('assets/image/bggg.jpg') }}" alt="" class="-z-10 absolute right-0 w-full  max-md:hidden">
    <div class="px-20 z-10 pt-44 pb-28 max-md:pt-0 max-md:pb-0 my-auto max-md:px-4 max-md:mt-28">
        <div class="text-white justify-center ">
            <div class="flex justify-between items-center max-md:flex-col  max-md:items-center">
                <div class="block pr-8 max-md:pr-0 w-1/2 max-md:w-full  max-md:mt-0">
                    <p class="text-start max-md:hidden text-6xl font-bold text-[#40534C] leading-[70px] text-shadow">
                        Masjid Al-Ikhlas Pajang
                    </p>
                    
                    <p class="text-center hidden max-md:block text-6xl text-shadow font-bold text-[#40534C] leading-[70px]">
                        Masjid </br> Al-Ikhlas Pajang
                    </p>
                    @if (Route::has('login'))
                    <div class="mt-10 flex max-md:justify-center max-md:flex-col max-md:items-center">
                        @auth
                        @role('admin')
                        <div class="flex gap-2 items-center">
                            <a href="{{ url('/dashboard') }}"
                                class="text-[#40534C] bg-white border-2 shadow-[2px_2px_4px_rgba(0,0,0,0.4)] border-[#40534C] focus:outline-none hover:bg-[#40534C] hover:text-white  font-medium rounded-full text-sm py-3 px-10 me-2 mb-2">Data Jama'ah</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="text-[#40534C] bg-white border-2 border-[#40534C] shadow-[2px_2px_4px_rgba(0,0,0,0.4)] focus:outline-none hover:bg-[#40534C] hover:text-white   font-medium rounded-full text-sm py-3 px-10 me-2 mb-2">Log Out</button>
                            </form>
                        </div>
                        @elserole('user')
                        <div class="flex max-sm:block gap-2 items-center max-sm:justify-center max-sm:space-y-5 max-sm:mx-auto max-sm:content-center max-sm:text-center max-sm:self-center">
                            <a href="{{ route('home', ['user_id' => Auth::id(), 'resident_id' => $resident_id ?? 0]) }}"
                                class="text-[#40534C] bg-white border-2 border-[#40534C] focus:outline-none hover:bg-[#40534C] hover:text-white font-medium rounded-full text-sm py-3 px-10 me-2 mb-2">Lihat Data Diri</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="text-[#40534C] bg-white border-2 border-[#40534C] focus:outline-none hover:bg-[#40534C] hover:text-white font-medium rounded-full text-sm py-3 px-10 me-2 mb-2">Log Out</button>
                            </form>
                        </div>
                        @endrole
                        @else
                        <div class="flex gap-2 items-center">
                            <a href="{{ route('login') }}"
                                class="text-[#40534C] bg-white border-2 shadow-[2px_2px_4px_rgba(0,0,0,0.4)] border-[#40534C] focus:outline-none hover:bg-[#40534C] hover:text-white font-medium rounded-full text-sm py-3 px-10 me-2 mb-2">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="text-[#40534C] bg-white border-2 shadow-[2px_2px_4px_rgba(0,0,0,0.4)] border-[#40534C] focus:outline-none hover:bg-[#40534C] hover:text-white font-medium rounded-full text-sm py-3 px-10 me-2 mb-2">Registrasi</a>
                            @endif
                        </div>
                        @endauth
                    </div> @endif
                
                </div>
                <div class="flex items-center justify-end w-1/2 max-md:hidden">
                    <img src="{{ asset('assets/image/profil1.jpeg') }}"
                        class="w-96 object-cover rounded-xl transition-transform shadow-[10px_10px_0px_0px_rgba(64,83,76)] duration-300 hover:scale-105"
                        alt="Image 2">
                </div>
    </div>
    </div>
    </div>
@role('admin')
<div class="container mx-auto px-20 pb-10 max-md:px-8">
    <div class="flex flex-wrap -m-4 text-center">
        <div class="p-4 md:w-1/3 sm:w-1/2 w-full">
            <div
                class="border-4 border-[#40534C] px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 bg-white">
                <h2 class="title-font font-medium text-3xl text-[#40534C]">{{ $totalJamaah }}</h2>
                <p class="leading-relaxed">Total Jama'ah</p>
            </div>
        </div>
        <div class="p-4 md:w-1/3 sm:w-1/2 w-full">
            <div
                class="border-4 border-[#40534C] px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 bg-white">
                <h2 class="title-font font-medium text-3xl text-[#40534C]">{{ $totalMale }}</h2>
                <p class="leading-relaxed">Laki-Laki</p>
            </div>
        </div>
        <div class="p-4 md:w-1/3 sm:w-1/2 w-full">
            <div
                class="border-4 border-[#40534C] px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 bg-white">
                <h2 class="title-font font-medium text-3xl text-[#40534C]">{{ $totalFemale }}</h2>
                <p class="leading-relaxed">Perempuan</p>
            </div>
        </div>
    </div>
</div>
@endrole
    <div class="text-gray-700 body-font px-20 max-md:px-8">
        <div class="justify-between flex max-md:block w-full mt-10 max-md:mt-10 items-center">
            <div class="w-full md:w-1/2 pr-6 max-md:pr-0 max-md:hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-center justify-center max-md:hidden">
                        <img src="{{ asset('assets/image/profil3.jpeg') }}"
                            class="w-full h-80 object-cover rounded-xl shadow-[10px_10px_0px_0px_rgba(64,83,76)] transition-transform duration-300 hover:scale-105"
                            alt="Image 1">
                    </div>
                    <div class="grid grid-cols-1 gap-6">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('assets/image/profil1.jpeg') }}"
                                class="w-full h-48 object-cover rounded-xl transition-transform shadow-[10px_10px_0px_0px_rgba(64,83,76)] duration-300 hover:scale-105"
                                alt="Image 2">
                        </div>
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('assets/image/masjid.jpg') }}"
                                class="w-full h-48 object-cover rounded-xl transition-transform shadow-[10px_10px_0px_0px_rgba(64,83,76)] duration-300 hover:scale-105"
                                alt="Image 3">
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-[#40534C] w-1/2 max-md:w-full max-md:mb-6 max-md:mt-10 pl-6 max-md:pl-0" id="about">
                <h1 class="font-bold text-4xl mb-6 max-md:text-center">Tentang Masjid</h1>
                @foreach ($profiles as $profile)
                <p class="max-md:text-center">{{ $profile->about }}</p> @endforeach

            </div>
            <div class="w-full md:w-1/2 pr-6 max-md:pr-0 hidden max-md:contents" data-aos="fade-up" data-aos-delay="200">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-center justify-center max-md:hidden">
                        <img src="{{ asset('assets/image/profil3.jpeg') }}"
                            class="w-full h-80 object-cover rounded-xl shadow-[10px_10px_0px_0px_rgba(64,83,76)] transition-transform duration-300 hover:scale-105"
                            alt="Image 1">
                    </div>
                    <div class="grid grid-cols-1 gap-6">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('assets/image/profil1.jpeg') }}"
                                class="w-full h-48 object-cover rounded-xl transition-transform shadow-[10px_10px_0px_0px_rgba(64,83,76)] duration-300 hover:scale-105"
                                alt="Image 2">
                        </div>
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('assets/image/masjid.jpg') }}"
                                class="w-full h-48 object-cover rounded-xl transition-transform shadow-[10px_10px_0px_0px_rgba(64,83,76)] duration-300 hover:scale-105"
                                alt="Image 3">
                        </div>
                    </div>
                </div>
            </div>
            <!-- image grid-->
        </div>
    </div>
    
    <svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320">
    <path fill="#D6EFD8" fill-opacity="1"
        d="M0,160L80,181.3C160,203,320,245,480,240C640,235,800,181,960,160C1120,139,1280,149,1360,154.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
    </path>
    </svg>
    <div class="py-10
        px-20 max-md:px-8 text-center text-[#40534C] bg-[#D6EFD8]" id="activities">
        <h1 class="font-bold text-4xl mb-6">Kegiatan Masjid</h1>
        <p class="pb-10">
            @foreach ($profiles as $profile)
                {{ $profile->activity }}
            @endforeach
        </p>
        <div class=" ">
            <div class="grid divide-y divide-[#40534C] ">
                <div class="py-5">
                    <details class="group text-[#40534C]">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none ">
                            <span class="text-xl"> Senin</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class=" mt-3 group-open:animate-fadeIn text-start">
                        <ul>
                            <li class="text-start items-center flex gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                </svg>
                                Pengajian Ibu-Ibu</li>
                            <li class="text-start items-center flex gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                </svg>
                                TPA</li>
                            <li class="text-start items-center flex gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                </svg>
                                Pengajian Bapak-Bapak</li>
                        </ul>
                        </p>

                    </details>
                </div>
                <div class="py-5">
                    <details class="group text-[#40534C]">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-xl"> Selasa</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class=" mt-3 group-open:animate-fadeIn text-start items-center flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                            </svg>
                            Tafsir
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-xl"> Rabu</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class=" mt-3 group-open:animate-fadeIn text-start items-center flex gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                            </svg>

                            Pengajian Ibu-Ibu (khusus RW 05 per minggu)
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-xl"> Kamis</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class=" mt-3 group-open:animate-fadeIn">
                        <ul>
                            <li class="text-start items-center flex gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                </svg>
                                TPA</li>
                            <li class="text-start items-center flex gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                </svg>
                                Pengajian Ibu-Ibu gabungan dari RW Pajang setiap minggu</li>
                        </ul>
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-xl"> Jum'at</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class=" mt-3 group-open:animate-fadeIn text-start items-center flex gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                            </svg>

                            Jum'at berkah dan Pengajian dari ustadz-ustadz Muhammadiyah
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-xl"> Sabtu</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class=" mt-3 group-open:animate-fadeIn text-start items-center flex gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                            </svg>

                            TPA
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="text-xl"> Ahad</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class=" mt-3 group-open:animate-fadeIn text-start items-center flex gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                            </svg>

                            Tensi (sebulan sekali)
                        </p>
                    </details>
                </div>

            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#D6EFD8" fill-opacity="1"
            d="M0,64L48,101.3C96,139,192,213,288,234.7C384,256,480,224,576,181.3C672,139,768,85,864,80C960,75,1056,117,1152,133.3C1248,149,1344,139,1392,133.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <div class="text-[#40534C] max-md:px-8 px-20" id="gallery">
        <h1 class="text-3xl  font-bold text-center mt-20">Galeri Media</h1>
        <p class="text-center text-lg mt-4">
            @foreach ($profiles as $profile)
                {{ $profile->gallery }}
            @endforeach
        </p>

        <div class="">
            <div class="container mx-auto py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <!-- Large item -->
                    <div class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxuYXR1cmV8ZW58MHwwfHx8MTcyMTA0MjYwMXww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Nature" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-2xl font-bold text-white">Explore Nature</h3>
                                <p class="text-white">Discover the beauty of the natural world</p>
                            </div>
                        </div>
                    </div>

                    <!-- Two small items -->
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxmb29kfGVufDB8MHx8fDE3MjEwNDI2MTR8MA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Food" class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Culinary Delights</h4>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHx0ZWNobm9sb2d5fGVufDB8MHx8fDE3MjEwNDI2Mjh8MA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Technology" class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Tech Innovations</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Three medium items -->
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="https://images.unsplash.com/photo-1503220317375-aaad61436b1b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHx0cmF2ZWx8ZW58MHwwfHx8MTcyMTA0MjY0MXww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Travel" class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Travel Adventures</h4>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxhcnR8ZW58MHwwfHx8MTcyMTA0MjY5Nnww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Art" class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Artistic Expressions</h4>
                            </div>
                        </div>
                    </div>

                    <!-- bottom cards -->
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="https://images.unsplash.com/photo-1530549387789-4c1017266635?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxzd2ltbWluZ3xlbnwwfDB8fHwxNzIxMDQzMjkxfDA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Sport" class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Swimming</h4>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="https://images.unsplash.com/photo-1611195974226-a6a9be9dd763?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8Y2hlc3N8ZW58MHwwfHx8MTcyMTA0MzI0Nnww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Sport" class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Chess</h4>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="https://images.unsplash.com/photo-1553778263-73a83bab9b0c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxmb290YmFsbHxlbnwwfDB8fHwxNzIxMDQzMjExfDA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Sport" class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Football</h4>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="https://images.unsplash.com/photo-1624526267942-ab0ff8a3e972?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxjcmlja2V0fGVufDB8MHx8fDE3MjEwNDMxNTh8MA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Sport" class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Cricket</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--credit by Surjith S M -->
    </div>
    <div class="justify-center  my-24 bg-[#40534C]" id="tutorial">
        <h1 class="text-3xl text-[#C9DABF] font-bold text-center pt-16">Tutorial Mengisi Data Jama'ah</h1>
        <div class="w-full max-w-6xl mx-auto px-8 md:px-6 pb-16 pt-12">
            <div class="flex justify-center">

                <!-- Modal video component -->
                <div class="[&_[x-cloak]]:hidden" x-data="{ modalOpen: false }">

                    <!-- Video thumbnail -->
                    <button
                        class="relative flex justify-center items-center focus:outline-none focus-visible:ring focus-visible:ring-indigo-300 rounded-3xl group"
                        @click="modalOpen = true" aria-controls="modal" aria-label="Watch the video">
                        <video width="768"
                            class="rounded-3xl shadow-2xl transition-shadow duration-300 ease-in-out" controls>
                            <source src="{{ asset('assets/image/bg-video.mp4') }}" type="video/mp4">
                        </video>
                        <!-- Play icon -->
                        <svg class="absolute pointer-events-none group-hover:scale-110 transition-transform duration-300 ease-in-out"
                            xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                            <circle class="fill-white" cx="36" cy="36" r="36" fill-opacity=".8" />
                            <path class="fill-[#80AF81] drop-shadow-2xl"
                                d="M44 36a.999.999 0 0 0-.427-.82l-10-7A1 1 0 0 0 32 29V43a.999.999 0 0 0 1.573.82l10-7A.995.995 0 0 0 44 36V36c0 .001 0 .001 0 0Z" />
                        </svg>
                    </button>
                    <!-- End: Video thumbnail -->

                    <!-- Modal backdrop -->
                    <div class="fixed inset-0 z-[99999] bg-black bg-opacity-50 transition-opacity" x-show="modalOpen"
                        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-100"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" aria-hidden="true"
                        x-cloak></div>
                    <!-- End: Modal backdrop -->

                    <!-- Modal dialog -->
                    <div id="modal" class="fixed inset-0 z-[99999] flex px-4 md:px-6 py-6" role="dialog"
                        aria-modal="true" x-show="modalOpen" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-75" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-out duration-200"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-75"
                        x-cloak>
                        <div class="max-w-5xl mx-auto h-full flex items-center">
                            <div class="w-full max-h-full rounded-3xl shadow-2xl aspect-video bg-black overflow-hidden"
                                @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                <video x-init="$watch('modalOpen', value => value ? $el.play() : $el.pause())" width="1920" height="1080" loop controls>
                                    <source src="https://cruip-tutorials.vercel.app/modal-video/video.mp4"
                                        type="video/mp4" />
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                    <!-- End: Modal dialog -->

                </div>
                <!-- End: Modal video component -->

            </div>
        </div>
        <div class=" items-center px-20 max-md:px-8 pb-16">
            <div class="">
                <div class="max-w-screen-md mx-auto  flex flex-col justify-between">

                    <div class="text-center">
                        <p class="mt-4 text-sm leading-7 text-white font-regular">
                            CARA
                        </p>
                        <h3 class="text-3xl sm:text-5xl leading-normal font-extrabold tracking-tight text-gray-900">
                            Bagaimana <span class="text-[#C9DABF]">mengisi Data Jama'ah?</span>
                        </h3>

                    </div>

                    <div class="mt-20">
                        <ul class="">
                            <li class=" bg-gray-100 p-5 pb-10 text-center mb-20">
                                <div class="flex flex-col items-center">
                                    <div class="flex-shrink-0 relative top-0 -mt-16">
                                        <div
                                            class="flex items-center justify-center h-20 w-20 rounded-full bg-[#80AF81] text-gray-50 border-4 border-white text-xl font-semibold">
                                            1
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="text-lg leading-6 font-semibold text-gray-900">Login / Registrasi
                                        </h4>
                                        <p class="mt-2 text-base leading-6 text-gray-500">
                                            Pengguna dapat melakukan registrasi atau login dengan menekan tombol
                                            Registrasi di sebelah kanan.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class=" bg-gray-100 p-5 pb-10 text-center mb-20">
                                <div class="flex flex-col items-center">
                                    <div class="flex-shrink-0 relative top-0 -mt-16">
                                        <div
                                            class="flex items-center justify-center h-20 w-20 rounded-full bg-[#80AF81] text-gray-50 border-4 border-white text-xl font-semibold">
                                            2
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="text-lg leading-6 font-semibold text-gray-900">Menuju Halaman Isi
                                            Form Data Jama'ah</h4>
                                        <p class="mt-2 text-base leading-6 text-gray-500">
                                            Setelah berhasil login atau registrasi, pengguna dapat mengisi data pribadi
                                            dengan cara klik tombol "Lihat Data Diri" kemudian klik tombol "Isi Form
                                            Data Jama'ah".
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class=" bg-gray-100 p-5 pb-10 text-center mb-20">
                                <div class="flex flex-col items-center">
                                    <div class="flex-shrink-0 relative top-0 -mt-16">
                                        <div
                                            class="flex items-center justify-center h-20 w-20 rounded-full bg-[#80AF81] text-gray-50 border-4 border-white text-xl font-semibold">
                                            3
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="text-lg leading-6 font-semibold text-gray-900">Isi Form Data Jama'ah
                                        </h4>
                                        <p class="mt-2 text-base leading-6 text-gray-500">
                                            Isi form sesuai dengan data yang dibutuhkan. Jika status yang dipilih adalah
                                            "menikah", maka form untuk data istri dan anak akan muncul. Namun, jika
                                            status "belum menikah" yang dipilih, form tersebut tidak akan muncul.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class=" bg-gray-100 p-5 pb-10 text-center mb-20">
                                <div class="flex flex-col items-center">
                                    <div class="flex-shrink-0 relative top-0 -mt-16">
                                        <div
                                            class="flex items-center justify-center h-20 w-20 rounded-full bg-[#80AF81] text-gray-50 border-4 border-white text-xl font-semibold">
                                            4
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="text-lg leading-6 font-semibold text-gray-900">Simpan Data</h4>
                                        <p class="mt-2 text-base leading-6 text-gray-500">
                                            Setelah mengisi data jama'ah, klik tombol "Simpan" untuk menyimpan data.
                                            Akan muncul pemberitahuan bahwa data berhasil disimpan.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class=" bg-gray-100 p-5 pb-10 text-center mb-20">
                                <div class="flex flex-col items-center">
                                    <div class="flex-shrink-0 relative top-0 -mt-16">
                                        <div
                                            class="flex items-center justify-center h-20 w-20 rounded-full bg-[#80AF81] text-gray-50 border-4 border-white text-xl font-semibold">
                                            5
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="text-lg leading-6 font-semibold text-gray-900">Cek Data yang Sudah
                                            Berhasil Dimasukkan</h4>
                                        <p class="mt-2 text-base leading-6 text-gray-500">
                                            Pengguna dapat melihat data yang telah disimpan di halaman "Data Diri"
                                            dengan mengklik tombol "Lihat Data Diri".Jika ingin mengedit data maka klik
                                            saja tombol "Isi Form Data Jama'ah"
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="px-20 max-md:px-8" id="contact">
        <h1 class="text-3xl font-bold text-center text-[#40534C] mb-16">Kunjungi Masjid Al-Ikhlas Pajang</h1>
    </div>
    <div class="w-full flex max-md:block gap-4">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.050171576622!2d110.78209847431884!3d-7.569509474762916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a143c0001b5b1%3A0x6ca0cdc1664dd88a!2sMasjid%20Al%20Ikhlas%20Pajang!5e0!3m2!1sid!2sid!4v1722581337611!5m2!1sid!2sid"
            class="w-1/2 max-md:w-full h-[450px]" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="px-20 max-md:px-8 my-auto py-10 w-1/2 max-md:w-full ">

            <dl class="space-y-10 md:space-y-12 md:block md:gap-x-8 md:gap-y-10">
                @foreach ($profiles as $profile)
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-[#40534C] text-white">
                                <!-- Heroicon name: globe-alt -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>

                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Alamat
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                {{ $profile->address }}
                            </dd>
                        </div>
                    </div>


                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-[#40534C] text-white">
                                <!-- Heroicon name: phone -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>

                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Nomor Telepon
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                {{ $profile->detail_contact }}
                            </dd>
                        </div>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
    {{-- @if (Route::has('login'))
    <div class=" max-md:px-8 ">
        <div class="text-[#40534C]
        text-center rounded-xl  bg-[#D6EFD8] py-16">
            <p class="font-bold text-5xl mb-6 ">Donasi Masjid Al-Ikhlas Pajang</p>
            @foreach ($profiles as $profile)
                <p class="text-2xl mb-2 font-bold">No.Rek : {{ $profile->detail_account_number }}</p>
                <p class="text-2xl font-bold">Bank Syariah Indonesia (BSI)</p>
            @endforeach
        </div>
    </div>
    @endif --}}

    <footer class="bg-[#40534C] px-20 py-4 shadow text-center">
        <div class="w-full">
            <span class="text-sm text-white">© 2024 <a href="https://flowbite.com/" class="hover:underline">
                    Masjid Al-Ikhlas Pajang</a>. All Rights Reserved.
            </span>
        </div>
    </footer>
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js"></script>
    <!-- Flowbite JS -->
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll("section");
            const navLinks = document.querySelectorAll("nav ul li a");

            window.onscroll = () => {
                let current = "";

                sections.forEach((section) => {
                    const sectionTop = section.offsetTop;
                    if (pageYOffset >= sectionTop - 60) { // Adjust offset for fixed header
                        current = section.getAttribute("id");
                    }
                });

                navLinks.forEach((a) => {
                    a.classList.remove("text-[#C9DABF]");
                    if (a.getAttribute("href") === `#${current}`) {
                        a.classList.add("text-[#C9DABF]");
                    }
                });
            };
        });
    </script>

    <style>
        body {
            font-family: 'Poppins';
        }
    </style>
    <script>
        var cont = 0;

        function loopSlider() {
            var xx = setInterval(function() {
                switch (cont) {
                    case 0: {
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").delay(400).fadeIn(400);
                        $("#sButton1").removeClass("bg-purple-800");
                        $("#sButton2").addClass("bg-purple-800");
                        cont = 1;

                        break;
                    }
                    case 1: {

                        $("#slider-2").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");

                        cont = 0;

                        break;
                    }


                }
            }, 8000);

        }

        function reinitLoop(time) {
            clearInterval(xx);
            setTimeout(loopSlider(), time);
        }



        function sliderButton1() {

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 0

        }

        function sliderButton2() {
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 1

        }

        $(window).ready(function() {
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");


            loopSlider();






        });
    </script>
    <script>
        extend: {
            keyframes: {
                fadeIn: {
                    "0%": {
                        opacity: 0
                    },
                    "100%": {
                        opacity: 100
                    },
                },
            },
            animation: {
                fadeIn: "fadeIn 0.2s ease-in-out forwards",
            },
        },
    </script>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.store("accordion", {
                tab: 0
            });

            Alpine.data("accordion", (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab =
                        this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? "-rotate-180" : "";
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` :
                        "";
                }
            }));
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuToggle = document.getElementById("menu-toggle");
            const navMenu = document.getElementById("nav-menu");

            menuToggle.addEventListener("click", function() {
                navMenu.classList.toggle("hidden");
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('navbar');
            const navLinks = document.querySelectorAll('#nav-menu a');
            const navbarTitle = document.getElementById('navbar-title');
            const sections = ['about', 'activities', 'gallery', 'tutorial', 'contact'].map(id => document
                .getElementById(id));

            window.addEventListener('scroll', function() {
                let scrolledPastHero = false;

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;

                    if (window.scrollY >= sectionTop - sectionHeight / 2) {
                        scrolledPastHero = true;
                    }
                });

                if (scrolledPastHero) {
                    navbar.classList.add('bg-purple');
                    navbarTitle.classList.add('text-white');
                    navLinks.forEach(link => link.classList.add('text-white'));
                } else {
                    navbar.classList.remove('bg-purple');
                    navbarTitle.classList.remove('text-white');
                    navLinks.forEach(link => link.classList.remove('text-white'));
                }
            });
        });
    </script>
    @if (session('success'))
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </body>

</html>
