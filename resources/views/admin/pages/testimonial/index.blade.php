@extends('admin.layouts.app')

@section('title', 'Testimonial')

@section('page-title')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Testimonial</h1>

    <div class="button-action">
        <button type="button" class="btn-bulk-destroy btn btn-danger shadow-sm" disabled>
            <i class="fa fa-trash-alt"></i> Hapus Masal
        </button>

        <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Baru
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card card-body shadow-sm">
    <table class="table datatable" width="100%"></table>
</div>
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
    $(document).ready(function(){
        $('.datatable').DataTable({
            width: '100%',
            processing: true,
            select: {
                style: 'multi',
                selector: 'td:first-child'
            },
            ajax: {
                url: '/app/v1/bkk-admin/testimonial?type=json',
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
                data: 'nama',
                title: 'Nama',
                orderable: true,
            }, {
                data: 'jenis_akun',
                title: 'Jenis Akun',
                orderable: true,
            }, {
                data: 'status',
                title: 'Status',
                orderable: true,
            }],
        });
    });
</script>
@endpush