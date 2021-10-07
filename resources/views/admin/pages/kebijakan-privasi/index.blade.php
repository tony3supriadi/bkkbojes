@extends('admin.layouts.app')

@section('title', 'Kebijakan Privasi')

@section('page-title')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kebijakan Privasi</h1>

    <div class="button-action">
        <button type="button" class="btn-bulk-destroy btn btn-danger shadow-sm" disabled>
            <i class="fa fa-trash-alt"></i> Hapus Masal
        </button>

        <a href="{{ route('admin.kebijakan-privasi.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Baru
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card card-body shadow-sm">
    <table class="table datatable" width="100%"></table>
</div>

<form id="bulk-destroy" action="{{ route('admin.kebijakan-privasi.bulk-destroy') }}" method="post" class="d-none">
    @csrf
    @method('delete')
    <input type="text" name="ids">
</form>

<form id="destroy-action" method="post" class="d-none">
    @csrf
    @method('delete');
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
<script type=text/javascript>
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
                url: '/app/v1/bkk-admin/kebijakan-privasi?type=json',
                dataSrc: (data) => {
                    return data;
                }
            },
            ordering: false,
            columns: [{
                defaultContent: '',
                title: '',
                className: 'select-checkbox pr-1 pl-2',
                width: '10px'
            }, {
                data: 'nama_kebijakan',
                title: 'Kebijakan Privasi',
                render: (data, type, row, meta) => {
                    return (row.urutan ? row.urutan : '00') + '. ' + row.nama_kebijakan;
                }
            }, {
                defaultContent: '',
                title: '',
                width: '15%',
                className: 'text-right',
                render: (data, type, row, meta) => {
                    return `
                        <a href="/app/v1/bkk-admin/kebijakan-privasi/${row.encryptid}/edit" class="mx-1 text-primary text-decoration-none">
                            <i class="fa fa-edit"></i>
                        </a>

                        <a href="#" onclick="deleted('/app/v1/bkk-admin/kebijakan-privasi/${row.encryptid}')" class="mx-1 text-danger text-decoration-none">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    `;
                }
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
                if (result.isConfirmed) {
                    $('#bulk-destroy input[name="ids"]').val(JSON.stringify(selected));
                    $('#bulk-destroy').submit();
                }
            });
        });
    });

    function deleted(url) {
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
                $('#destroy-action').attr('action', url);
                $('#destroy-action').submit();
            }
        })
    }
</script>

@if(Session::has('destroy-success'))
<script type="text/javascript">
    $(document).ready(function() {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Proses hapus data kebijakan privasi berhasil.',
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