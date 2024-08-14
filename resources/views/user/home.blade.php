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
            .bg-ungu {
                background-color: #40534C !important;
            }
            
            .transition-colors {
                transition: background-color 0.3s ease, color 0.3s ease;
            }
        </style>
        

</head>

<body class="antialiased min-h-screen " id="home">
    <nav id="navbar" class="fixed w-full top-0 left-0 z-50 px-20 max-md:px-4 transition-colors">
        <div class="flex flex-wrap items-center justify-between mx-auto py-4">
            <a href="{{ route('/') }}" class="flex items-center">
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
                <li><a href="{{ route('/') }}" class="block py-2 transition-colors text-[#40534C] max-md:text-[#C9DABF]">Home</a></li>
                <li><a href="{{ route('/') }}#about" class="block py-2 transition-colors text-[#40534C] max-md:text-[#C9DABF]">Tentang</a></li>
                <li><a href="{{ route('/') }}#activities" class="block py-2 transition-colors text-[#40534C] max-md:text-[#C9DABF]">Kegiatan</a></li>
                <li><a href="{{ route('/') }}#gallery" class="block py-2 transition-colors text-[#40534C] max-md:text-[#C9DABF]">Galeri</a></li>
                <li><a href="{{ route('/') }}#tutorial" class="block py-2 transition-colors text-[#40534C] max-md:text-[#C9DABF]">Tutorial</a></li>
                <li><a href="{{ route('/') }}#contact" class="block py-2 transition-colors text-[#40534C] max-md:text-[#C9DABF]">Kontak</a></li>
            </ul>
        </div>
    </nav>
    
    <img src="{{ asset('assets/image/bggg.jpg') }}" alt=""
        class="-z-10 absolute right-0 w-full max-md:hidden">
    <div class="px-20 z-10  max-md:px-4 pt-36 max-md:pt-0 pb-20 max-md:pb-4 max-md:mt-28">
        <div class="text-white justify-center">
            <div class="flex justify-between items-center max-md:flex-col max-md:items-center ">
                <div class="block pr-8 max-md:pr-0 mt-8 max-md:mt-0">
                    <p class="text-start max-md:hidden text-6xl font-bold text-[#40534C] leading-[70px]">
                        Data Jama'ah Masjid Al-Ikhlas Pajang
                    </p>
                    <p class="text-center hidden max-md:block text-6xl mb-10 text-shadow font-bold text-[#40534C] leading-[70px]">
                        Masjid </br> Al-Ikhlas Pajang
                    </p>
                    <div class="  items-center mt-10 justify-start text-center z-10 max-md:hidden ">
                        <a href="{{ route('user.create', ['user_id' => Auth::id()]) }}">
                            <button type="button"
                                class="focus:outline-none text-white flex items-center bg-[#40534C] hover:bg-[#C9DABF] hover:text-[#40534C] hover:border-[#40534C] hover:border rounded-lg text-sm px-8 py-3 max-md:px-4">
                                <span>Isi Form Data Jama'ah</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-end w-1/2 max-md:hidden">
                    <img src="{{ asset('assets/image/profil1.jpeg') }}"
                        class="w-96 object-cover rounded-xl transition-transform shadow-[10px_10px_0px_0px_rgba(64,83,76)] duration-300 hover:scale-105"
                        alt="Image 2">
                </div>
                <div class="  items-center my-8 justify-start text-center z-10 max-md:contents hidden ">
                    <a href="{{ route('user.create', ['user_id' => Auth::id()]) }}">
                        <button type="button"
                            class="focus:outline-none text-white flex items-center bg-[#40534C] hover:bg-[#C9DABF] hover:text-[#40534C] hover:border-[#40534C] hover:border rounded-lg text-sm px-8 py-3 max-md:px-4">
                            <span>Isi Form Data Jama'ah</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="px-20 mb-12 z-10 max-md:px-4 max-md:mt-8" id="activities">
        <div class="bg-white w-full border border-[#40534C] shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Data Jama'ah
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Masjid Al-Ikhlas Pajang
                </p>
            </div>
            <div class="border-t border-[#40534C]">
                @if ($residentExists)
                    <dl>
                        <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                NIK
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $resident->nik }}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Nama
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $resident->name }}
                            </dd>
                        </div>
                        <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Jenis Kelamin
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $resident->gender }}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Tempat, Tanggal Lahir
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $resident->birth }}
                            </dd>
                        </div>
                        <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Agama
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $resident->religion }}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Status
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $resident->status }}
                            </dd>
                        </div>
                        <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Golongan Darah
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $resident->blood }}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                No. Hp
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $resident->phone }}
                            </dd>
                        </div>
                        <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Pekerjaan
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $resident->job }}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Pendidikan Terakhir
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $resident->last_education }}
                            </dd>
                        </div>
                    </dl>
                @else
                    <p class="px-4 py-5 text-center text-gray-900">
                        Belum ada data pribadi                    </p>
                @endif
            </div>
        </div>
        
        
        <!-- Wife Data -->
        @if ($spouse)
        <div class="bg-white w-full border mt-16 border-[#40534C] shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Data Istri
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Masjid Al-Ikhlas Pajang
                </p>
            </div>
            <div class="border-t border-[#40534C]">
                <dl>
                    <div class=" bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Nama
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $spouse->name_wife }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Jenis Kelamin
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $spouse->gender_wife }}
                        </dd>
                    </div>
                    <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Tempat, Tanggal Lahir
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $spouse->birth_wife }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Agama
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $spouse->religion_wife }}
                        </dd>
                    </div>
                    <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Golongan Darah
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $spouse->blood_wife }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            No. Hp
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $spouse->phone_wife }}
                        </dd>
                    </div>
                    <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Pekerjaan
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $spouse->job_wife }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Pendidikan Terakhir
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $spouse->last_education_wife }}
                        </dd>
                    </div>
                    <!-- Repeat similar structure for other wife data -->
                </dl>
                @else
                    <p class="px-4 py-5 text-center text-gray-900">
              
                    </p>
                @endif

            </div>
        </div>

    
        <!-- Children Data -->
        @if ($resident)
        @if ($resident->children->isNotEmpty())
            <div class="bg-white w-full border mx-auto border-[#40534C] mt-16 shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Data Anak
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Masjid Al-Ikhlas Pajang
                    </p>
                </div>
                <div class="border-t border-[#40534C]">
                    <dl>
                        @foreach ($resident->children as $child)
                            <div class="bg-[#D6EFD8] px-4 py-5 border-t border-[#40534C] sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Nama</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $child->name_child }}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Jenis Kelamin</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $child->gender_child }}
                                </dd>
                            </div>
                            <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Tempat, Tanggal Lahir</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $child->birth_child }}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Agama</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $child->religion_child }}
                                </dd>
                            </div>
                            <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Status</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $child->status_child }}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Golongan Darah</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $child->blood_child }}
                                </dd>
                            </div>
                            <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">No. Hp</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $child->phone_child }}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Pekerjaan</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $child->job_child }}
                                </dd>
                            </div>
                            <div class="bg-[#D6EFD8] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Pendidikan Terakhir</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $child->last_education_child }}
                                </dd>
                            </div> @endforeach
                    </dl>
                </div>
            </div>
