<div class="card card-body box-card mb-3">
    <div class="box py-2">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Keyik kata kunci, nama perusahaan, posisi, dll...">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                    <i class="la la-search" style="color: white"></i>
                </button>
            </span>
        </div>
        <div class="row m-0">
            <div class="col-md-2 px-1 mb-2 mb-md-0">
                <select id="urutkan" data-placeholder="Urutkan" class="form-control">
                    <i class="la la-angle-down"></i>
                    <option value=""></option>
                    <option value="#">Terfavorit</option>
                    <option value="#">Terbaru</option>
                    <option value="#">Terlama</option>
                </select>
            </div>
            <div class="col-md-2 px-1 mb-2 mb-md-0">
                <select id="lokasi" data-placeholder="Lokasi" class="form-control">
                    <i class="la la-angle-down"></i>
                    <option value=""></option>
                    <option value="#">Bali</option>
                    <option value="#">Banten</option>
                    <option value="#">Jawa Barat</option>
                    <option value="#">Jawa Tengah</option>
                    <option value="#">Jawa Timur</option>
                    <option value="#">Daerah Istimewa Yogyakarta</option>
                </select>
            </div>
            <div class="col-md-2 px-1 mb-2 mb-md-0">
                <select id="kisaran_gaji" data-placeholder="Gaji" class="form-control">
                    <i class="la la-angle-down"></i>
                    <option value=""></option>
                    <option value="#">5.000.000</option>
                    <option value="#">10.000.000</option>
                    <option value="#">15.000.000</option>
                </select>
            </div>
            <div class="col-md-3 px-1 mb-2 mb-md-0">
                <select id="jenis_pekerjaan" data-placeholder="Jenis Pekerjaan" class="form-control">
                    <i class="la la-angle-down"></i>
                    <option value=""></option>
                    <option value="#">Pekerjaan 1</option>
                    <option value="#">Pekerjaan 2</option>
                </select>
            </div>
            <div class="col-md-3 px-1 mb-2 mb-md-0">
                <select id="program_studi" data-placeholder="Program Studi" class="form-control">
                    <i class="la la-angle-down"></i>
                    <option value=""></option>
                    <option value="#">Studi 1</option>
                    <option value="#">Studi 2</option>
                </select>
            </div>
        </div>
    </div>
</div>

