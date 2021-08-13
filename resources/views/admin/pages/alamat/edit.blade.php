@extends("admin.layouts.app")

@section('title', 'Ubah Data - Alamat')

@section('page-title')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <a href="{{ route('admin.alamat.index') }}" class="btn btn-outline-secondary btn-circle mr-2">
            <i class="fa fa-arrow-left"></i>
        </a>
        Alamat | Ubah Data
    </h1>

    <div class="button-action">
        <button type="button" class="btn-edit btn btn-secondary shadow-sm">
            <i class="fa fa-edit"></i> Ubah
        </button>

        <button type="button" class="btn-cancel btn btn-secondary shadow-sm d-none">
            Batal
        </button>

        <button type="button" class="btn-destroy btn btn-danger shadow-sm">
            <i class="fa fa-trash-alt"></i> Hapus
        </button>

        <a href="{{ route('admin.faq.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Baru
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('admin.faq.update', encrypt($data->id)) }}" method="post" class="card shadow-sm">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') ? old('nama') : $data->nama }}" class="form-control @error('nama') is-invalid @enderror" autocomplete="off" readonly />

                    @error('nama')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Deskripsi</label>
                    <textarea id="alamat-disabled" disabled class="form-control">{{$data->alamat}}</textarea>
                    <div id="alamat-input" class="d-none">
                        <textarea name="alamat" id="alamat" class="form-control tinymce">{{ old('alamat') ? old('alamat') : $data->alamat }}</textarea>
                    </div>

                    @error('alamat')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="logo">Nama</label>
                    <input type="text" name="logo" id="logo" value="{{ old('logo') ? old('logo') : $data->logo }}" class="form-control @error('logo') is-invalid @enderror" autocomplete="off" readonly />

                    @error('logo')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="reset" class="btn-reset btn btn-secondary" disabled>
                    <i class="fa fa-undo mr-2"></i>Reset
                </button>
                <button type="submit" class="btn-save btn btn-primary" disabled>
                    <i class="fa fa-save mr-2"></i>Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<form id="destroy-action" action="{{ route('admin.alamat.destroy', encrypt($data->id)) }}" method="post" class="d-none">
    @csrf
    @method('delete')
</form>
@endsection

@push('styles')
<link href="{{ asset('admin/vendor/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{ asset('admin/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('.btn-edit').on('click', () => {
            $('.btn-edit').addClass('d-none');
            $('.btn-cancel').removeClass('d-none');
            $('.btn-save').removeAttr('disabled');
            $('.btn-reset').removeAttr('disabled');

            $('input').removeAttr('readonly');
            $('#alamat-disabled').addClass('d-none');
            $('#alamat-input').removeClass('d-none');
        });

        $('.btn-cancel').on('click', () => {
            $('.btn-edit').removeClass('d-none');
            $('.btn-cancel').addClass('d-none');
            $('.btn-save').attr('disabled', 'disabled');
            $('.btn-reset').attr('disabled', 'disabled');

            $('input').attr('readonly', 'readonly');
            $('#alamat-disabled').removeClass('d-none');
            $('#alamat-input').addClass('d-none');
        });

        $('.btn-destroy').on('click', () => {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-danger',
                cancelButtonClass: 'btn btn-secondary',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',

            }).then((result) => {
                if (result.isConfirmed) {
                    $('#destroy-action').submit();
                }
            })
        });
    });
</script>

@if(Session::has('store-success'))
<script type="text/javascript">
    $(document).ready(function() {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!!',
            text: 'Proses tambah baru alamat berhasil',
            confirmButtonClass: 'btn btn-primary',
            showConfirmButton: false,
            buttonsStyling: false,
            timer: 1500,
            timerProgressBar: true,
        });
    });
</script>
@endif

@if(Session::has('update-success'))
<script type="text/javascript">
    $(document).ready(function() {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!!',
            text: 'Proses ubah data alamat berhasil.',
            confirmButtonClass: 'btn btn-primary',
            showConfirmButton: false,
            buttonsStyling: false,
            timer: 1500,
            timerProgressBar: true,
        });
    });
</script>
@endif
@endpush