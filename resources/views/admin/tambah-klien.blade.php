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
                    <form action="{{ route('admin/klien/simpan') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white rounded shadow-sm">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nama_klien">Nama Klien</label>
                                <input type="text" name="nama_klien" id="nama_klien" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="alamat_klien">Alamat_klien</label>
                                <input type="text" name="alamat_klien" id="alamat_klien" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="telp_klien">No.telp Klien</label>
                                <input type="text" name="telp_klien" id="telp_klien" class="form-control" required>
                            </div>
                            
                        </div>

                        <a href="{{ route('admin/klien/semua') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
            </div>
    </body>
    </html>
