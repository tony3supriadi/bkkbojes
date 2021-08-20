@extends('pages.akun.akun')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('akun.profile.personal') }}">Akun</a></li>
            <li class="breadcrumb-item d-none d-md-inline-block"><a href="{{ route('akun.profile.personal') }}">Profil Saya</a></li>
            <li class="breadcrumb-item active">Pengalaman</li>
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
                <i class="la la-briefcase"></i>
                <span>Pengalaman Kerja</span>
            </h4>

            <a href="">
                <i class="la la-plus-circle me-2"></i>Tambah
            </a>
        </div>

        @if (!count($pengalaman))
        <div class="py-4">
            <div class="row mb-5">
                <div class="col-md-4">
                    <p class="text-secondary m-0"><strong>Sep 2019 - Sekarang</strong></p>
                    <p class="text-muted m-0">1 Tahun 11 Bulan</p>
                </div>
                <div class="col-md-8">
                    <h5 class="text-secondary mb-3"><strong>Programmer</strong></h5>

                    <div class="mb-4">
                        <p class="text-muted m-0"><i class="la la-building me-2"></i> DINKOMINFO</p>
                        <p class="text-muted m-0"><i class="la la-map-marker me-2"></i> Purbalingga, Jawa Tengah, Indonesia</p>
                        <p class="text-muted m-0"><i class="la la-industry me-2"></i> Teknologi Informasi</p>
                    </div>

                    <div class="row py-1">
                        <div class="col-md-4 text-secondary mb-1"><strong>Jabatan</strong></div>
                        <div class="col-md-8">Pegawai (Non-manajemen & Non-supervisor)</div>
                    </div>

                    <div class="row py-1">
                        <div class="col-md-4 text-secondary mb-1"><strong>Bidang Pekerjaan</strong></div>
                        <div class="col-md-8">Programmer Perangkat Lunak</div>
                    </div>

                    <div class="row py-1 mb-md-4">
                        <div class="col-md-4 text-secondary"><strong>Gaji Bulanan</strong></div>
                        <div class="col-md-8">Rp2.500.000,-</div>
                    </div>

                    <div class="row py-1 mb-md-2">
                        <div class="col-12 text-secondary mb-1"><strong>Deskripsi Pekerjaan :</strong></div>
                        <div class="col-12">
                            <ul>
                                <li>Melakukan analisis, development, deployment aplikasi yang dibutuhkan</li>
                                <li>Melakukan pemeliharaan dan penyempurnaan aplikasi yang sudah ada</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row py-1">
                        <div class="col-12 text-secondary mb-1"><strong>Tools yang Digunakan :</strong></div>
                        <div class="col-12">
                            <ul>
                                <li>Visual Studio</li>
                                <li>Codeigniter dan Laravel (PHP Framework)</li>
                                <li>Bootstrap dan Material Design (CSS Framework)</li>
                                <li>Spring (Java Framework)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-end">
                    <hr />
                    <a href="#" class="btn btn-outline-secondary btn-sm"><i class="la la-edit mr-1"></i>Ubah</a>
                    <a href="#" class="btn btn-outline-danger btn-sm"><i class="la la-trash mr-1"></i>Hapus</a>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-4">
                    <p class="text-secondary m-0"><strong>Sep 2019 - Sekarang</strong></p>
                    <p class="text-muted m-0">1 Tahun 11 Bulan</p>
                </div>
                <div class="col-md-8">
                    <h5 class="text-secondary mb-3"><strong>Programmer</strong></h5>

                    <div class="mb-4">
                        <p class="text-muted m-0"><i class="la la-building me-2"></i> DINKOMINFO</p>
                        <p class="text-muted m-0"><i class="la la-map-marker me-2"></i> Purbalingga, Jawa Tengah, Indonesia</p>
                        <p class="text-muted m-0"><i class="la la-industry me-2"></i> Teknologi Informasi</p>
                    </div>

                    <div class="row py-1">
                        <div class="col-md-4 text-secondary mb-1"><strong>Jabatan</strong></div>
                        <div class="col-md-8">Pegawai (Non-manajemen & Non-supervisor)</div>
                    </div>

                    <div class="row py-1">
                        <div class="col-md-4 text-secondary mb-1"><strong>Bidang Pekerjaan</strong></div>
                        <div class="col-md-8">Programmer Perangkat Lunak</div>
                    </div>

                    <div class="row py-1 mb-md-4">
                        <div class="col-md-4 text-secondary"><strong>Gaji Bulanan</strong></div>
                        <div class="col-md-8">Rp2.500.000,-</div>
                    </div>

                    <div class="row py-1 mb-md-2">
                        <div class="col-12 text-secondary mb-1"><strong>Deskripsi Pekerjaan :</strong></div>
                        <div class="col-12">
                            <ul>
                                <li>Melakukan analisis, development, deployment aplikasi yang dibutuhkan</li>
                                <li>Melakukan pemeliharaan dan penyempurnaan aplikasi yang sudah ada</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row py-1">
                        <div class="col-12 text-secondary mb-1"><strong>Tools yang Digunakan :</strong></div>
                        <div class="col-12">
                            <ul>
                                <li>Visual Studio</li>
                                <li>Codeigniter dan Laravel (PHP Framework)</li>
                                <li>Bootstrap dan Material Design (CSS Framework)</li>
                                <li>Spring (Java Framework)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-end">
                    <hr />
                    <a href="#" class="btn btn-outline-secondary btn-sm"><i class="la la-edit mr-1"></i>Ubah</a>
                    <a href="#" class="btn btn-outline-danger btn-sm"><i class="la la-trash mr-1"></i>Hapus</a>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        @else
        <div class="row">
            <div class="col-12">
                <div class="empty-data">
                    <div class="text-center">
                        <i class="la la-briefcase fa-5x"></i>
                        <h5 class="m-0">PENGALAMAN KERJA BELUM ADA</h5>
                        <p class="m-0">Silahkan tambahkan untuk pengalaman kerjamu yah!!</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection