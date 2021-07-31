@extends('admin.layouts.app')

@section('title', 'Manage Admin')

@section('page-title')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manage Admin</h1>

    <div class="button-action">
        <button type="button" class="btn btn-danger shadow-sm" disabled>
            <i class="fa fa-trash-alt"></i> Hapus Masal
        </button>

        <a href="#" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Baru
        </a>
    </div>
</div>
@endsection