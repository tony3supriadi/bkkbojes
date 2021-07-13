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

        <div class="row steps py-0">
            <div class="col-md-4 step-item">
                <img src="{{ asset('images/step-01.png') }}" />
            </div>
            <div class="col-md-4 step-item">
                <img src="{{ asset('images/step-02.png') }}" />
            </div>
            <div class="col-md-4 step-item">
                <img src="{{ asset('images/step-03.png') }}" />
            </div>
        </div>
    </div>
</section>
@endsection