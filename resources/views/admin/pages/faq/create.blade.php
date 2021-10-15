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
    <div class="col-md-12">
        <form action="{{ route('admin.faq.store') }}" method="post" class="card shadow-sm">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="order" class="col-12">Urutan</label>
                    <div class="col-12">
                        <input type="number" name="order" id="order" value="{{ old('order') }}" class="form-control @error('order') is-invalid @enderror" autocomplete="off" />

                        @error('order')
                        <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="title">FAQ</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" autocomplete="off" />

                    @error('title')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content">Deskripsi</label>
                    <textarea name="content" id="content" class="form-control tinymce">{{ old('content') }}</textarea>

                    @error('content')
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