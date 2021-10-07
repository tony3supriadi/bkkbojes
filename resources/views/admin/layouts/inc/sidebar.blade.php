<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-2">BKK ADMIN</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">MAIN NAVIGATION</div>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Lowongan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Pengumuman</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-industry"></i>
            <span>Daftar Mitra</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.testimonial.index') }}">
            <i class="fas fa-fw fa-comment"></i>
            <span>Testimonial</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-user"></i>
            <span>Pengguna</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">LAINNYA</div>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-user"></i>
            <span>Authentication</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Halaman</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.faq.index') }}">Sering Ditanya (FAQ)</a>
                <a class="collapse-item" href="{{ route('admin.ketentuan-pengguna.index') }}">Ketentuan Penggunaan</a>
                <a class="collapse-item" href="{{ route('admin.kebijakan-privasi.index') }}">Kebijakan Privasi</a>
                <a class="collapse-item" href="{{ route('admin.tentang-kami.index') }}">Tentang Kami</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="false" aria-controls="collapseSetting">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Setting</span>
        </a>
        <div id="collapseSetting" class="collapse" aria-labelledby="headingSetting" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.alamat.index') }}">Alamat</a>
                <a class="collapse-item" href="{{ route('admin.hak-cipta.index') }}">Hak Cipta</a>
                <a class="collapse-item" href="{{ route('admin.link.index') }}">Link Media Sosial</a>
            </div>
        </div>
    </li>
</ul>