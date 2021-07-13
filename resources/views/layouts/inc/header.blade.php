@php
use Illuminate\Support\Facades\Route;
$route = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo-brand.png') }}" class="logo" alt="Logo SMK Negeri 1 Bojongsari">
        </a>

        <ul class="navbar-nav mx-auto mt-2 mt-lg-0 d-none d-md-flex">
            <li class="nav-item active">
                <a href="{{ route('home') }}" class="nav-link {{ $route == 'home' ? 'active' : '' }}">Beranda</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('lowongan') }}" class="nav-link {{ $route == 'lowongan' ? 'active' : '' }}">Lowongan</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pengumuman') }}" class="nav-link {{ $route == 'pengumuman' ? 'active' : '' }}">Pengumuman</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link {{ $route == 'daftar-mitra' || $route == 'testimonial' || $route == 'faq' ? 'active' : '' }} dropdown-toggle" href="#" id="navigation-lainnya" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Lainnya
                    <i class="las la-angle-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navigation-lainnya">
                    <a class="dropdown-item" href="{{ route('daftar-mitra') }}">Daftar Mitra</a>
                    <a class="dropdown-item" href="{{ route('testimonial') }}">Testimonial</a>
                    <a class="dropdown-item" href="{{ route('faq') }}">FAQ</a>
                </ul>
            </li>
        </ul>

        <ul class="navbar-nav mt-2 mt-lg-0 d-none d-md-flex">
            <li class="nav-item mx-1">
                <a class="btn btn-outline-primary" href="{{ route('login') }}">
                    Log in
                </a>
            </li>
            <li class="nav-item mx-1">
                <a class="btn btn-primary" href="{{ route('daftar') }}">
                    Daftar
                </a>
            </li>
        </ul>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-mobile" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>