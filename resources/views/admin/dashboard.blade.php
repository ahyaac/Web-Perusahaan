<!DOCTYPE html>
<html lang="id">
@include('admin.layouts.header')
<body>
    @include('admin.layouts.sidebar')

    <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px); background-color: #f8f9fc;">
        <h2 class="mb-4 fw-bold text-dark">Dashboard</h2>

        <div class="row g-4">

            <!-- CARD KLIEN -->
            <div class="col-md-4">
                <a href="{{ route('admin/klien/semua') }}" style="text-decoration: none;">
                    <div class="card shadow h-100 hover-shadow" style="cursor: pointer;">
                        <div class="card-header bg-primary text-white fw-bold d-flex justify-content-between align-items-center">
                            Data Klien
                            <span class="badge bg-light text-dark">{{ $jumlahKlien ?? 0 }}</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Informasi Klien</h5>
                            <p class="card-text text-muted">Klik untuk melihat daftar klien dan proyek terkait.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- CARD PROJECT -->
            <div class="col-md-4">
                <a href="{{ route('admin/project/semua') }}" style="text-decoration: none;">
                    <div class="card shadow h-100" style="cursor: pointer;">
                        <div class="card-header bg-success text-white fw-bold d-flex justify-content-between align-items-center">
                            Data Proyek
                            <span class="badge bg-light text-dark">{{ $jumlahProyek ?? 0 }}</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Informasi Proyek</h5>
                            <p class="card-text text-muted">Klik untuk melihat proyek yang sedang atau telah dikerjakan.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- CARD PEKERJA -->
            <div class="col-md-4">
                <a href="{{ route('admin/pekerja/semua') }}" style="text-decoration: none;">
                    <div class="card shadow h-100" style="cursor: pointer;">
                        <div class="card-header bg-warning text-dark fw-bold d-flex justify-content-between align-items-center">
                            Data Pekerja
                            <span class="badge bg-dark text-white">{{ $jumlahPekerja ?? 0 }}</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Informasi Pekerja</h5>
                            <p class="card-text text-muted">Klik untuk melihat daftar pekerja dan perannya.</p>
                        </div>
                    </div>
                </a>
            </div>

            

            <!-- CARD LAINNYA -->
            @php
                $dataMenu = [
                    [
                        'route' => 'admin/bidang/semua',
                        'title' => 'Data Bidang',
                        'desc'  => 'Klik untuk melihat daftar bidang proyek.',
                        'color' => 'info',
                        'jumlah' => $jumlahBidang ?? 0,
                    ],
                    [
                        'route' => 'admin/jabatan/semua',
                        'title' => 'Data Jabatan',
                        'desc'  => 'Klik untuk melihat daftar jabatan.',
                        'color' => 'secondary',
                        'jumlah' => $jumlahJabatan ?? 0,
                    ],
                    [
                        'route' => 'admin/equipment/semua',
                        'title' => 'Data Equipment',
                        'desc'  => 'Klik untuk melihat daftar equipment.',
                        'color' => 'dark',
                        'jumlah' => $jumlahEquipment ?? 0,
                    ],
                    [
                        'route' => 'admin/sertifikat/semua',
                        'title' => 'Data Sertifikat',
                        'desc'  => 'Klik untuk melihat daftar sertifikat.',
                        'color' => 'danger',
                        'jumlah' => $jumlahSertifikat ?? 0,
                    ],
                ];
            @endphp

            @foreach($dataMenu as $item)
                <div class="col-md-4">
                    <a href="{{ route($item['route']) }}" style="text-decoration: none;">
                        <div class="card shadow h-100" style="cursor: pointer;">
                            <div class="card-header bg-{{ $item['color'] }} text-white fw-bold d-flex justify-content-between align-items-center">
                                {{ $item['title'] }}
                                <span class="badge bg-light text-dark">{{ $item['jumlah'] }}</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['title'] }}</h5>
                                <p class="card-text text-muted">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</body>
</html>
