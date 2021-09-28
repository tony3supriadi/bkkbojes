@extends("admin.layouts.app")

@section('title', 'Tambah Baru - Lowongan')

@section('page-title')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <a href="{{ route('admin.lowongan.index') }}" class="btn btn-outline-secondary btn-circle mr-2">
            <i class="fa fa-arrow-left"></i>
        </a>
        Lowongan | Tambah Baru
    </h1>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('admin.lowongan.store') }}" method="post" class="card shadow-sm">
            @csrf
            @include('admin.pages.lowongan._form-control')

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
