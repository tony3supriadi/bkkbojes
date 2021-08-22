@extends('pages.akun.akun')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('akun.profile.personal') }}">Akun</a></li>
            <li class="breadcrumb-item d-none d-md-inline-block"><a href="{{ route('akun.profile.personal') }}">Profil Saya</a></li>
            <li class="breadcrumb-item active">Pengalaman</li>
        </ol>
    </div>
</nav>
@endsection

@section('account-content')
<div class="card card-body p-0">
    @include('pages.akun.profile.navigation')

    <div class="account-content">
        <div class="page-title d-flex justify-content-between">
            <h4 class="d-inline-block">
                <i class="la la-briefcase"></i>
                <span>Pengalaman Kerja</span>
            </h4>
        </div>

        <form action="{{ route('akun.profile.pengalaman.update', encrypt($pengalaman->id)) }}" method="post" class="row">
            @csrf
            @method('put')

            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="tanggal_mulai">Mulai</label>
                    <input type="date" name="tanggal_mulai" id="tanggal_mulai" value="{{ old('tanggal_mulai') ? old('tanggal_mulai') : $pengalaman->tanggal_mulai }}" class="form-control @error('tanggal_mulai') is-invalid border-danger @enderror">
                    @error('tanggal_mulai')
                    <div class="invalid-feedback">{{ ucfirst($message) }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_selesai">Selesai</label>
                    <input type="date" name="tanggal_selesai" id="tanggal_selesai" value="{{ old('tanggal_selesai') ? old('tanggal_selesai') : $pengalaman->tanggal_selesai }}" class="form-control @error('tanggal_selesai') is-invalid border-danger @enderror" @if(old('masih_bekerja') || $pengalaman->masih_bekerja) readonly @endif>

                    <div class="form-check">
                        <input class="form-check-input" name="masih_bekerja" type="checkbox" value="1" id="masih_bekerja" @if(old('masih_bekerja') || $pengalaman->masih_bekerja) checked @endif>
                        <label class="form-check-label" for="masih_bekerja">
                            Masih Bekerja
                        </label>
                    </div>

                    @error('tanggal_selesai')
                    <div class="invalid-feedback">{{ ucfirst($message) }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group mb-3">
                    <label for="bekerja_sebagai">Bekerja Sebagai</label>
                    <input type="text" name="bekerja_sebagai" id="bekerja_sebagai" value="{{ old('bekerja_sebagai') ? old('bekerja_sebagai') : $pengalaman->bekerja_sebagai }}" class="form-control @error('bekerja_sebagai') is-invalid border-danger @enderror">
                    @error('bekerja_sebagai')
                    <div class="invalid-feedback">{{ ucfirst($message) }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="nama_perusahaan">
                        <i class="la la-building me-1"></i>
                        Nama Perusahaan
                    </label>
                    <input type="text" name="nama_perusahaan" id="nama_perusahaan" value="{{ old('nama_perusahaan') ? old('nama_perusahaan') : $pengalaman->nama_perusahaan }}" class="form-control @error('nama_perusahaan') is-invalid border-danger @enderror">
                    @error('nama_perusahaan')
                    <div class="invalid-feedback">{{ ucfirst($message) }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="alamat">
                        <i class="la la-map-marker me-1"></i>
                        Lokasi Perusahaan
                    </label>

                    <div class="mb-2">
                        <input type="text" name="alamat" id="alamat" placeholder="Alamat" value="{{ old('alamat') ? old('alamat') : $pengalaman->alamat }}" class="form-control @error('alamat') is-invalid border-danger @enderror">
                    </div>

                    <div class="mb-2">
                        <select name="provinsi" data-placeholder="Pilih provinsi" id="provinsi" class="form-control select2-basic @error('provinsi') is-invalid border-danger @enderror">
                            <option value=""></option>
                            @foreach($provinsi as $prov)
                            <option value="{{ $prov['kode'] }}" <?= $prov['kode'] == $pengalaman->provinsi ? 'selected' : '' ?>>{{ $prov['nama'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <select name="kabupaten" data-placeholder="Pilih kabupaten" id="kabupaten" class="form-control select2-basic @error('kabupaten') is-invalid border-danger @enderror">
                        <option value=""></option>
                        @foreach($kabupaten as $kab)
                        <option value="{{ $kab['kode'] }}" <?= $kab['kode'] == $pengalaman->kabupaten ? 'selected' : '' ?>>{{ $kab['nama'] }}</option>
                        @endforeach
                    </select>

                    @error('nama_perusahaan')
                    <div class="invalid-feedback">{{ ucfirst($message) }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="bidang_usaha">
                        <i class="las la-industry"></i>
                        Industri / Bidang
                    </label>
                    <input type="text" name="bidang_usaha" id="bidang_usaha" value="{{ old('bidang_usaha') ? old('bidang_usaha') : $pengalaman->bidang_usaha }}" class="form-control @error('bidang_usaha') is-invalid border-danger @enderror">
                    @error('bidang_usaha')
                    <div class="invalid-feedback">{{ ucfirst($message) }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan') ? old('jabatan') : $pengalaman->jabatan }}" class="form-control @error('jabatan') is-invalid border-danger @enderror">
                    @error('jabatan')
                    <div class="invalid-feedback">{{ ucfirst($message) }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="bidang_pekerjaan">Bidang Pekerjaan</label>
                    <input type="text" name="bidang_pekerjaan" id="bidang_pekerjaan" value="{{ old('bidang_pekerjaan') ? old('bidang_pekerjaan') : $pengalaman->bidang_pekerjaan }}" class="form-control @error('bidang_pekerjaan') is-invalid border-danger @enderror">
                    @error('bidang_pekerjaan')
                    <div class="invalid-feedback">{{ ucfirst($message) }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="gaji">Gaji Bulanan</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">IDR</span>
                        <input type="hidden" name="gaji_prefix" value="IDR">
                        <input type="text" name="gaji" id="gaji" value="{{ old('gaji') ? old('gaji') : $pengalaman->gaji }}" class="form-control @error('gaji') is-invalid border-danger @enderror">
                    </div>
                    @error('gaji')
                    <div class="invalid-feedback">{{ ucfirst($message) }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="deskripsi_pekerjaan">Deskripsi Pekerjaan</label>
                    <textarea name="deskripsi_pekerjaan" id="deskripsi_pekerjaan" class="form-control tinymce @error('deskripsi_pekerjaan') is-invalid border-danger @enderror">{{ old('deskripsi_pekerjaan') ? old('deskripsi_pekerjaan') : $pengalaman->deskripsi_pekerjaan }}</textarea>
                    @error('deskripsi_pekerjaan')
                    <div class="invalid-feedback">{{ ucfirst($message) }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tools">Tools / Aplikasi / Alat yang digunakan :</label>
                    <textarea name="tools" id="tools" class="form-control tinymce @error('tools') is-invalid border-danger @enderror">{{ old('tools') ? old('tools') : $pengalaman->tools }}</textarea>
                    @error('tools')
                    <div class="invalid-feedback">{{ ucfirst($message) }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mx-0">
                <div class="col-12 text-end border-top py-3 mt-3 px-0">
                    <a href="{{ route('akun.profile.pengalaman') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="la la-edit me-1"></i>Ubah
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('vendors/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('js/inits/select2.js') }}"></script>
<script type="text/javascript">
    $(function() {
        tinymce.init({
            selector: 'textarea.tinymce',
            height: 210,
            menubar: false,
            branding: false,
            statusbar: false,
            plugins: ['advlist lists'],
            toolbar: 'bold italic | bullist numlist'
        });

        $('input[name="masih_bekerja"]').on('click', function() {
            if ($(this).is(':checked')) {
                $('#tanggal_selesai').val('');
                $('#tanggal_selesai').attr('readonly', 'readonly');
            } else {
                $('#tanggal_selesai').removeAttr('readonly');
            }
        });

        $('#provinsi').on('change', function() {
            $.get(`/api/kabupaten/${$(this).val()}`, function(data, status) {
                $('#kabupaten').removeAttr('disabled');

                $('#kabupaten').html('');
                $kabOptions = `<option></option>`;
                data.forEach((item, index) => {
                    $kabOptions += `<option value="${item.kode}">${item.nama}</option>`;
                });
                $('#kabupaten').html($kabOptions);
            });
        });
    });
</script>
@endpush