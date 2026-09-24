<!DOCTYPE html>
<html lang="id">
@include('admin.layouts.header')
<body>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
            <h2 class="mb-5">Data Klien</h2>

            <!-- Tombol Tambah dan Pencarian -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="{{ route('admin/klien/tambah-klien') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Tambah Klien
                </a>
                <form action="{{ route('admin/klien/semua') }}" method="GET" class="d-flex gap-2">
                    <input type="text" name="search" placeholder="Cari klien..." class="form-control" value="{{ request()->get('search') }}">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>

            <!-- Tabel Proyek -->
            <div class="table-responsive shadow-lg rounded-lg bg-white p-3">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama Klien</th>
                            <th>Alamat Klien</th>
                            <th>No. Telp Klien</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($klien as $kliens)
                            <tr>
                                <td>{{ $loop->iteration + ($klien->currentPage() - 1) * $klien->perPage() }}</td>
                                <td class="text-start">{{ $kliens->nama_klien }}</td>
                                <td class="text-start">{{ $kliens->alamat_klien }}</td>
                                <td class="text-start">{{ $kliens->telp_klien }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <!-- Tombol Lihat -->
                                        <a href="{{ route('admin/klien/edit', $kliens->id_klien) }}" class="btn btn-info text-white btn-sm">
                                            <i class="bi bi-eye"></i> Lihat
                                        </a>

                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('admin/klien/hapus-klien', $kliens->id_klien) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus proyek ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11" class="text-center text-muted">Tidak ada proyek ditemukan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

           <!-- Pagination -->
            <div class="mt-4 d-flex justify-content-center">
                {{ $klien->appends(['search' => request()->get('search')])->links('pagination::bootstrap-5') }}
            </div>

            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
</body>
</html>
