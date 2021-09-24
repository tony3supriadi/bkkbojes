@extends('layouts.app')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <div class="container d-flex justify-content-between">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item active">Testimonial</li>
        </ol>

        <div class="back m-0">
            <a href="#" class="text-secondary" style="text-decoration:none">
                <img src="{{ asset('images/icons/arrow-circle-left-solid.png') }}"/>
                Kembali
            </a>
        </div>
    </div>
</nav>
@endsection

@section('content')
<section class="title">
    <div class="container flex justify-content-between align-items-center">
        <div class="icons-group text-secondary d-flex align-items-center">
            <img src="{{ asset('images/icons/orange/comments-solid.png') }}" class="me-3"/>
            <h2>Testimonial</h2>
        </div>

        <div class="col-md-2 mb-md-0">
            <select id="testimoni" data-placeholder="Semua Testimoni" class="form-control">
                <i class="la la-angle-down"></i>
                <option value=""></option>
                <option value="#">Umum</option>
                <option value="#">Prakerind</option>
                <option value="#">Alumni 2004</option>
                <option value="#">Alumni 2005</option>
                <option value="#">Alumni 2006</option>
                <option value="#">Alumni 2007</option>
            </select>
        </div>
    </div>
</section>
<section class="pengumuman">
    <div class="container">
        <div class="row flex">
            <div class="column">
                <div class="row align-items-center mb-3">
                    <div class="col-3 col-md-2">
                        <div class="avatar-image avatar-md">
                            <img src="{{ asset('images/avatar.jpg') }}" alt="avatar" />
                        </div>
                    </div>
                    <div class="col-9 col-md-10">
                        <h5 class="text-primary fw-bold mb-2">Slamet Carson</h5>
                        <div class="row d-flex justify-items-between">
                            <div class="col-md-4">
                                <div class="icons-group d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/icons/user.png') }}" width="20" height="20" class="me-2"/>
                                    <span class="text-secondary">Alumni 2016</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="icons-group d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/icons/briefcase-solid.png') }}" width="20" height="20" class="me-2"/>
                                    <span class="text-secondary">Bekerja di PT. Denso</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius quae eveniet minima aliquid non similique voluptas sed optio, tempore odit reprehenderit. Ab alias, vero nihil aliquid voluptatem explicabo rem eum!</p>
            </div>
            <div class="column">
                <div class="row align-items-center mb-3">
                    <div class="col-3 col-md-2">
                        <div class="avatar-image avatar-md">
                            <img src="{{ asset('images/avatar.jpg') }}" alt="avatar" />
                        </div>
                    </div>
                    <div class="col-9 col-md-10">
                        <h5 class="text-primary fw-bold mb-2">Slamet Carson</h5>
                        <div class="row d-flex justify-items-between">
                            <div class="col-md-4">
                                <div class="icons-group d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/icons/user.png') }}" width="20" height="20" class="me-2"/>
                                    <span class="text-secondary">Alumni 2016</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="icons-group d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/icons/briefcase-solid.png') }}" width="20" height="20" class="me-2"/>
                                    <span class="text-secondary">Bekerja di PT. Denso</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius quae eveniet minima aliquid non similique voluptas sed optio, tempore odit reprehenderit. Ab alias, vero nihil aliquid voluptatem explicabo rem eum!</p>
            </div>
            <div class="column">
                <div class="row align-items-center mb-3">
                    <div class="col-3 col-md-2">
                        <div class="avatar-image avatar-md">
                            <img src="{{ asset('images/avatar.jpg') }}" alt="avatar" />
                        </div>
                    </div>
                    <div class="col-9 col-md-10">
                        <h5 class="text-primary fw-bold mb-2">Slamet Carson</h5>
                        <div class="row d-flex justify-items-between">
                            <div class="col-md-4">
                                <div class="icons-group d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/icons/user.png') }}" width="20" height="20" class="me-2"/>
                                    <span class="text-secondary">Alumni 2016</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="icons-group d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/icons/briefcase-solid.png') }}" width="20" height="20" class="me-2"/>
                                    <span class="text-secondary">Bekerja di PT. Denso</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius quae eveniet minima aliquid non similique voluptas sed optio, tempore odit reprehenderit. Ab alias, vero nihil aliquid voluptatem explicabo rem eum!</p>
            </div>
            <div class="column">
                <div class="row align-items-center mb-3">
                    <div class="col-3 col-md-2">
                        <div class="avatar-image avatar-md">
                            <img src="{{ asset('images/avatar.jpg') }}" alt="avatar" />
                        </div>
                    </div>
                    <div class="col-9 col-md-10">
                        <h5 class="text-primary fw-bold mb-2">Slamet Carson</h5>
                        <div class="row d-flex justify-items-between">
                            <div class="col-md-4">
                                <div class="icons-group d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/icons/user.png') }}" width="20" height="20" class="me-2"/>
                                    <span class="text-secondary">Alumni 2016</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="icons-group d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/icons/briefcase-solid.png') }}" width="20" height="20" class="me-2"/>
                                    <span class="text-secondary">Bekerja di PT. Denso</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius quae eveniet minima aliquid non similique voluptas sed optio, tempore odit reprehenderit. Ab alias, vero nihil aliquid voluptatem explicabo rem eum!</p>
            </div>
            <div class="column">
                <div class="row align-items-center mb-3">
                    <div class="col-3 col-md-2">
                        <div class="avatar-image avatar-md">
                            <img src="{{ asset('images/avatar.jpg') }}" alt="avatar" />
                        </div>
                    </div>
                    <div class="col-9 col-md-10">
                        <h5 class="text-primary fw-bold mb-2">Slamet Carson</h5>
                        <div class="row d-flex justify-items-between">
                            <div class="col-md-4">
                                <div class="icons-group d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/icons/user.png') }}" width="20" height="20" class="me-2"/>
                                    <span class="text-secondary">Alumni 2016</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="icons-group d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/icons/briefcase-solid.png') }}" width="20" height="20" class="me-2"/>
                                    <span class="text-secondary">Bekerja di PT. Denso</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius quae eveniet minima aliquid non similique voluptas sed optio, tempore odit reprehenderit. Ab alias, vero nihil aliquid voluptatem explicabo rem eum!</p>
            </div>
        </div>
        @include('pages.lowongan.partials.pagination')
    </div>

</section>

@endsection


@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('select').select2();
    </script>
@endpush
