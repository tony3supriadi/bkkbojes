@extends('layouts.app')

@section('content')
<section id="hero-banner">
    <div class="container">
        <div class="hero-01 row py-5">
            <div class="col-md-6">
                <p class="subtitle">Website Resmi</p>
                <h2 class="title">Bursa Kerja Khusus<br />SMK Negeri 1 Bojongsari</h2>

                <a href="{{ asset('daftar') }}" class="btn btn-primary btn-lg btn-register">Daftar Sekarang</a>
                <p class="login-text">Sudah punya akun? silahkan <a href="{{ route('login') }}">login</a></p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/hero-01.png') }}" alt="Hero image BKK SMK Negeri 1 Bojongsari" />
            </div>
        </div>
        <div class="hero-02 row py-5">
            <div class="col-md-6">
                <img src="{{ asset('images/hero-02.png') }}" alt="Hero image BKK SMK Negeri 1 Bojongsari" />
            </div>
            <div class="col-md-6">
                <h2 class="title">Temukan peluang karirmu di sini!</h2>
                <p class="subtitle">Dapatkan informasi lowongan kerja <strong>gratis</strong>, tersedia untuk alumni dan umum</p>
            </div>
        </div>
    </div>
</section>

<section id="how-to">
    <div class="container">
        <div class="row counting">
            <div class="col-md-2 offset-md-2">
                <div class="card card-body">
                    <h3>143</h3>
                    <p>Lowongan</p>
                </div>
            </div>
            <div class="col-md-2 offset-md-1">
                <div class="card card-body">
                    <h3>15</h3>
                    <p>Perusahaan</p>
                </div>
            </div>
            <div class="col-md-2 offset-md-1">
                <div class="card card-body">
                    <h3>1.378</h3>
                    <p>Pengguna</p>
                </div>
            </div>
        </div>

        <div class="row steps">
            <h3 class="title">Bagaimana Caranya?</h3>
            <p class="subtitle">Ikuti tiga langkah sederhana berikut</p>
        </div>

        <div class="row step-arrow">
            <div class="col-md-2 offset-md-3 arrow-01">
                <img src="{{ asset('images/step-arrow-01.png') }}" />
            </div>
            <div class="col-md-2 offset-md-2 arrow-02">
                <img src="{{ asset('images/step-arrow-02.png') }}" />
            </div>
        </div>

        <div class="row steps py-0">
            <div class="col-md-4 step-item">
                <img src="{{ asset('images/step-01.png') }}" />
                <h3 class="title">Daftar</h3>
                <p class="description">Klik tombol <strong>daftar</strong> dan lengkapi formulir pendaftaran</p>
            </div>
            <div class="col-md-4 step-item">
                <img src="{{ asset('images/step-02.png') }}" />
                <h3 class="title">Cari</h3>
                <p class="description"><strong>Cari</strong> dan temukan lowongan pekerjaanmu yang sesuai</p>
            </div>
            <div class="col-md-4 step-item">
                <img src="{{ asset('images/step-03.png') }}" />
                <h3 class="title">Lamar</h3>
                <p class="description">Ajukan <strong>lamaran</strong> pekerjaan, lalu ikuti prosedur selanjutnya</p>
            </div>
        </div>
</section>

<section id="mitra">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">Mitra Kami</h3>
                <p class="subtitle">Kami bekerjasama dengan perusahaan-perusahaan ternama</p>
            </div>
        </div>

        <div class="row py-4">
            <div class="col-md-3">
                <img src="{{ asset('images/logo-ahm.png') }}" />
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/logo-indofood.png') }}" />
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/logo-denso.png') }}" />
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/logo-paragon.png') }}" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <a href="{{ route('daftar-mitra') }}" class="btn btn-outline-primary">
                    Lihat Selengkapnya
                    <i class="las la-angle-double-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">Kata Mereka</h3>
                <p class="subtitle">Pengalaman mereka menggunakan situs ini</p>
            </div>
        </div>
        <div class="row tetimoni-lists">
            <div class="col-md-4">
                <div class="testimoni-item">
                    <div class="testimoni-item-image">
                        <img src="{{ asset('images/testimonial-01.png') }}" alt="testimonial">
                    </div>
                    <div class="testimoni-item-content">
                        <h3 class="title">Carson Frederick</h3>
                        <p class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac est laoreet, rhoncus erat interdum, tempor."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimoni-item">
                    <div class="testimoni-item-image">
                        <img src="{{ asset('images/testimonial-01.png') }}" alt="testimonial">
                    </div>
                    <div class="testimoni-item-content">
                        <h3 class="title">Carson Frederick</h3>
                        <p class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac est laoreet, rhoncus erat interdum, tempor."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimoni-item">
                    <div class="testimoni-item-image">
                        <img src="{{ asset('images/testimonial-02.png') }}" alt="testimonial">
                    </div>
                    <div class="testimoni-item-content">
                        <h3 class="title">Corine Munoz</h3>
                        <p class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac est laoreet, rhoncus erat interdum, tempor."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimoni-item">
                    <div class="testimoni-item-image">
                        <img src="{{ asset('images/testimonial-03.png') }}" alt="testimonial">
                    </div>
                    <div class="testimoni-item-content">
                        <h3 class="title">Lara Ponce</h3>
                        <p class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac est laoreet, rhoncus erat interdum, tempor."</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-12 text-center">
                <i class="las la-angle-double-down fa-2x text-primary"></i>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <a href="{{ route('daftar') }}" class="btn btn-primary mx-1">Daftar Sekarang</a>
                <a href="{{ route('lowongan') }}" class="btn btn-outline-primary mx-1">Cari Lowongan</a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
@endpush

@push('scripts')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/inits/slick-carousel.js') }}"></script>
@endpush