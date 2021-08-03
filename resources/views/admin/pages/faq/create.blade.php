@extends("admin.layouts.app")

@section('title', 'Tambah Baru - FAQ')

@section('page-title')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <a href="{{ route('admin.faq.index') }}" class="btn btn-outline-secondary btn-circle mr-2">
            <i class="fa fa-arrow-left"></i>
        </a>
        FAQ | Tambah Baru
    </h1>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('admin.faq.store') }}" method="post" class="card shadow-sm">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_faq">FAQ</label>
                    <input type="text" name="nama_faq" id="nama_faq" value="{{ old('nama_faq') }}" class="form-control @error('nama_faq') is-invalid @enderror" autocomplete="off" />

                    @error('nama_faq')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi_faq">Deskripsi</label>
                    <textarea name="deskripsi_faq" id="deskripsi_faq" class="form-control tinymce">{{ old('deskripsi_faq') }}</textarea>

                    @error('deskripsi_faq')
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
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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