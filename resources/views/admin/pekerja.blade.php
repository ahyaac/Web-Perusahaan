<!DOCTYPE html>
<html lang="id">
@include('admin.layouts.header')
<body>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
            <h2 class="mb-5">Data Pekerja</h2>

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
            <div class="table-responsive shadow-lg rounded-lg bg-white p-3">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nik</th>
                            <th>Foto</th>
                            <th>Alamat</th>
                            <th>Tgl Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Tgl Masuk</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>Pendidikan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pekerja as $pekerjas)
                            <tr>
                                <td>{{ ($pekerja->currentPage() - 1) * $pekerja->perPage() + $loop->iteration }}</td>
                                <td class="text-start">{{ $pekerjas->nama_pekerja }}</td>
                                <td class="text-start">{{ $pekerjas->nik_pekerja }}</td>
                                <td >
                                    @if ($pekerjas->foto_pekerja)
                                        <img src="{{ asset('/storage/foto_pekerja/' . $pekerjas->foto_pekerja) }}" alt="Logo" class="img-fluid" style="max-height: 60px;">
                                    @else
                                        <span>No Logo</span>
                                    @endif
                                </td>
                                <td class="text-start">{{ $pekerjas->alamat }}</td>
                                <td class="text-start">{{ $pekerjas->tgl_lahir }}</td>
                                @php
                                    $statisList = [
                                        'laki-laki' => 'Laki-Laki',
                                        'perempuan' => 'Perempuan'
                                        ];
                                @endphp
                                <td class="text-start">
                                     {{ $statisList[strtolower($pekerjas->jenis_kelamin)] ?? $pekerjas->jenis_kelamin }}
                                </td>
                                <td class="text-start">{{ $pekerjas->tgl_masuk }}</td>
                                <td class="text-start">{{ $pekerjas->Levelpekerja->jabatan_pekerja ?? '-'}}</td>
                                @php
                                    $statisList = [
                                        'tetap' => 'Tetap',
                                        'tidak-tetap' => 'Tidak Tetap'
                                        ];
                                @endphp
                                <td class="text-start">
                                     {{ $statisList[strtolower($pekerjas->status_pekerja)] ?? $pekerjas->status_pekerja }}
                                </td>
                                @php
                                    $statusList = [
                                        'tidak sekolah' => 'Tidak Sekolah',
                                        'sd' => 'SD',
                                        'smp' => 'SMP',
                                        'sltp' => 'SLTP',
                                        'mts' => 'MTS',
                                        'sma' => 'SMA',
                                        'slta' => 'SLTA',
                                        'smea' => 'SMEA',
                                        'stm' => 'STM',
                                        'smk' => 'SMK',
                                        'diploma-3' => 'Diploma-3',
                                        'strata-1' => 'Strata-1',
                                        'strata-2' => 'Strata-2',
                                        'strata-3' => 'Strata-3',
                                    ];
                                @endphp

                                <td class="text-start">
                                    {{ $statusList[strtolower($pekerjas->pendidikan)] ?? $pekerjas->pendidikan }}
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <!-- Tombol Lihat -->
                                        <a href="{{ route('admin/pekerja/detail', $pekerjas->id_pekerja) }}" class="btn btn-info text-white btn-sm">
                                            <i class="bi bi-eye"></i> Lihat
                                        </a>

                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('admin/pekerja/hapus-pekerja', $pekerjas->id_pekerja) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus proyek ini?');">
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
                {{ $pekerja->appends(['search' => request()->get('search')])->links('pagination::bootstrap-4') }}
            </div>

            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
</body>
</html>
