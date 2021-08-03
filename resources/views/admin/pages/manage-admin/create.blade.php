@extends('admin.layouts.app')

@section('title', 'Tambah Baru - Manage Admin')

@section('page-title')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <a href="{{ route('admin.manage-admin.index') }}" class="btn btn-outline-secondary btn-circle mr-2">
            <i class="fa fa-arrow-left"></i>
        </a>
        Manage Admin | Tambah Baru
    </h1>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('admin.manage-admin.store') }}" method="post" class="card shadow-sm">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Admin</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" autocomplete="off" />

                    @error('nama')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" autocomplete="off" />

                    @error('username')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" autocomplete="off" />

                    @error('email')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" />

                    @error('password')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Ulang Kata Sandi</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="reset" class="btn btn-secondary">
                    <i class="fa fa-undo mr-2"></i>Reset
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save mr-2"></i>Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush