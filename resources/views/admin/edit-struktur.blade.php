@include('admin.layouts.header')

<body>
    <!-- Sidebar -->
    @include('admin.layouts.sidebar')

    <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
        {{-- Tidak perlu pakai @section di sini --}}

        <div class="container mt-5">
            <h2 class="mb-4">Edit Gambar Struktural</h2>

            {{-- Notifikasi jika ada --}}
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form Edit --}}
            <form action="{{ route('admin/struktur/update', $struktural->id_struktur) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Nama Struktural --}}
                <div class="mb-3">
                    <label class="form-label">Nama Struktural</label>
                    <input type="text" name="nama_struktural" class="form-control" value="{{ $struktural->nama_struktural }}" readonly>
                </div>

                {{-- Gambar Lama --}}
                <div class="mb-3">
                    <label class="form-label">Gambar Saat Ini</label><br>
                    @if($struktural->gambar_struktural)
                        <img src="{{ asset('/storage/foto_struktural/' . $struktural->gambar_struktural) }}" 
                            alt="Gambar Struktural" class="img-fluid rounded border" style="max-height: 200px;">
                    @else
                        <p class="text-muted">Belum ada gambar</p>
                    @endif
                </div>

                {{-- Upload Gambar Baru --}}
                <div class="mb-3">
                    <label for="gambar_struktural" class="form-label">Ganti Gambar Struktural</label>
                    <input type="file" name="gambar_struktural" class="form-control">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                </div>

                {{-- Tombol --}}
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Perubahan
                    </button>
                    <a href="{{ route('admin/struktur/semua') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
