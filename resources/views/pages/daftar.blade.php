@extends('layouts.app')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item active">Daftar</li>
        </ol>
    </div>
</nav>
@endsection

@section('content')
<section id="register-page">
    <div class="container">
        <div class="row">
            <div class="col-md-5 d-none d-md-inline-block">
                <div class="register-info">
                    <div class="images text-center mb-3">
                        <img src="{{ asset('images/hero-04.png') }}" alt="register-image" />
                    </div>
                    <h3 class="text-primary">Daftar Gratis</h3>
                    <p>Buat akun untuk mendapatkan fitur-fitur dari Bursa Kerja Khusus SMK N 1 Bojongsari :</p>
                    <ul>
                        <li>Pencarian lowongan dan ajukan lamaran</li>
                        <li>Simpan dan berbagi info lowongan kerja</li>
                        <li>Buat dan unduh Curriculum Vitae otomatis</li>
                        <li>Pantau progress lamaran dan terima update</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card card-body register-box">
                    <h3>Buat Akun</h3>
                    <p>Silahkan isi formulir berikut :</p>

                    <form action="" method="post">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="firstname">Nama Depan</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" autocomplete="off" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="lastname">Nama Belakang</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">E-Mail</label>
                            <input type="text" name="email" id="email" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone">No HP / WA</label>
                            <input type="number" name="phone" id="phone" class="form-control" autocomplete="off">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" autocomplete="off" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="jenis_akun">Jenis Akun</label>
                                    <select name="jenis_akun" data-placeholder="" class="form-control select2-nosearch">
                                        <option></option>
                                        <option>Alumni</option>
                                        <option>Siswa</option>
                                        <option>Umum</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Buat Kata Sandi</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-eye-slash"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Konfirmasi Kata Sandi</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-eye-slash"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="agree">
                                <label class="form-check-label" for="agree">
                                    Dengan mendaftar, saya menyetujui <a href="">Ketentuan Penggunaan</a> & <a href="">Kebijakan Privasi</a>.
                                </label>
                            </div>
                        </div>

                        <div class="form-group d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary">
                                Buat akun saya
                            </button>
                        </div>

                        <p class="text-login text-center">Sudah punya akun? <a href="{{ route('login') }}">Login disini</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('js/inits/select2.js') }}"></script>
<script src="{{ asset('/js/pages/login.js') }}"></script>
@endpush