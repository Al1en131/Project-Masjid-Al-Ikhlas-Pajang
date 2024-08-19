<nav x-data="{ open: false }" class="bg-white  fixed w-full top-0 z-50 shadow-xl">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                @role('admin')
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                    <a href="{{route ('/')}}" class="text-3xl pr-6 text-[#40534C] font-bold max-md:pr-0">Al-Ikhlas</a>
                    <x-nav-link :href="route('admin.resident.index')" :active="request()->routeIs(['admin.resident.index'])">
                        {{ __('Data KK') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.resident.wife')" :active="request()->routeIs(['admin.resident.wife'])">
                        {{ __('Data Istri') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.resident.child')" :active="request()->routeIs(['admin.resident.child'])">
                        {{ __('Data Anak') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.financial.index')" :active="request()->routeIs(['admin.financial.index'])">
                        {{ __('Laporan Keuangan') }}
                    </x-nav-link>
                </div>
                @elserole('user')
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                    <a href="{{route ('/')}}" class="text-3xl pr-6 text-[#40534C] font-bold max-md:pr-0">Al-Ikhlas</a>
                </div>
                @endrole
                

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 gap-3">
                @role('admin')
                <div class="text-[#40534C] max-md:hidden">
                    <a href="{{ route('admin.profile.edit') }}"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg></a>
                </div>
                @endrole
               
                  
                <div x-data="{ open: false }" class="relative">
                    <!-- Trigger Button -->
                    <button @click="open = !open"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-[#40534C] bg-transparent  focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>
                        <svg class="fill-current h-4 w-4 ms-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="open" @click.away="open = false"
                        class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg z-10">
                        <a href="{{ route('profile.edit') }}"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100">{{ __('Profile') }}</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-100">{{ __('Log Out') }}</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    @role('admin')
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('/')" :active="request()->routeIs('/')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.resident.index')" :active="request()->routeIs('admin.resident.index')">
                {{ __('Data KK') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.resident.wife')" :active="request()->routeIs('admin.resident.wife')">
                {{ __('Data Istri') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.resident.child')" :active="request()->routeIs('admin.resident.child')">
                {{ __('Data Anak') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.financial.index')" :active="request()->routeIs('admin.financial.index')">
                {{ __('Laporan Keuangan') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.profile.edit')" :active="request()->routeIs('admin.profile.edit')">
                {{ __('Setting Profile Masjid') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
    @elserole('user')
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('/')" :active="request()->routeIs('/')">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
    @endrole

</nav>

