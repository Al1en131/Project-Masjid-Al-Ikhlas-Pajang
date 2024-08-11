<nav x-data="{ open: false }" class="bg-white border-b fixed w-full top-0 z-50 border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                @role('admin')
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs(['dashboard'])">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.resident.index')" :active="request()->routeIs(['admin.resident.index'])">
                        {{ __('Data KK') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.resident.wife')" :active="request()->routeIs(['admin.resident.wife'])">
                        {{ __('Data Istri') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.resident.child')" :active="request()->routeIs(['admin.resident.child'])">
                        {{ __('Data Anak') }}
                    </x-nav-link>
                </div>
                @elserole('user')
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('/') . '#about'" :active="request()->routeIs(['home'])">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('/') . '#activities'" :active="request()->routeIs(['home'])">
                        {{ __('Kegiatan') }}
                    </x-nav-link>
                    <x-nav-link :href="route('/') . '#gallery'" :active="request()->routeIs(['home'])">
                        {{ __('Galeri') }}
                    </x-nav-link>
                    <x-nav-link :href="route('/') . '#tutorial'" :active="request()->routeIs(['home'])">
                        {{ __('Tutorial') }}
                    </x-nav-link>
                    <x-nav-link :href="route('/') . '#contact'" :active="request()->routeIs(['home'])">
                        {{ __('Kontak') }}
                    </x-nav-link>
                </div>
                @endrole
                

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div x-data="{ open: false }" class="relative">
                    <!-- Trigger Button -->
                    <button @click="open = !open"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
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
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.resident.index')" :active="request()->routeIs('admin.resident.index')">
                {{ __('Data Jamaah') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.resident.wife')" :active="request()->routeIs('admin.resident.wife')">
                {{ __('Data Istri') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.resident.child')" :active="request()->routeIs('admin.resident.child')">
                {{ __('Data Anak') }}
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
            <x-responsive-nav-link :href="route('/') . '#about'" :active="request()->routeIs('home')">
                {{ __('Tentang') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('/') . '#activities'" :active="request()->routeIs('home')">
                {{ __('Kegiatan') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('/') . '#gallery'" :active="request()->routeIs('home')">
                {{ __('Galeri') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('/') . '#tutorial'" :active="request()->routeIs('home')">
                {{ __('Tutorial') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('/') . '#contact'" :active="request()->routeIs('home')">
                {{ __('Kontak') }}
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

