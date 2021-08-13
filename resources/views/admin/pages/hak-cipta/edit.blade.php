@extends("admin.layouts.app")

@section('title', 'Ubah Data - Hak Cipta')

@section('page-title')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <a href="{{ route('admin.hak-cipta.index') }}" class="btn btn-outline-secondary btn-circle mr-2">
            <i class="fa fa-arrow-left"></i>
        </a>
        Hak Cipta | Ubah Data
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

        <a href="{{ route('admin.hak-cipta.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Baru
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('admin.hak-cipta.update', encrypt($data->id)) }}" method="post" class="card shadow-sm">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="situs_dikelola">Situs dikelola oleh :</label>
                    <input type="text" name="situs_dikelola" id="situs_dikelola" value="{{ old('situs_dikelola') ? old('situs_dikelola') : $data->situs_dikelola }}" class="form-control @error('situs_dikelola') is-invalid @enderror" autocomplete="off" readonly />

                    @error('situs_dikelola')
                    <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="hak_cipta">Hak Cipta</label>
                    <input type="text" name="hak_cipta" id="hak_cipta" value="{{ old('hak_cipta') ? old('hak_cipta') : $data->hak_cipta }}" class="form-control @error('hak_cipta') is-invalid @enderror" autocomplete="off" readonly />

                    @error('hak_cipta')
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

<form id="destroy-action" action="{{ route('admin.hak-cipta.destroy', encrypt($data->id)) }}" method="post" class="d-none">
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
        });

        $('.btn-cancel').on('click', () => {
            $('.btn-edit').removeClass('d-none');
            $('.btn-cancel').addClass('d-none');
            $('.btn-save').attr('disabled', 'disabled');
            $('.btn-reset').attr('disabled', 'disabled');

            $('input').attr('readonly', 'readonly');
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
            text: 'Proses tambah baru hak cipta berhasil',
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
            text: 'Proses ubah data hak cipta berhasil.',
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