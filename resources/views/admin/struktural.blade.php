<!DOCTYPE html>
<html lang="id">
@include('admin.layouts.header')
<body>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
            <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
                @if ($struktural->isNotEmpty())
                    @php
                        $struktur = $struktural->first(); // Ambil struktur pertama, misalnya direktur utama
                    @endphp

                    <div class="card shadow text-center" style="max-width: 500px; width: 100%;">
                        @if ($struktur->gambar_struktural)
                            <img src="{{ asset('/storage/foto_struktural/' . $struktur->gambar_struktural) }}"
                                alt="{{ $struktur->nama_struktural }}"
                                class="card-img-top img-fluid p-4"
                                style="max-height: 800px; object-fit: contain;">
                        @else
                            <div class="p-5 text-muted">Tidak ada gambar</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $struktur->nama_struktural }}</h5>
                            <a href="{{ route('admin/struktur/edit', $struktur->id_struktur) }}" class="btn btn-primary">
                                <i class="bi bi-pencil-square"></i> Ganti
                            </a>
                        </div>
                    </div>
                @else
                    <div class="text-muted">Tidak ada data struktural ditemukan.</div>
                @endif
            </div>

        </div>
</body>
</html>
