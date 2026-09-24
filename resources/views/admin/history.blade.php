<!DOCTYPE html>
<html lang="id">
@include('admin.layouts.header')
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="container-fluid py-4" style="margin-left: -10px; padding-left: 20px;">
            <h2 class="mb-5">Dashboard</h2>

            <!-- Tombol Tambah dan Pencarian -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="{{ route('admin/pekerja/tambah-pekerja') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Tambah Pekerja
                </a>
                <form action="{{ route('admin/pekerja/semua') }}" method="GET" class="d-flex gap-2">
                    <input type="text" name="search" placeholder="Cari proyek..." class="form-control" value="{{ request()->get('search') }}">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>

            <!-- Tabel Proyek -->
            <div class="card mt-4">
    <div class="card-header">
        <h5>Proyek yang Dipegang</h5>
    </div>
    <div class="card-body p-0">
        @if($pekerja->proyek->count())
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Proyek</th>
                            <th>Bidang</th>
                            <th>Klien</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pekerja->proyek as $index => $proyek)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $proyek->nama_proyek }}</td>
                                <td>{{ $proyek->bidang->nama_bproyek ?? '-' }}</td>
                                <td>{{ $proyek->klien->nama_klien ?? '-' }}</td>
                                <td>{{ $proyek->lokasi_proyek }}</td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                </div>
                    @else
                        <div class="p-3">
                            <p class="text-muted mb-0">Pekerja ini belum memegang proyek apa pun.</p>
                        </div>
                    @endif
                </div>
            </div>


            <!-- Pagination -->
           <!-- Pagination -->
            <div class="mt-4 d-flex justify-content-center">
                {{ $pekerja->appends(['search' => request()->get('search')])->links('pagination::tailwind') }}
            </div>

            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</body>
</html>
