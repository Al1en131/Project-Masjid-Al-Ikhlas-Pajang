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
    <nav id="navbar" class="bg-transparent px-20 border-gray-200 max-md:px-6 fixed top-0 w-full py-2 z-50 transition-colors duration-300">
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
    <div class="px-20 z-10 pt-44 pb-28 max-md:pt-0 max-md:pb-0 my-auto max-md:px-6 max-md:mt-32">
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
                    <div class="mt-10 max-md:mb-10 mb-0 flex max-md:justify-center max-md:flex-col max-md:items-center">
                        @auth
                        @role('admin')
                        <div class="flex gap-2 items-center">
                            <a href="{{ url('/dashboard') }}"
                                class="text-[#40534C] bg-white border-2 shadow-[2px_2px_4px_rgba(0,0,0,0.4)] border-[#40534C] focus:outline-none hover:bg-[#40534C] hover:text-white  font-medium rounded-full text-sm py-3 px-10 me-2 mb-2">Dashboard</a>
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
                <div class="lg:inset-y-0 lg:right-0 lg:w-1/2 my-4">
                    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full shadow-2xl md:shadow-[0_15px_30px_-10px_rgba(0,0,0,0.7)]" src="{{ asset('assets/image/profil1.jpeg') }}" alt="">
                </div>
                
                {{-- <div class="flex items-center justify-end w-1/2 max-md:hidden">
                    <img src="{{ asset('assets/image/profil1.jpeg') }}"
                        class="w-96 object-cover rounded-xl transition-transform shadow-xl border-2 border-[#40534C] duration-300 hover:scale-105"
                        alt="Image 2">
                </div> --}}
    </div>
    </div>
    </div>
