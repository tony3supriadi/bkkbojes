@php
use App\Models\Testimonial;
$daftarTestimonial = Testimonial::select('bbk2_testimonial.*', 'fdf1_personal.photo')
    ->join('fdf1_personal', 'fdf1_personal.id', '=', 'personal_id')
    ->orderBy('created_at', 'DESC')->limit(1)->get();
@endphp
<div class="card card-body box-card mb-3">
    <div class="box-title d-flex">
        <i class="la la-comments me-3"></i>
        Kata Mereka
    </div>

    <div class="py-2">
        @if(count($daftarTestimonial))
        @foreach($daftarTestimonial as $testimoni)
        <div class="row d-flex align-items-center">
            <div class="col-4">
                <div class="avatar-image avatar-md">
                    <img src="{{ asset('images/personal/' . $testimoni->photo) }}" alt="avatar" />
                </div>
            </div>
            <div class="col-8">
                <h6 class="text-primary fw-bold mb-2">{{ $testimoni->nama }}</h6>
            </div>
            <div class="col-12 mt-3">
                <small>
                    “{{ $testimoni->deskripsi_testimonial }}”.
                </small>
            </div>
        </div>
        @endforeach
        @else
            <div class="card card-body text-center">
                <i class="la la-warning fa-5x text-muted d-block mb-3"></i>
                <p class="text-muted">BELUM ADA TESTIMONIAL</p>
            </div>
        @endif
    </div>
</div>
