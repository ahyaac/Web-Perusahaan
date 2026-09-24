<!DOCTYPE html>
<html lang="id">
<head>
@include('admin.layouts.header')
<body>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- Main Content -->
        <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
            <h2 class="mb-5">Edit Equipment</h2>
                <form action="{{ route('admin/equipment/update', $equipment->id_equipment) }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white rounded shadow-sm">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col">
                            <label for="namaquipment">Nama Equipment</label>
                            <input type="text" name="namaquipment" id="namaquipment" value="{{ $equipment->namaquipment }}" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="gambarquipment">Gambar Equipment</label>
                            <input type="file" name="gambarquipment" id="gambarquipment" class="form-control">
                            <small class="text-muted">Kosongkan jika tidak ingin mengganti</small>

                            @if ($equipment->gambarquipment)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/foto_equipment/' . $equipment->gambarquipment) }}" alt="Logo Lama" width="120">
                                </div>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('admin/equipment/semua') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
        </div>
</body>
</html>
