@extends('layouts.app')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item active">Lowongan</li>
        </ol>
    </div>
</nav>
@endsection

@section('content')
<section class="daftar-lowongan">
    <div class="container pt-4 pb-5">
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <!-- Pengumuman -->
                @include('pages.partials.pengumuman-box')

                <!-- Testimonial -->
                @include('pages.partials.testimonial-box')
            </div>
        </div>
    </div>
</section>
@endsection