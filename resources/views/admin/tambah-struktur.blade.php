    <!DOCTYPE html>
    <html lang="id">
    <head>
    @include('admin.layouts.header')
    <body>
            <!-- Sidebar -->
            @include('admin.layouts.sidebar')
            <!-- Main Content -->
            <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
                <h2 class="mb-5">Dashboard</h2>
                    <form action="{{ route('admin/struktur/simpan') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white rounded shadow-sm">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nama_struktural">Nama Struktur</label>
                                <input type="text" name="nama_struktural" id="nama_struktural" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="gambar_struktural">Gambar Struktur</label>
                                <input type="file" name="gambar_struktural" id="gambar_struktural" class="form-control" required>
                            </div>
                        </div>

                        <a href="{{ route('admin/struktur/semua') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
            </div>
    </body>
    </html>
