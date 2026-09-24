<!DOCTYPE html>
<html lang="id">
@include('admin.layouts.header')

<body>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
            <h2 class="mb-4">Detail Proyek</h2>

            <div class="card shadow border-0 mb-4">
                <div class="card-body d-flex flex-md-row flex-column">
                   
                    <!-- Informasi Proyek -->
                    <div class="flex-fill">
                        <h4 class="text-primary mb-3">{{ $detail->nama_proyek }}</h4>
                        <p><strong>Klien:</strong> {{ $detail->klien->nama_klien ?? $detail->nama_klien }}</p>
                        <p><strong>Alamat Klien:</strong> {{ $detail->klien->alamat_klien ?? $detail->alamat_klien }}</p>
                        <p><strong>Telp. Klien:</strong> {{ $detail->klien->telp_klien ?? $detail->telp_klien }}</p>
                        <p><strong>Nilai Proyek:</strong> 
                            @if($detail->nominal)
                                Rp {{ number_format($detail->nominal, 0, ',', '.') }}
                            @else
                                Tidak ada nominal
                            @endif
                        </p>
                        <p><strong>No. Kontrak:</strong> {{ $detail->no_kontrak }}</p>
                        <p><strong>No. Brast:</strong> {{ $detail->no_brast }}</p>
                        <p><strong>Tanggal Mulai:</strong> {{ \Carbon\Carbon::parse($detail->tanggal_mulai)->format('d M Y') }}</p>
                        <p><strong>Tanggal Selesai:</strong> {{ \Carbon\Carbon::parse($detail->tanggal_selesai)->format('d M Y') }}</p>
                        <p><strong>Status:</strong>
                            <span class="badge {{ $detail->status == 'selesai|Selesai' ? 'bg-success' : 'bg-danger' }}">
                                {{ $detail->status }}
                            </span>
                        </p>
                        <p><strong>Project Leader:</strong> {{ $detail->pekerja->nama_pekerja ?? '-' }}</p>
                        <p><strong>Bidang Proyek:</strong> {{ $detail->bidang->nama_bproyek ?? '-' }}</p>
                        <p><strong>Lokasi Klien:</strong> {{ $detail->lokasi_klien ?? '-' }}</p>

                        <!-- Tombol Kembali dan Edit Project -->
                        <div class="d-flex gap-2">
                            <a href="{{ route('admin/project/semua') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>
                            <a href="{{ route('admin/project/edit', $detail->id_proyek) }}" class="btn btn-warning">
                                Edit Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
