<nav x-data="{ open: false }" class="bg-gray-900 text-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <a href="{{ route('dashboard') }}">
                </a>
                <span class="text-lg font-semibold">My Laravel App</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden sm:flex sm:space-x-8">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white hover:text-blue-400">
                    Home
                </x-nav-link>
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')" class="text-white hover:text-blue-400">
                    About
                </x-nav-link>
                <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')" class="text-white hover:text-blue-400">
                    Projects
                </x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="text-white hover:text-blue-400">
                    Contact
                </x-nav-link>
            </div>

            <!-- User Dropdown -->
            @auth
                <div class="hidden sm:flex sm:items-center">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-800 transition">
                                <div>{{ Auth::user()->name }}</div>
                                <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    Log Out
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth

            <!-- Hamburger Menu -->
            <div class="sm:hidden flex items-center">
                <button @click="open = ! open" class="p-2 rounded-md hover:bg-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-gray-800">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">Home</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">About</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('projects')" :active="request()->routeIs('projects')">Projects</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')">Contact</x-responsive-nav-link>
        </div>
    </div>
</nav>
