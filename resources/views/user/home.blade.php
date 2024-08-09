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
            background-color: #42348b !important;
        }

        .text-white {
            color: white !important;
        }

        .transition-colors {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>

</head>

<body class="antialiased" id="home">
    <nav id="navbar"
        class="bg-transparent px-20 border-gray-200 max-md:px-4 fixed top-0 w-full py-2 z-50 transition-colors duration-300">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4">
            <a href="#" class="flex items-center">
                <span id="navbar-title"
                    class="self-center text-2xl font-semibold whitespace-nowrap text-[#42348b] transition-colors">Al-Ikhlas</span>
            </a>
            <div class="flex md:hidden">
                <button id="menu-toggle" type="button"
                    class="inline-flex items-center w-10 h-10 justify-center text-sm text-gray-500 hover:text-[#D9D9FF]">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <ul id="nav-menu"
                class="hidden flex-col p-4 md:p-0 font-medium md:flex md:flex-row md:space-x-8 md:mt-0 md:border-0 md:ml-auto bg-[#42348b] md:bg-transparent absolute md:static top-16 left-0 right-0 md:w-auto w-full">
                <li><a href="#home" class="block py-2 pl-3 pr-4 text-[#42348b] md:p-0 transition-colors">Home</a></li>
                <li><a href="#about" class="block py-2 pl-3 pr-4 text-[#42348b] md:p-0 transition-colors">Tentang</a>
                </li>
                <li><a href="#activities"
                        class="block py-2 pl-3 pr-4 text-[#42348b] md:p-0 transition-colors">Kegiatan</a></li>
                <li><a href="#gallery" class="block py-2 pl-3 pr-4 text-[#42348b] md:p-0 transition-colors">Galeri</a>
                </li>
                <li><a href="#tutorial"
                        class="block py-2 pl-3 pr-4 text-[#42348b] md:p-0 transition-colors">Tutorial</a></li>
                <li><a href="#contact" class="block py-2 pl-3 pr-4 text-[#42348b] md:p-0 transition-colors">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <img src="{{ asset('assets/image/bg2.jpg') }}" alt=""
        class="-z-10 absolute right-0 h-[600px] max-md:hidden">
    <div class="px-20 z-10  max-md:px-6 max-md:mt-32">
        <div class="text-white justify-center">
            <div class="flex justify-between items-center max-md:flex-col max-md:items-center">
                <div class="block pr-8 max-md:pr-0">
                    <p class="text-start max-md:hidden text-6xl font-bold text-[#42348b] leading-[70px]">
                        Data Jama'ah Masjid Al-Ikhlas Pajang
                    </p>
                    <p class="text-center hidden max-md:block text-6xl font-bold text-[#42348b] leading-[70px]">
                        Data Jama'ah Masjid <br /> Al-Ikhlas Pajang
                    </p>
                </div>
                <img src="{{ asset('assets/image/masjid4.png') }}" class="max-md:mx-auto" alt="">
            </div>
        </div>
    </div>
    <div class="px-20 mb-12">
        <div class="bg-white w-full border border-[#42348b] shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Data Jama'ah
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Masjid Al-Ikhlas Pajang
                </p>
            </div>
            <div class="border-t border-[#42348b]">
                <dl>
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
            </div>
        </div>
        
        <!-- Wife Data -->
        @if ($resident->wife)
        <div class="bg-white w-full border mt-16 border-[#42348b] shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Data Istri
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Masjid Al-Ikhlas Pajang
                </p>
            </div>
            <div class="border-t border-[#42348b]">
                <dl>
                    <div class=" bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Nama
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $resident->wife->name_wife }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Jenis Kelamin
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $resident->wife->gender_wife }}
                        </dd>
                    </div>
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Tempat, Tanggal Lahir
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $resident->wife->birth_wife }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Agama
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $resident->wife->religion_wife }}
                        </dd>
                    </div>
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Golongan Darah
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $resident->wife->blood_wife }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            No. Hp
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $resident->wife->phone_wife }}
                        </dd>
                    </div>
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Pekerjaan
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $resident->wife->job_wife }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Pendidikan Terakhir
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $resident->wife->last_education_wife }}
                        </dd>
                    </div>
                    <!-- Repeat similar structure for other wife data -->
                </dl>
            </div>
        </div>
        @endif
    
        <!-- Children Data -->
        @if ($resident->children->isNotEmpty())
        <div class="bg-white w-full border border-[#42348b] mt-16 shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Data Anak
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Masjid Al-Ikhlas Pajang
                </p>
            </div>
            <div class="border-t border-[#42348b]">
                <dl>
                    @foreach ($resident->children as $child)
                    <div class=" bg-[#efeffe] px-4 py-5 border-t border-[#42348b] sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Nama
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $child->name_child }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Jenis Kelamin
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $child->gender_child }}
                        </dd>
                    </div>
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Tempat, Tanggal Lahir
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $child->birth_child }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Agama
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $child->religion_child }}
                        </dd>
                    </div>
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Status
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $child->status_child }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Golongan Darah
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $child->blood_child }}
                        </dd>
                    </div>
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            No. Hp
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $child->phone_child }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Pekerjaan
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $child->job_child }}
                        </dd>
                    </div>
                    <div class="bg-[#efeffe] px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Pendidikan Terakhir
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $child->last_education_child }}
                        </dd>
                    </div> @endforeach
                </dl>
            </div>
        </div>
        @endif
    </div>
    




    <footer class="bg-[#42348b]
        px-20 py-4 shadow text-center">
    <div class="w-full">
        <span class="text-sm text-white">© 2024 <a href="https://flowbite.com/" class="hover:underline">KKN
                Kelompok 3 Pajang</a>. All Rights Reserved.
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
                    a.classList.remove("text-[#d9d9ff]");
                    if (a.getAttribute("href") === `#${current}`) {
                        a.classList.add("text-[#d9d9ff]");
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

    </body>

</html>
