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

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseMaster" 
        aria-expanded="true" aria-controls="collapseMaster">
            <i class="fas fa-fw fa-database"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseMaster" class="collapse" aria-labelledby="headingMaster"
        data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Master Data:</h6>
                <a class="collapse-item" href="{{ route('admin.pengguna.index') }}">Pengguna</a>
                <a class="collapse-item" href="{{ route('admin.perusahaan.index') }}">Mitra</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaction" 
        aria-expanded="false" aria-controls="collapseTransaction">
            <i class="fas fa-fw fa-table"></i>
            <span>Transaction</span>
        </a>
        <div id="collapseTransaction" class="collapse" aria-labelledby="headingTransaction"
        data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Transaction:</h6>
                <a class="collapse-item" href="{{ route('admin.lowongan.index') }}">Lowongan</a>
                <a class="collapse-item" href="{{ route('admin.pengumuman.index') }}">Pengumuman</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" 
        aria-expanded="false" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
        data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Pages:</h6>
                <a class="collapse-item" href="#">Sering Ditanya (FAQ)</a>
                <a class="collapse-item" href="#">Ketentuan Penggunaan</a>
                <a class="collapse-item" href="#">Kebijakan Privasi</a>
                <a class="collapse-item" href="#">Tentang Kami</a>
                <a class="collapse-item" href="#">Testimonial</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" 
        aria-expanded="false" aria-controls="collapseSetting">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Setting</span>
        </a>
        <div id="collapseSetting" class="collapse" aria-labelledby="headingSetting"
        data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Setting:</h6>
                <a class="collapse-item" href="{{ route('admin.manage-admin.index') }}">Manage Admin</a>
                <a class="collapse-item" href="#">Alamat</a>
                <a class="collapse-item" href="#">Hak Cipta</a>
                <a class="collapse-item" href="#">Link</a>
            </div>
        </div>
    </li>
</ul>