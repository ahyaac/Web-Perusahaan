<!DOCTYPE html>
<html lang="id">
<head>
@include('admin.layouts.header')
<body>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- Main Content -->
        <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
            <h2 class="mb-5">Edit Jabatan</h2>
                <form action="{{ route('admin/jabatan/update', $jabatan->id_levelkerja) }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white rounded shadow-sm">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nama_jabatan">Nama Jabatan</label>
                            <input type="text" name="nama_jabatan" id="nama_jabatan" value="{{$jabatan->jabatan_pekerja}}" class="form-control" required>
                        </div>
                    </div>

                    <a href="{{ route('admin/jabatan/semua') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
        </div>
</body>
</html>
