@php
use App\Models\Mitra;
$daftarMitra = Mitra::orderBy('created_at', 'DESC')->limit(1)->get();
@endphp
<div class="card card-body box-card mb-3">
    <div class="box-title d-flex">
        <i class="la la-comments me-3"></i>
        Kata Mereka
    </div>

    <div class="py-2">
        <div class="row d-flex align-items-center">
            <div class="col-4">
                <div class="avatar-image avatar-md">
                    <img src="{{ asset('images/avatar.jpg') }}" alt="avatar" />
                </div>
            </div>
            <div class="col-8">
                <h6 class="text-primary fw-bold mb-2">Carson Frederick</h5>
                    <p class="text-muted mb-0">Bekerja di PT. Denso</p>
            </div>
            <div class="col-12 mt-3">
                <small>
                    “Nulla aliquet porttitor lacus luctus accumsan tortor posuere ac. Sit amet mauris commodo quis imperdiet massa. Lacus laoreet non curabitur gravida arcu ac tortor”.
                </small>
            </div>
        </div>
    </div>
</div>