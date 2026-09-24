<style>
/* Untuk dropdown sidebar */
.sidebar-dropdown {
    position: relative;
}

.sidebar-submenu {
    display: none;
    background-color: #343a40; /* Sesuaikan dengan sidebar kamu */
    padding-left: 1rem;
    margin-top: 0.25rem;
}

.sidebar-dropdown:hover .sidebar-submenu {
    display: block;
}

.sidebar-submenu a {
    padding: 0.5rem 0.75rem;
    display: block;
    color: #ffffff;
    border-radius: 0.25rem;
    transition: background 0.3s;
}

.sidebar-submenu a:hover {
    background-color: #495057;
}
</style>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!-- Bootstrap JS (for dropdown toggle behavior if needed) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="bg-dark text-white p-3 d-flex flex-column" 
     style="width: 250px; height: 100vh; position: fixed; top: 0; left: 0; z-index: 1000;">
    <a href="/" class="d-flex align-items-center mb-3 text-white text-decoration-none">
        <span class="fs-4">Admin Panel</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">

        <!-- MENU DASHBOARD DROPDOWN -->
        <li class="nav-item sidebar-dropdown">
            <a href="{{ route('admin.dashboard') }}" class="nav-link text-white d-flex justify-content-between align-items-center">
                <span><i class="bi bi-house-door me-2"></i> Dashboard</span>
                <i class="bi bi-caret-down-fill"></i>
            </a>
            <ul class="sidebar-submenu list-unstyled">
                <li><a href="{{ route('admin/klien/semua') }}" class="nav-link ps-4 text-white">Data Klien</a></li>
                <li><a href="{{ route('admin/project/semua') }}" class="nav-link ps-4 text-white">Data Proyek</a></li>
                <li><a href="{{ route('admin/pekerja/semua') }}" class="nav-link ps-4 text-white">Data Pekerja</a></li>
                <li><a href="{{ route('admin/bidang/semua') }}" class="nav-link ps-4 text-white">Data Bidang</a></li>
                <li><a href="{{ route('admin/equipment/semua') }}" class="nav-link ps-4 text-white">Data Equipment</a></li>
                <li><a href="{{ route('admin/jabatan/semua') }}" class="nav-link ps-4 text-white">Data Jabatan</a></li>
                <li><a href="{{ route('admin/sertifikat/semua') }}" class="nav-link ps-4 text-white">Data Sertifikat</a></li>
            </ul>
        </li>

        <li class="nav-item mt-2">
            <a href="{{ route('admin/struktur/semua') }}" class="nav-link text-white">
                <i class="bi bi-diagram-3-fill me-2"></i> Struktur Organisasi
            </a>
        </li>

        <!-- MENU LAIN -->
        <li class="nav-item mt-2">
            <a href="{{ route('admin.edit') }}" class="nav-link text-white">
                <i class="bi bi-person-circle me-2"></i> Akun Saya
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.logout') }}" class="nav-link text-white">
                <i class="bi bi-box-arrow-right me-2"></i> Keluar
            </a>
        </li>
    </ul>

    <hr class="mt-auto">
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" 
           id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff" 
                 alt="Admin" width="32" height="32" class="rounded-circle me-2">
            <strong>Admin</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Profil</a></li>
            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Keluar</a></li>
        </ul>
    </div>
</div>