@else
<p class="px-4
        py-5 text-center text-gray-900">
    </p>
    @endif
@else
    <p class="px-4 py-5 text-center text-gray-900"></p>
    @endif

    </div>
    <footer class="bg-[#40534C]
        px-20 py-4 shadow text-center bottom-0">
        <div class="w-full">
            <span class="text-sm text-white">© 2024 <a href="https://flowbite.com/" class="hover:underline">Masjid
                    Al-Ikhlas Pajang</a>. All Rights Reserved.
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
    {{-- <script>
        document.addEventListener('scroll', function() {
            const activitiesSection = document.getElementById('activities');
            const navbar = document.querySelector('#navbar');
            const sectionPosition = activitiesSection.getBoundingClientRect();

            if (sectionPosition.top <= 0 && sectionPosition.bottom > 0) {
                navbar.classList.add('bg-ungu');
            } else {
                navbar.classList.remove('bg-ungu');
            }
        });
    </script> --}}
    <script>
        document.addEventListener('scroll', function() {
            const activitiesSection = document.getElementById('activities');
            const navbar = document.querySelector('#navbar');
            const navLinks = document.querySelectorAll('#nav-menu li a');
            const logoText = document.getElementById('navbar-title'); // Select the logo text
            const sectionPosition = activitiesSection.getBoundingClientRect();

            if (sectionPosition.top <= 0 && sectionPosition.bottom > 0) {
                navbar.classList.add('bg-ungu');
                navLinks.forEach(link => {
                    link.style.color = '#C9DABF'; // Change text color to light purple
                });
                logoText.style.color = '#C9DABF'; // Change logo text color to light purple
            } else {
                navbar.classList.remove('bg-ungu');
                navLinks.forEach(link => {
                    link.style.color = '#40534C'; // Revert text color to original
                });
                logoText.style.color = '#40534C'; // Revert logo text color to original
            }
        });
    </script>





    </body>

</html>
