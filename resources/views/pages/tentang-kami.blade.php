@extends('layouts.app')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container d-flex justify-content-between">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item active">Testimonial</li>
        </ol>

        <div class="back m-0">
            <a href="#" class="text-secondary" style="text-decoration:none">
                <img src="{{ asset('images/icons/arrow-circle-left-solid.png') }}" />
                Kembali
            </a>
        </div>
    </div>
</nav>
@endsection

@section('content')
<section class="title">
    <div class="container">
        <div class="icons-group text-secondary d-flex align-items-center">
            <img src="{{ asset('images/icons/orange/comments-solid.png') }}" class="me-3" />
            <h2>Testimonial</h2>
        </div>
    </div>
</section>

<section id="tentang-kami">
    <div class="container mt-3 mb-3">
        <div class="">
            <h5><span>Latar Belakang</span></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus magni inventore illo dolores iusto repudiandae! Nemo unde soluta incidunt possimus, reprehenderit praesentium consequuntur debitis, ipsam iusto facilis neque quasi dignissimos!</p>
        </div>
    </div>
</section>
@endsection