<ul class="list-group">
    <li class="list-group">
        <div class="card card-body box-card mb-3">
            <div class="box-title">
                <div class="row">
                    <div class="col-md-5">
                        <a href="{{ route('lowongan-detail') }}" class="" style="text-decoration:none">
                            <h5>Waiters, Dishwasher, Cook Helper</h5>
                        </a>
                            <h6>Aston Imperium Hotel</h6>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/map-marker-alt-solid.png') }}" class="me-2"/>
                                        <span>Purwokerto, Banyumas, Jawa tengah</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/user-tag-solid.png') }}" class="me-2"/>
                                        <span> Jasa Boga</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/business-time-solid.png') }}" class="me-2"/>
                                        <span> Full Time </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center">
                                        <img src="{{ asset('images/icons/hand-holding-usd-solid.png') }}" class="me-2"/>
                                        <span> Rp. 3 - 5 Juta </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="row d-flex justify-items-between">
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <img src="{{ asset('images/icons/day-ago.png') }}" class="me-2"/>
                                <span>2 hari yang lalu</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-calendar-times-o me-2"></i>
                                <span>ditutup 16 hari lagi</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-eye me-2"></i>
                                <span>dilihat 174 kali</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>

    <li class="list-group">
        <div class="card card-body box-card mb-3">
            <div class="box-title">
                <div class="row">
                    <div class="col-md-5">
                        <a href="{{ route('lowongan-detail') }}" class="" style="text-decoration:none">
                            <h5>Waiters, Dishwasher, Cook Helper</h5>
                        </a>
                            <h6>Aston Imperium Hotel</h6>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/map-marker-alt-solid.png') }}" class="me-2"/>
                                        <span>Purwokerto, Banyumas, Jawa tengah</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/user-tag-solid.png') }}" class="me-2"/>
                                        <span> Jasa Boga</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/business-time-solid.png') }}" class="me-2"/>
                                        <span> Full Time </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center">
                                        <img src="{{ asset('images/icons/hand-holding-usd-solid.png') }}" class="me-2"/>
                                        <span> Rp. 3 - 5 Juta </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="row d-flex justify-items-between">
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <img src="{{ asset('images/icons/day-ago.png') }}" class="me-2"/>
                                <span>2 hari yang lalu</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-calendar-times-o me-2"></i>
                                <span>ditutup 16 hari lagi</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-eye me-2"></i>
                                <span>dilihat 174 kali</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>

    <li class="list-group">
        <div class="card card-body box-card mb-3">
            <div class="box-title">
                <div class="row">
                    <div class="col-md-5">
                        <a href="{{ route('lowongan-detail') }}" class="" style="text-decoration:none">
                            <h5>Waiters, Dishwasher, Cook Helper</h5>
                        </a>
                            <h6>Aston Imperium Hotel</h6>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/map-marker-alt-solid.png') }}" class="me-2"/>
                                        <span>Purwokerto, Banyumas, Jawa tengah</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/user-tag-solid.png') }}" class="me-2"/>
                                        <span> Jasa Boga</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/business-time-solid.png') }}" class="me-2"/>
                                        <span> Full Time </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center">
                                        <img src="{{ asset('images/icons/hand-holding-usd-solid.png') }}" class="me-2"/>
                                        <span> Rp. 3 - 5 Juta </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="row d-flex justify-items-between">
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <img src="{{ asset('images/icons/day-ago.png') }}" class="me-2"/>
                                <span>2 hari yang lalu</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-calendar-times-o me-2"></i>
                                <span>ditutup 16 hari lagi</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-eye me-2"></i>
                                <span>dilihat 174 kali</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>

    <li class="list-group">
        <div class="card card-body box-card mb-3">
            <div class="box-title">
                <div class="row">
                    <div class="col-md-5">
                        <a href="{{ route('lowongan-detail') }}" class="" style="text-decoration:none">
                            <h5>Waiters, Dishwasher, Cook Helper</h5>
                        </a>
                            <h6>Aston Imperium Hotel</h6>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/map-marker-alt-solid.png') }}" class="me-2"/>
                                        <span>Purwokerto, Banyumas, Jawa tengah</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/user-tag-solid.png') }}" class="me-2"/>
                                        <span> Jasa Boga</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/business-time-solid.png') }}" class="me-2"/>
                                        <span> Full Time </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center">
                                        <img src="{{ asset('images/icons/hand-holding-usd-solid.png') }}" class="me-2"/>
                                        <span> Rp. 3 - 5 Juta </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="row d-flex justify-items-between">
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <img src="{{ asset('images/icons/day-ago.png') }}" class="me-2"/>
                                <span>2 hari yang lalu</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-calendar-times-o me-2"></i>
                                <span>ditutup 16 hari lagi</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-eye me-2"></i>
                                <span>dilihat 174 kali</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>

    <li class="list-group">
        <div class="card card-body box-card mb-3">
            <div class="box-title">
                <div class="row">
                    <div class="col-md-5">
                        <a href="{{ route('lowongan-detail') }}" class="" style="text-decoration:none">
                            <h5>Waiters, Dishwasher, Cook Helper</h5>
                        </a>
                            <h6>Aston Imperium Hotel</h6>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/map-marker-alt-solid.png') }}" class="me-2"/>
                                        <span>Purwokerto, Banyumas, Jawa tengah</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/user-tag-solid.png') }}" class="me-2"/>
                                        <span> Jasa Boga</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/business-time-solid.png') }}" class="me-2"/>
                                        <span> Full Time </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center">
                                        <img src="{{ asset('images/icons/hand-holding-usd-solid.png') }}" class="me-2"/>
                                        <span> Rp. 3 - 5 Juta </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="row d-flex justify-items-between">
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <img src="{{ asset('images/icons/day-ago.png') }}" class="me-2"/>
                                <span>2 hari yang lalu</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-calendar-times-o me-2"></i>
                                <span>ditutup 16 hari lagi</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-eye me-2"></i>
                                <span>dilihat 174 kali</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>

    <li class="list-group">
        <div class="card card-body box-card mb-3">
            <div class="box-title">
                <div class="row">
                    <div class="col-md-5">
                        <a href="{{ route('lowongan-detail') }}" class="" style="text-decoration:none">
                            <h5>Waiters, Dishwasher, Cook Helper</h5>
                        </a>
                            <h6>Aston Imperium Hotel</h6>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/map-marker-alt-solid.png') }}" class="me-2"/>
                                        <span>Purwokerto, Banyumas, Jawa tengah</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/user-tag-solid.png') }}" class="me-2"/>
                                        <span> Jasa Boga</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/business-time-solid.png') }}" class="me-2"/>
                                        <span> Full Time </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center">
                                        <img src="{{ asset('images/icons/hand-holding-usd-solid.png') }}" class="me-2"/>
                                        <span> Rp. 3 - 5 Juta </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="row d-flex justify-items-between">
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <img src="{{ asset('images/icons/day-ago.png') }}" class="me-2"/>
                                <span>2 hari yang lalu</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-calendar-times-o me-2"></i>
                                <span>ditutup 16 hari lagi</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-eye me-2"></i>
                                <span>dilihat 174 kali</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>

    <li class="list-group">
        <div class="card card-body box-card mb-3">
            <div class="box-title">
                <div class="row">
                    <div class="col-md-5">
                        <a href="{{ route('lowongan-detail') }}" class="" style="text-decoration:none">
                            <h5>Waiters, Dishwasher, Cook Helper</h5>
                        </a>
                            <h6>Aston Imperium Hotel</h6>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/map-marker-alt-solid.png') }}" class="me-2"/>
                                        <span>Purwokerto, Banyumas, Jawa tengah</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/user-tag-solid.png') }}" class="me-2"/>
                                        <span> Jasa Boga</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/business-time-solid.png') }}" class="me-2"/>
                                        <span> Full Time </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center">
                                        <img src="{{ asset('images/icons/hand-holding-usd-solid.png') }}" class="me-2"/>
                                        <span> Rp. 3 - 5 Juta </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="row d-flex justify-items-between">
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <img src="{{ asset('images/icons/day-ago.png') }}" class="me-2"/>
                                <span>2 hari yang lalu</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-calendar-times-o me-2"></i>
                                <span>ditutup 16 hari lagi</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-eye me-2"></i>
                                <span>dilihat 174 kali</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>

    <li class="list-group">
        <div class="card card-body box-card mb-3">
            <div class="box-title">
                <div class="row">
                    <div class="col-md-5">
                        <a href="{{ route('lowongan-detail') }}" class="" style="text-decoration:none">
                            <h5>Waiters, Dishwasher, Cook Helper</h5>
                        </a>
                            <h6>Aston Imperium Hotel</h6>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/map-marker-alt-solid.png') }}" class="me-2"/>
                                        <span>Purwokerto, Banyumas, Jawa tengah</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/user-tag-solid.png') }}" class="me-2"/>
                                        <span> Jasa Boga</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center mb-2">
                                        <img src="{{ asset('images/icons/business-time-solid.png') }}" class="me-2"/>
                                        <span> Full Time </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="icons-desc-group d-flex align-items-center">
                                        <img src="{{ asset('images/icons/hand-holding-usd-solid.png') }}" class="me-2"/>
                                        <span> Rp. 3 - 5 Juta </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="row d-flex justify-items-between">
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <img src="{{ asset('images/icons/day-ago.png') }}" class="me-2"/>
                                <span>2 hari yang lalu</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-calendar-times-o me-2"></i>
                                <span>ditutup 16 hari lagi</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icons-desc-group d-flex align-items-center mb-2">
                                <i class="la la-eye me-2"></i>
                                <span>dilihat 174 kali</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>


@push('styles')
<link href="{{asset('/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{asset('/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script>
        $('select').select2();
    </script>
@endpush
