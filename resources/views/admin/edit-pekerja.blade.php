<!DOCTYPE html>
<html lang="id">
<head>
@include('admin.layouts.header')
<body>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- Main Content -->
        <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
            <h2 class="mb-5">Edit Pekerja</h2>
                <form action="{{ route('admin/pekerja/update', $pekerja->id_pekerja) }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white rounded shadow-sm">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nama_pekerja">Nama Karyawan</label>
                            <input type="text" name="nama_pekerja" id="nama_pekerja"  class="form-control" value="{{ $pekerja->nama_pekerja }}" required>
                        </div>
                        <div class="col">
                            <label for="nik_pekerja">Nik Karyawan</label>
                            <input type="text" name="nik_pekerja" id="nik_pekerja"  class="form-control" value="{{ $pekerja->nik_pekerja }}" required>
                        </div>
                        <div class="col">
                            <label for="foto">Logo</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                            <small class="text-muted">Kosongkan jika tidak ingin mengganti</small>

                            @if ($pekerja->foto_pekerja)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/foto_pekerja/' . $pekerja->foto_pekerja) }}" alt="Logo Lama" width="120">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $pekerja->alamat }}" required>
                        </div>
                        <div class="col">
                            <label for="tgl_lahir">Tgl Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"  value="{{ $pekerja->tgl_lahir }}" required>
                        </div>
                        <div class="col">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                <option value="laki-laki" {{ $pekerja->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="perempuan" {{ $pekerja->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="tgl_masuk">Tgl Masuk</label>
                            <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control" value="{{ $pekerja->tgl_masuk }}" required>
                        </div>
                        <div class="col">
                            <label for="id_levelkerja">Level Kerja</label>
                            <select name="id_levelkerja" id="id_levelkerja" class="form-control" required>
                                @foreach ($level as $jabatan)
                                    <option value="{{ $jabatan->id_levelkerja }}" {{ $jabatan->id_levelkerja == $pekerja->level_pekerja ? 'selected' : '' }} >{{ $jabatan->jabatan_pekerja}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="status">Status Karyawan</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="tetap" {{ $pekerja->status_pekerja == 'tetap' ? 'selected' : '' }}>Tetap</option>
                                <option value="tidak-tetap" {{ $pekerja->status_pekerja == 'tidak-tetap' ? 'selected' : '' }}>Tidak Tetap</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="pendidikan">Pendidikan</label>
                            <select name="pendidikan" id="pendidikan" class="form-control" required>
                                @php
                                    $pendidikanList = ['tidak-sekolah' => 'Tidak Sekolah', 'sd' => 'SD', 'smp' => 'SMP',
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
                                @foreach($pendidikanList as $key => $label)
                                    <option value="{{ $key }}" {{ $pekerja->pendidikan == $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <a href="{{ route('admin/pekerja/semua') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
        </div>
</body>
</html>
