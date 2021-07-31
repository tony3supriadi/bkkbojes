@extends('admin.layouts.blank')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center py-5">
            <i class="fa fa-times-circle fa-5x text-white mb-3"></i>
            <h1 class="text-white">AKSES DITOLAK</h1>
            <p class="text-white">Anda tidak diperbolehkan mengakses halaman ini.</p>
            <a href="{{ route('home') }}" class="btn btn-primary">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection