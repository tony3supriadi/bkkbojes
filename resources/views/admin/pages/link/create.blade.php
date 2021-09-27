@extends("admin.layouts.app")

@section('title', 'Tambah Baru - Link')

@section('page-title')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <a href="{{ route('admin.link.index') }}" class="btn btn-outline-secondary btn-circle mr-2">
            <i class="fa fa-arrow-left"></i>
        </a>
        Link | Tambah Baru
    </h1>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('admin.link.store') }}" method="post" class="card shadow-sm" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" autocomplete="off" />

                    @error('nama')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="logo">Logo</label>
                    <div class="row align-items-center justify-content-center">
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    </div>
                    <input type="file" name="logo" id="logo" class="form-control @error('logo') is-invalid @enderror"
                        autocomplete="off" style="height: 45px" onchange="previewImage()"/>

                    @error('logo')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link" value="{{ old('link') }}" class="form-control @error('link') is-invalid @enderror" autocomplete="off" />

                    @error('link')
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

<script>
    function previewImage(){
        const image = document.querySelector('#logo');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endpush
