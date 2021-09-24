@extends('layouts.app')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container d-flex justify-content-between">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item active">Pengumuman</li>
        </ol>

        <div class="back m-0">
            <a href="#" class="text-secondary" style="text-decoration:none">
                <img src="{{ asset('images/icons/arrow-circle-left-solid.png') }}"/>
                Kembali
            </a>
        </div>
    </div>
</nav>
@endsection

@section('content')
<section class="title">
    <div class="container text-secondary d-flex align-items-center">
        <img src="{{ asset('images/icons/orange/bullhorn-solid.png') }}" class="me-3"/>
        <h2>Pengumuman</h2>
    </div>
</section>
<section class="pengumuman">
    <div class="container pt-4 pb-5">
        <div class="row">
            <div class="col-md-3">
                <!-- Box Pengumuman -->
                @include('pages.pengumuman.partials.pengumuman-box')
            </div>
            <div class="col-md-9">
                <!-- Content Pengumuman -->
                @include('pages.pengumuman.partials.pengumuman-content')
            </div>

        </div>
    </div>
</section>
@endsection
