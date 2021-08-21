@extends('pages.akun.akun')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('akun.profile.personal') }}">Akun</a></li>
            <li class="breadcrumb-item d-none d-md-inline-block"><a href="{{ route('akun.profile.personal') }}">Profil Saya</a></li>
            <li class="breadcrumb-item active">Pendidikan</li>
        </ol>
    </div>
</nav>
@endsection

@section('account-content')
<div class="card card-body p-0">
    @include('pages.akun.profile.navigation')

    <div class="account-content">
        <div class="page-title d-flex justify-content-between">
            <h4 class="d-inline-block">
                <i class="la la-graduation-cap"></i>
                <span>Riwayat Pendidikan</span>
            </h4>

            <a href="">
                <i class="la la-plus-circle me-2"></i>Tambah
            </a>
        </div>

        @if (count($pendidikan))
        <div class="py-4">
            @foreach($pendidikan as $key => $val)
            <div class="row mb-5">
                <div class="col-md-4">
                    <p class="text-secondary m-0"><strong>April 2012 - April 2016</strong></p>
                </div>
                <div class="col-md-8">
                    <h5 class="text-secondary mb-3"><strong>SMK Negeri 1 Bojongsari</strong></h5>

                    <div class="mb-4">
                        <p class="text-muted m-0"><i class="la la-map-marker me-2"></i> Purbalingga, Jawa Tengah, Indonesia</p>
                        <p class="text-muted m-0"><i class="la la-graduation-cap me-2"></i> SMA/SMK</p>
                    </div>

                    <div class="row py-1">
                        <div class="col-md-4 text-muted mb-1"><strong>Jurusan</strong></div>
                        <div class="col-md-8 text-muted">Multimedia</div>
                    </div>

                    <div class="row py-1">
                        <div class="col-md-4 text-muted mb-1"><strong>IPK/NEM</strong></div>
                        <div class="col-md-8 text-muted">7.5</div>
                    </div>
                </div>
                <div class="col-md-12 text-end">
                    <hr />
                    <a href="#" class="btn btn-outline-secondary btn-sm"><i class="la la-edit mr-1"></i>Ubah</a>
                    <a href="#" class="btn btn-outline-danger btn-sm"><i class="la la-trash mr-1"></i>Hapus</a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="row">
            <div class="col-12">
                <div class="empty-data">
                    <div class="text-center">
                        <i class="la la-briefcase fa-5x"></i>
                        <h5 class="m-0">RIWAYAT PENDIDIKAN BELUM ADA</h5>
                        <p class="m-0">Silahkan tambahkan untuk riwayat pendidikanmu yah!!</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection