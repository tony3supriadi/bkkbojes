<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-2">BKK ADMIN</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.manage-admin.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Manage Admin</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.lowongan.index') }}">
            <i class="fas fa-fw fa-mail-bulk"></i>
            <span>Lowongan</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.pengumuman.index') }}">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>Pengumuman</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.pengguna.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Pengguna</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.bursakerja.index') }}">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Bursa Kerja</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.perusahaan.index') }}">
            <i class="fas fa-fw fa-handshake"></i>
            <span>Perusahaan</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.bantuan.index') }}">
            <i class="fas fa-fw fa-question-circle"></i>
            <span>Bantuan</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.lainnya.index') }}">
            <i class="fas fa-fw fa-layer-group"></i>
            <span>Lainnya</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.pengaturan.index') }}">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Pengaturan</span>
        </a>
    </li>
</ul>