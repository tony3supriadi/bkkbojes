@extends('layouts.app')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('daftar') }}">Daftar</a></li>
            <li class="breadcrumb-item active">Berhasil</li>
        </ol>
    </div>
</nav>
@endsection

@section('content')
<section id="register-success-page">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Selamat!<br />akunmu berhasil dibuat.</h3>
                <p>Silahkan lengkapi profil dan CV kamu,<br />agar dapat mengajukan lamaran</p>

                <a href="" class="btn btn-primary">Lengkapi Profil</a>
            </div>
        </div>
    </div>
</section>
@endsection