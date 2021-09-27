<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama_mitra">Nama Mitra</label>
                <input type="text" name="nama_mitra" id="nama_mitra" value="{{ old('nama_mitra') ?? $data->nama_mitra}}" class="form-control @error('nama_mitra') is-invalid @enderror" autocomplete="off" {{ $readonly }}/>

                @error('nama_mitra')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="bidang_usaha">Bidang Usaha</label>
                <input name="bidang_usaha" id="bidang_usaha" value="{{ old('bidang_usaha') ?? $data->bidang_usaha }}" class="form-control @error('bidang_usaha') is-invalid @enderror" autocomplete="off" {{ $readonly }}/>

                @error('bidang_usaha')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="lokasi_kabupaten">Lokasi</label>
                <select name="lokasi_kabupaten" id="lokasi_kabupaten" required="required" class="form-control" data-width="100%" {{ $readonly }}>
                    <option selected disabled>Pilih Kabupaten / Kota</option>
                    @foreach($kabupaten as $item)
                        <option value="{{ $item->id }}" {{ old('lokasi_kabupaten', $data->lokasi_kabupaten) == $item->id ? 'selected' : null }}>{{ $item->nama_kabupaten}}</option>
                    @endforeach
                </select>

                @error('lokasi_kabupaten')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="jenis_badan_usaha">Jenis Badan Usaha</label>
                <select id="jenis_badan_usaha" name="jenis_badan_usaha" class="form-control" required="required" {{ $readonly }}>
                    <i class="la la-angle-down"></i>
                    <option selected disabled>Pilih Jenis Badan Usaha</option>
                    <option value="BUMN" {{ old('jenis_badan_usaha', $data->jenis_badan_usaha) == 'BUMN' ? 'selected' : null}}>BUMN</option>
                    <option value="Swasta" {{ old('jenis_badan_usaha', $data->jenis_badan_usaha) == 'Swasta' ? 'selected' : null}}>Swasta</option>
                    <option value="Asing" {{ old('jenis_badan_usaha', $data->jenis_badan_usaha) == 'Asing' ? 'selected' : null}}>Asing</option>
                </select>

                @error('jenis_badan_usaha')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="bentuk_usaha">Bentuk Usaha</label>
                <input name="bentuk_usaha" id="bentuk_usaha" value="{{ old('bentuk_usaha') ?? $data->bentuk_usaha}}" class="form-control @error('bentuk_usaha') is-invalid @enderror" autocomplete="off" {{ $readonly }}/>

                @error('bentuk_usaha')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="jumlah_karyawan">Jumlah Karyawan</label>
                <input name="jumlah_karyawan" id="jumlah_karyawan" value="{{ old('jumlah_karyawan') ?? $data->jumlah_karyawan}}" class="form-control @error('jumlah_karyawan') is-invalid @enderror" autocomplete="off" {{ $readonly }}/>

                @error('jumlah_karyawan')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="busana_kerja">Busana Kerja</label>
                <input type="text" name="busana_kerja" id="busana_kerja" value="{{ old('busana_kerja') ?? $data->busana_kerja }}" class="form-control @error('busana_kerja') is-invalid @enderror" autocomplete="off" {{ $readonly }}/>

                @error('busana_kerja')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="waktu_kerja">Waktu Kerja</label>
                <input type="text" name="waktu_kerja" id="waktu_kerja" value="{{ old('waktu_kerja') ?? $data->waktu_kerja}}" class="form-control @error('waktu_kerja') is-invalid @enderror" autocomplete="off" {{ $readonly }}/>

                @error('waktu_kerja')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="kontak">Kontak (Alamat)</label>
                <textarea name="kontak" id="kontak" style="height: 125px" class="form-control" {{ $readonly }}>{{ old('kontak') ?? $data->kontak }}</textarea>

                @error('kontak')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" name="telepon" id="telepon" value="{{ old('telepon') ?? $data->telepon}}" class="form-control @error('telepon') is-invalid @enderror" autocomplete="off" {{ $readonly }}/>

                @error('telepon')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{ old('email') ?? $data->email }}" class="form-control @error('email') is-invalid @enderror" autocomplete="off" {{ $readonly }}/>

                @error('email')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" name="website" id="website" value="{{ old('website') ?? $data->website}}" class="form-control @error('website') is-invalid @enderror" autocomplete="off" {{ $readonly }}/>

                @error('website')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="logo">Logo</label>
                <div class="d-flex justifty-content-between">
                    <input type="text" name="logo" id="logo" value="{{ old('logo') ?? $data->logo}}" class="form-control @error('logo') is-invalid @enderror" autocomplete="off" {{ $readonly }}/>

                    <button type="reset" class="btn btn-info ms-3">
                        <i class="fa fa-search"></i>
                    </button>
                </div>

                @error('logo')
                <small class="text-danger d-block">{{ ucfirst($message) }}</small>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="profil_perusahaan">Profil Perusahaan</label>
        <textarea name="profil_perusahaan" id="profil_perusahaan" style="height: 200px" class="form-control tinymce">{{ old('profil_perusahaan') }}</textarea>

        @error('profil_perusahaan')
        <small class="text-danger d-block">{{ ucfirst($message) }}</small>
        @enderror
    </div>
</div>

@push('styles')
<link href="{{asset('/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{asset('/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script>
        $('select').select2();
    </script>
@endpush



