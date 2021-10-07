@extends("admin.layouts.app")

@section('title', 'Tambah Baru - Tentang Kami')

@section('page-title')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <a href="{{ route('admin.tentang-kami.index') }}" class="btn btn-outline-secondary btn-circle mr-2">
            <i class="fa fa-arrow-left"></i>
        </a>
        Tentang Kami | Tambah Baru
    </h1>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <form action="{{ route('admin.tentang-kami.store') }}" method="post" class="card shadow-sm">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="urutan" class="col-12">Urutan</label>
                    <div class="col-4 col-md-2">
                        <input type="number" name="urutan" id="urutan" value="{{ old('urutan') }}" class="form-control @error('urutan') is-invalid @enderror" autocomplete="off" />

                        @error('urutan')
                        <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="tentang_kami">Judul</label>
                    <input type="text" name="tentang_kami" id="tentang_kami" value="{{ old('tentang_kami') }}" class="form-control @error('tentang_kami') is-invalid @enderror" autocomplete="off" />

                    @error('tentang_kami')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi_tentang_kami">Konten</label>
                    <textarea name="deskripsi_tentang_kami" id="deskripsi_tentang_kami" class="form-control tinymce">{{ old('deskripsi_tentang_kami') }}</textarea>

                    @error('deskripsi_tentang_kami')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
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

@push('scripts')
<script src="{{ asset('vendors/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '.tinymce',
        height: '200px',
        menubar: false,
        plugins: 'lists',
        statusbar: false,
        toolbar: 'bold italic underline | numlist bullist',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:1rem; color: #6e707e }'
    });
</script>
@endpush