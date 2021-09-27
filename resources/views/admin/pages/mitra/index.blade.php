@extends('admin.layouts.app')

@section('title', 'Mitra')

@section('page-title')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Mitra</h1>

        <div class="button-action">
            <button type="button" class="btn-bulk-destroy btn btn-danger shadow-sm" disabled>
                <i class="fa fa-trash-alt"></i> Hapus Masal
            </button>

            <a href="{{ route('admin.mitra.create') }}" class="btn btn-primary shadow-sm">
                <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Baru
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div class="card card-body shadow-sm">
        <table class="table datatable" width="100%"></table>
    </div>

    <form id="bulk-destroy" action="{{ route('admin.mitra.bulk-destroy') }}" method="post" class="d-none">
        @csrf
        @method('delete')
        <input type="text" name="links">
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
                url: '/app/v1/bkk-admin/mitra?type=json',
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
                data: 'nama_mitra',
                title: 'Nama Mitra',
                orderable: true,
            }, {
                data: 'bidang_usaha',
                title: 'Bidang Usaha',
                orderable: false,
            }, {
                data: 'lokasi_kabupaten',
                title: 'Lokasi',
                orderable: false,
            }, {
                data: 'jenis_badan_usaha',
                title: 'Badan Usaha',
                orderable: false,
            }, {
                data: 'bentuk_usaha',
                title: 'Bentuk Usaha',
                orderable: false,
            }, {
                data: 'telepon',
                title: 'Telepon',
                orderable: false,
            }, {
                data: 'email',
                title: 'Email',
                orderable: false,
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
                    window.location.href = "/app/v1/bkk-admin/mitra/" + data.encryptid + "/edit";
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
                $('#bulk-destroy input[name="mitras"]').val(JSON.stringify(selected));
                $('#bulk-destroy').submit();
            });
        });
    });
</script>

@include('admin.pages._message.destroy-success')
@include('admin.pages._message.bulk-destroy-success')
@include('admin.pages._message.store-success')
@endpush
