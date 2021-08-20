@extends('pages.akun.akun')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('akun.profile.personal') }}">Akun</a></li>
            <li class="breadcrumb-item d-none d-md-inline-block"><a href="{{ route('akun.profile.personal') }}">Profil Saya</a></li>
            <li class="breadcrumb-item active">Organisasi</li>
        </ol>
    </div>
</nav>
@endsection

@section('account-content')
<div class="card card-body p-0">
    @include('pages.akun.profile.navigation')

    <div class="account-content">
        <div class="account-content">
            <div class="page-title d-flex justify-content-between">
                <h4 class="d-inline-block">
                    <i class="la la-cog"></i>
                    <span>Pengalaman Organisasi</span>
                </h4>

                <a href="">
                    <i class="la la-plus-circle me-2"></i>Tambah
                </a>
            </div>

            @if (!count($organisasi))
            <div class="py-3">
                <div class="row">
                    <div class="col-md-2">
                        <p class="text-muted m-0">2015 - 2018</p>
                    </div>
                    <div class="col-md-7">
                        <p class="mb-0">Ketua SIE Publikasi</p>
                        <p class="mb-0 text-muted">Karang Taruna Desa Bojongsari</p>
                    </div>
                    <div class="col-md-3 text-end">
                        <a href="#" class="btn btn-outline-secondary btn-sm"><i class="la la-edit mr-1"></i>Ubah</a>
                        <a href="#" class="btn btn-outline-danger btn-sm"><i class="la la-trash mr-1"></i>Hapus</a>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-2">
                        <p class="text-muted m-0">2014 - 2016</p>
                    </div>
                    <div class="col-md-7">
                        <p class="mb-0">Sekretaris</p>
                        <p class="mb-0 text-muted">OSIS SMK Negeri 1 Bojongsari</p>
                    </div>
                    <div class="col-md-3 text-end">
                        <a href="#" class="btn btn-outline-secondary btn-sm"><i class="la la-edit mr-1"></i>Ubah</a>
                        <a href="#" class="btn btn-outline-danger btn-sm"><i class="la la-trash mr-1"></i>Hapus</a>
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-12">
                    <div class="empty-data">
                        <div class="text-center">
                            <i class="la la-briefcase fa-5x"></i>
                            <h5 class="m-0">PENGALAMAN ORGANISASI BELUM ADA</h5>
                            <p class="m-0">Silahkan tambahkan untuk pengalaman organisasimu yah!!</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection