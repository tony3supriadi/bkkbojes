@extends('layouts.app')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item active">FAQ</li>
        </ol>
    </div>
</nav>
@endsection

@section('content')
<section class="faq">
    <div class="container pt-4 pb-5">
        <div class="row">
            <div class="col-md-9">
                <!-- Cari Lowongan -->
                {{-- @include('pages.lowongan.partials.cari-lowongan') --}}
            </div>
            <div class="col-md-3">
                <!-- Lowongan Kerja -->
                @include('pages.faq.partials.lowongan-box')

                <!-- Pengumuman -->
                @include('pages.lowongan.partials.pengumuman-box')

                <!-- Mitra Kami -->
                @include('pages.lowongan.partials.mitra-box')

            </div>
        </div>
    </div>
</section>
@endsection
