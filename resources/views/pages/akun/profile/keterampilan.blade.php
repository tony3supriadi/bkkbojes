@extends('pages.akun.akun')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('akun.profile.personal') }}">Akun</a></li>
            <li class="breadcrumb-item d-none d-md-inline-block"><a href="{{ route('akun.profile.personal') }}">Profil Saya</a></li>
            <li class="breadcrumb-item active">Keterampilan</li>
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
                <i class="la la-cog"></i>
                <span>Keterampilan / Skill</span>
            </h4>

            <a href="">
                <i class="la la-edit me-2"></i>Ubah
            </a>
        </div>

        @if (!count($keterampilan))
        <div class="py-3">
            <div class="row">
                <div class="col-md-2">
                    <p class="text-muted m-0">Mahir</p>
                </div>
                <div class="col-md-10">
                    <ul>
                        <li>Laravel</li>
                        <li>Codeigniter</li>
                        <li>ReactJs</li>
                        <li>Angular</li>
                        <li>HTML+CSS</li>
                    </ul>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-2">
                    <p class="text-muted m-0">Sedang</p>
                </div>
                <div class="col-md-10">
                    <ul>
                        <li>React Native</li>
                        <li>Flutter</li>
                    </ul>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-2">
                    <p class="text-muted m-0">Pemula</p>
                </div>
                <div class="col-md-10">
                    <ul>
                        <li>Technical Support</li>
                    </ul>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-12">
                <div class="empty-data">
                    <div class="text-center">
                        <i class="la la-briefcase fa-5x"></i>
                        <h5 class="m-0">KEMAMPUAN / SKILL BELUM ADA</h5>
                        <p class="m-0">Silahkan tambahkan untuk kamampuanmu yah!!</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection