@php
use Illuminate\Support\Facades\Route;
$route = Route::currentRouteName();
@endphp

<nav id="navbar" class="bg-transparent">
    <div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-20">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" id="mobile-menu" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <i class="las la-bars hidden"></i>
                    <i class="las la-times hidden"></i>
                </button>
            </div>

            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-12 w-auto" src="{{ asset('/images/logo.png') }}" alt="Logo">
                    <img class="hidden lg:block h-12 w-auto" src="{{ asset('/images/logo-brand.png') }}" alt="Logo">
                </div>
                <div class="hidden sm:block mx-auto">
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}" class="{{ $route == 'home' ? 'text-primary' : 'text-secondary' }} px-3 pt-5 pb-2 text-sm font-medium">Beranda</a>
                        <a href="#" class="{{ $route == 'lowongan' ? 'text-primary' : 'text-secondary' }} px-3 pt-5 pb-2 text-sm font-medium">Lowongan</a>
                        <a href="#" class="{{ $route == 'pengumuman' ? 'text-primary' : 'text-secondary' }} px-3 pt-5 pb-2 text-sm font-medium">Pengumuman</a>

                        <div>
                            <a href="#" id="other-menu" class="{{ $route == 'daftar-mitra' || $route == 'testimonial' || $route == 'faq' ? 'text-primary' : 'text-secondary' }} px-3 pt-5 pb-2 text-sm font-medium">
                                Lainnya <i class="las la-angle-down ml-1"></i>
                            </a>
                            <div id="other-menu-dropdown" class="absolute mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="other-menu" tabindex="-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="ml-3 relative">
                    <a class="bg-transparent border-2 border-primary flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="sm:hidden hidden" id="mobile-menu-navigation">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
    </div>
</nav>