@role('admin')
<div class="container mx-auto px-20 pb-36 max-md:pb-10 max-md:pt-8 max-md:px-6">
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
    <div class="text-gray-700 body-font px-20 max-md:px-6 pt-10 max-md:pt-0" id="about">
        <section>
            <div class=" mx-auto max-w-screen-xl flex flex-col lg:h-svh justify-center">
             <div class="flex flex-col ">
              <div class="mt-6 pt-12 max-md:pt-0">
               <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-24 items-center ">
                <div> <span class="text-gray-600  uppercase text-xs font-medium "> Masjid Al-Ikhlas Pajang Solo </span>
                 <p class="text-4xl mt-8 tracking-tighter font-semibold text-gray-700 text-balance"> Tentang Masjid </p>
                 @foreach ($profiles as $profile)
                 <p class="  mt-4 text-gray-700 text-balance">
                  {{ $profile->about }}</p> @endforeach
                 <div class="mt-6
        text-xs font-medium grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-2 text-gray-950">
    <div class="inline-flex items-center gap-3  text-xs text-gray-700"> <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20" fill="currentColor"
            class="w-7 h-7 rounded-full text-[#40534C] p-[6px] bg-[#D6EFD8] border border-[#40534C]">
            <path fill-rule="evenodd"
                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                clip-rule="evenodd" />
        </svg> <span class="text-gray-950 font-medium text-sm"> Bersih </span> </div>
    <div class="inline-flex items-center gap-3  text-xs text-gray-700"> <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20" fill="currentColor"
            class="w-7 h-7 rounded-full text-[#40534C] p-[6px] bg-[#D6EFD8] border border-[#40534C]">
            <path fill-rule="evenodd"
                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                clip-rule="evenodd" />
        </svg> <span class="text-gray-950 font-medium text-sm"> Fasilitas Lengkap </span> </div>
    <div class="inline-flex items-center gap-3  text-xs text-gray-700"> <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20" fill="currentColor"
            class="w-7 h-7 rounded-full text-[#40534C] p-[6px] bg-[#D6EFD8] border border-[#40534C]">
            <path fill-rule="evenodd"
                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                clip-rule="evenodd" />
        </svg> <span class="text-gray-950 font-medium text-sm"> Aktif Kegiatan </span> </div>
    <div class="inline-flex items-center gap-3  text-xs text-gray-700"> <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20" fill="currentColor"
            class="w-7 h-7 rounded-full text-[#40534C] p-[6px] bg-[#D6EFD8] border border-[#40534C]">
            <path fill-rule="evenodd"
                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                clip-rule="evenodd" />
        </svg> <span class="text-gray-950 font-medium text-sm"> Parkiran yang luas </span> </div>
    </div>
    </div>
    <div class="h-full md:order-first"> <img src="{{ asset('assets/image/image-5.jpeg') }}" alt="#_"
            class="border border-[#40534C] bg-gray-200 shadow-box shadow-gray-500/30 overflow-hidden aspect-square  w-full h-full object-cover object-center">
    </div>
    </div>
    @if (Route::has('login'))
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-24 items-center md:flex-row-reverse">
            <div> <span class="text-gray-600  uppercase text-xs font-medium max-md:pt-6"> MASJID AL-IKHLAS PAJANG SOLO
                </span>
                <p class="text-4xl mt-8 tracking-tighter font-semibold text-gray-700 text-balance"> Donasi Untuk Masjid
                </p>
                <p class="mt-4">" Berikanlah sedekah! Karena sedekah itu ibarat sungai yang mengalir. Kamu hanya akan
                    terus memperoleh manfaat dari air bersihnya. "</p>

                @foreach ($profiles as $profile)
                    <p class="text-md gap-3 mt-4 text-balance flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 rounded-full text-[#40534C] p-[5px] bg-[#D6EFD8] border border-[#40534C]">
                            <path fill-rule="evenodd"
                                d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="">No. Rek : {{ $profile->detail_account_number }}</span>
                    </p>
                    <p class="text-md gap-3 mt-2 text-balance flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            class="w-8 h-8 rounded-full text-[#40534C] p-[5px] bg-[#D6EFD8] border border-[#40534C]"
                            fill="#40534C"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160l0 8c0 13.3 10.7 24 24 24l400 0c13.3 0 24-10.7 24-24l0-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8-3.4-17.2-3.4-25.2 0zM128 224l-64 0 0 196.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512l448 0c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1L448 224l-64 0 0 192-40 0 0-192-64 0 0 192-48 0 0-192-64 0 0 192-40 0 0-192zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                        </svg>
                        <span class="">Bank Syariah Indonesia (BSI)</span>
                    </p>
                    <p class="text-md gap-3 mt-2 text-balance flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 rounded-full text-[#40534C] p-[5px] bg-[#D6EFD8] border border-[#40534C]">
                            <path fill-rule="evenodd"
                                d="M1 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3V6Zm4 1.5a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2 3a4 4 0 0 0-3.665 2.395.75.75 0 0 0 .416 1A8.98 8.98 0 0 0 7 14.5a8.98 8.98 0 0 0 3.249-.604.75.75 0 0 0 .416-1.001A4.001 4.001 0 0 0 7 10.5Zm5-3.75a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 0 1.5h-2.5a.75.75 0 0 1-.75-.75Zm0 6.5a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 0 1.5h-2.5a.75.75 0 0 1-.75-.75Zm.75-4a.75.75 0 0 0 0 1.5h2.5a.75.75 0 0 0 0-1.5h-2.5Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="">a.n Masjid Al-Ikhlas Pajang</span>
                    </p>
                @endforeach
            </div>
            <div class="h-full "> <img src="{{ asset('assets/image/masjid-4.jpeg') }}" alt="#_"
                    class=" bg-gray-200 border border-[#40534C] shadow-box shadow-gray-500/30 overflow-hidden aspect-square  w-full h-full object-cover object-center">
            </div>
        </div>
    @endif
    </div> <!-- Emds component -->
    <!-- Starts links to tutorial -->
    </div>
    </div>
    </section>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#D6EFD8" stroke="#D6EFD8" stroke-width="2" fill-opacity="1"
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
                                    <path d=" M6 9l6 6 6-6">
                                    </path>
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
        <h1 class="text-3xl  font-bold text-center mt-0">Galeri Masjid</h1>
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
                        <img src="{{ asset('assets/image/shalat.jpeg') }}" alt="Nature"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-2xl font-bold text-white">Masjid Al-Ikhlas</h3>
                                <p class="text-white">Isi Masjid Al-Ikhlas</p>
                            </div>
                        </div>
                    </div>

                    <!-- Two small items -->
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="{{ asset('assets/image/masjid-2.jpeg') }}" alt="Food"
                            class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Teras Masjid</h4>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="{{ asset('assets/image/shalat.jpeg') }}" alt="Technology"
                            class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Isi Masjid</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Three medium items -->
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="{{ asset('assets/image/kegiatan1.jpeg') }}" alt="Travel"
                            class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Qurban Idul Adha</h4>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="{{ asset('assets/image/kegiatan2.jpeg') }}" alt="Art"
                            class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Potong Daging Qurban</h4>
                            </div>
                        </div>
                    </div>

                    <!-- bottom cards -->
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="{{ asset('assets/image/kegiatan3.jpeg') }}" alt="Sport"
                            class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Pengajian</h4>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="{{ asset('assets/image/kegiatan4.jpeg') }}" alt="Sport"
                            class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">TPA </h4>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="{{ asset('assets/image/kegiatan5.jpeg') }}" alt="Sport"
                            class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Pengajian Ibu-Ibu</h4>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                        <img src="{{ asset('assets/image/profil5.jpeg') }}" alt="Sport"
                            class="w-full h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h4 class="text-xl font-bold text-white">Tulisan Masjid</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--credit by Surjith S M -->
    </div>
    <!-- component -->
    <!-- This is an example component -->
    <div class="bg-[#C9DABF] py-20 mt-20 max-md:px-6">
        <div class="max-w-2xl mx-auto  ">
            <p class="text-4xl font-bold text-[#40534C] text-center mb-20">Laporan Keuangan Masjid Al-Ikhlas Pajang</p>
            <div id="default-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative bg-black h-[450px] rounded-lg max-md:h-72">
                    <!-- Slide items -->
                    @foreach ($financial as $financial)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ url($financial->image) }}" class="block w-full h-full object-cover"
                                alt="Financial Image">
                            <span
                                class="absolute bottom-0 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 w-full text-center text-white text-lg px-4 py-2">
                                {{ \Carbon\Carbon::parse($financial->date)->format('F Y') }}
                            </span>
                        </div>
                    @endforeach
                </div>

                <!-- Slider controls -->
                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>


    <div class="justify-center  mb-28 max-md:mb-20 bg-[#40534C]" id="tutorial">
        <h1 class="text-3xl text-[#C9DABF] font-bold text-center pt-16">Tutorial Mengisi Data Jama'ah</h1>
        <div class="w-full max-w-6xl mx-auto px-8 md:px-6 pb-16 pt-12">
            <div class="flex justify-center">

                <!-- Modal video component -->
                <div class="[&_[x-cloak]]:hidden" x-data="{ modalOpen: false }">

                    <!-- Video thumbnail -->

                    <button
                        class="relative flex justify-center items-center focus:outline-none focus-visible:ring focus-visible:ring-indigo-300 rounded-3xl group"
                        @click="modalOpen = true" aria-controls="modal" aria-label="Watch the video"> <a
                            href="https://www.youtube.com/watch?v=IuMvNG9iZcI"><img
                                src="{{ asset('assets/image/tutor.jpg') }}" alt=""
                                class="rounded-3xl shadow-2xl transition-shadow duration-300 ease-in-out"
                                width="768"></a>

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
        <h1 class="text-3xl font-bold text-center text-[#40534C] mb-10">Kunjungi Masjid Al-Ikhlas Pajang</h1>
    </div>
    <div class="w-full flex items-center gap-16">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.050171576622!2d110.78209847431884!3d-7.569509474762916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a143c0001b5b1%3A0x6ca0cdc1664dd88a!2sMasjid%20Al%20Ikhlas%20Pajang!5e0!3m2!1sid!2sid!4v1722581337611!5m2!1sid!2sid"
            class="max-md:w-full w-1/2 h-[450px]" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="w-1/2 lg:mx-6 max-md:w-full max-md:mb-10">
            <div class=" ">

                <dl class="space-y-10 md:space-y-12 md:block md:gap-x-8 md:gap-y-10">
                    @foreach ($profiles as $profile)
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-[#40534C] text-white">
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
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-[#40534C] text-white">
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
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-[#40534C] text-white">
                                    <!-- Heroicon name: phone -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </div>
                            </div>
                            <div class="ml-4">
                                <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Nomor Rekening
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    {{ $profile->detail_account_number }}
                                </dd>
                            </div>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>




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
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

    </body>

</html>
