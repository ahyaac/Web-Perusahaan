<!DOCTYPE html>
<html lang="id">
<head>
    @include('admin.layouts.header')
</head>
<body>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
            <h2 class="mb-5">Tambah Pekerja</h2>

            <form action="{{ route('admin/pekerja/simpan') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white rounded shadow-sm">
                @csrf

                <!-- Row 1: Nama, NIK, Foto -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="nama_pekerja">Nama Karyawan</label>
                        <input type="text" name="nama_pekerja" id="nama_pekerja" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="nik_pekerja">NIK Karyawan</label>
                        <input type="text" name="nik_pekerja" id="nik_pekerja" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control" required>
                    </div>
                </div>

                <!-- Row 2: Alamat, Tanggal Lahir, Jenis Kelamin -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <!-- Row 3: Tanggal Masuk, Level Kerja, Status -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="tgl_masuk">Tanggal Masuk</label>
                        <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="id_levelkerja">Level Kerja</label>
                         <select name="id_levelkerja" id="id_levelkerja" class="form-control" required>
                            @foreach ($level as $jabatan)
                                <option value="{{ $jabatan->id_levelkerja }}">{{ $jabatan->jabatan_pekerja }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-md-4">
                        <label for="status">Status Karyawan</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="tetap">Tetap</option>
                            <option value="tidak-tetap">Tidak Tetap</option>
                        </select>
                    </div>
                </div>

                <!-- Row 4: Pendidikan -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="pendidikan">Pendidikan</label>
                        <select name="pendidikan" id="pendidikan" class="form-control" required>
                            <option value="tidak-sekolah">Tidak Sekolah</option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sltp">SLTP</option>
                            <option value="mts">MTS</option>
                            <option value="sma">SMA</option>
                            <option value="slta">SLTA</option>
                            <option value="smea">SMEA</option>
                            <option value="stm">STM</option>
                            <option value="smk">SMK</option>
                            <option value="diploma-3">Diploma-3</option>
                            <option value="strata-1">Strata-1</option>
                            <option value="strata-2">Strata-2</option>
                            <option value="strata-3">Strata-3</option>
                        </select>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin/pekerja/semua') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
</body>
</html>
