@extends('admin.layouts.app')

@section('title', 'Hak Cipta')

@section('page-title')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Hak Cipta</h1>

    <div class="button-action">
        <button type="button" class="btn-bulk-destroy btn btn-danger shadow-sm" disabled>
            <i class="fa fa-trash-alt"></i> Hapus Masal
        </button>

        <a href="{{ route('admin.hak-cipta.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Baru
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card card-body shadow-sm">
    <table class="table datatable" width="100%"></table>
</div>

<form id="bulk-destroy" action="{{ route('admin.hak-cipta.bulk-destroy') }}" method="post" class="d-none">
    @csrf
    @method('delete')
    <input type="text" name="copyrights">
</form>
@endsection

@push('styles')
<link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{ asset('admin/vendor/datatables/select.dataTables.min.css')}}" rel="stylesheet">
<link href="{{ asset('admin/vendor/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('admin/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var selected = [];
        $('.datatable').DataTable({
            width: '100%',
            processing: true,
            select: {
                style: 'multi',
                selector: 'td:first-child'
            },
            ajax: {
                url: '/app/v1/bkk-admin/hak-cipta?type=json',
                dataSrc: (data) => {
                    return data;
                }
            },
            order: [
                [1, 'asc']
            ],
            columns: [{
                defaultContent: '',
                title: '',
                orderable: false,
                className: 'select-checkbox pr-1 pl-2',
                width: '10px'
            }, {
                data: 'situs_dikelola',
                title: 'Pengelola Situs',
                orderable: true,
            }, {
                data: 'hak_cipta',
                title: 'Hak Cipta',
                orderable: true,
            }],
            rowCallback: (row, data, index) => {
                $('td:first-child', row).on('click', function() {
                    if (!$(row).hasClass('selected')) {
                        $(row).addClass('selected');
                        selected.push(data);
                    } else {
                        $(row).removeClass('selected');
                        selected.splice(selected.indexOf(data.id), 1);
                    }

                    if (selected.length > 0) {
                        $('.btn-bulk-destroy').removeAttr('disabled');
                    } else {
                        $('.btn-bulk-destroy').attr('disabled', 'disabled');
                    }
                });

                $('td', row).on('dblclick', () => {
                    window.location.href = "/app/v1/bkk-admin/hak-cipta/" + data.encryptid + "/edit";
                });
            }
        });

        $('.btn-bulk-destroy').on('click', () => {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-danger',
                confirmButtonColor: '#d52a1a',
                cancelButtonClass: 'btn btn-secondary',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal',
            }).then((result) => {
                $('#bulk-destroy input[name="copyrights"]').val(JSON.stringify(selected));
                $('#bulk-destroy').submit();
            });
        });
    });
</script>

@if(Session::has('destroy-success'))
<script type="text/javascript">
    $(document).ready(function() {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Proses hapus data hak cipta berhasil.',
            showConfirmButton: false,
            buttonsStyling: false,
            timer: 1500,
            timerProgressBar: true,
        });
    });
</script>
@endif

@if(Session::has('bulk-destroy-success'))
<script type="text/javascript">
    $(document).ready(function() {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Proses hapus data masal berhasil.',
            showConfirmButton: false,
            buttonsStyling: false,
            timer: 1500,
            timerProgressBar: true,
        });
    });
</script>
@endif
@endpush