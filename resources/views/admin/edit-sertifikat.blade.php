<!DOCTYPE html>
<html lang="id">
<head>
@include('admin.layouts.header')
<body>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- Main Content -->
        <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
            <h2 class="mb-5">Edit Sertifikat</h2>
                <form action="{{ route('admin/sertifikat/update', $sertifikat->id_sertifikat) }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white rounded shadow-sm">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nama_sertifikat">Nama Sertifikat</label>
                            <input type="text" name="nama_sertifikat" id="nama_sertifikat" value="{{ $sertifikat->nama_sertifikat }}" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="dokumen_sertifikat">Dokumen Sertifikat</label>
                            <input type="file" name="dokumen_sertifikat" id="dokumen_sertifikat" class="form-control">
                            <small class="text-muted">Kosongkan jika tidak ingin mengganti</small>

                            @if ($sertifikat->dokumen_sertifikat)
                                        <a href="{{ asset('storage/dokumen_sertifikat/' . $sertifikat->dokumen_sertifikat) }}" target="_blank">
                                            <i class="bi bi-file-earmark-pdf-fill" style="font-size: 24px; color: red;"></i> 
                                        </a>
                            @else
                                        <span>No Dokumen</span>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('admin/sertifikat/semua') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
        </div>
</body>
</html>
