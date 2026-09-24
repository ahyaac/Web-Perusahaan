<!DOCTYPE html>
<html lang="id">
@include('admin.layouts.header')

<body>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
            <h2 class="mb-4">Detail Pekerja</h2>

            <div class="card shadow border-0 mb-4">
                <div class="card-body d-flex flex-md-row flex-column">
                    <!-- Logo Klien -->
                    <div class="text-center me-md-4 mb-4 mb-md-0" style="flex: 0 0 250px;">
                        @if ($pekerja->foto_pekerja)
                            <img src="{{ asset('storage/foto_pekerja/' . $pekerja->foto_pekerja) }}"
                                 alt="Logo Klien"
                                 class="img-fluid rounded shadow"
                                 style="max-height: 300px; height: 300px; object-fit: contain;">
                        @else
                            <div class="text-muted">Tidak ada logo</div>
                        @endif
                    </div>

                    <!-- Informasi Proyek -->
                    <div class="flex-fill">
                        <h4 class="text-primary mb-3">{{ $pekerja->nama_pekerja }}</h4>
                        <p><strong>Nik:</strong> {{ $pekerja->nik_pekerja }}</p>
                        <p><strong>Alamat:</strong> {{ $pekerja->alamat }}</p>
                        <p><strong>Tgl Lahir:</strong> {{ $pekerja->tgl_lahir}}</p>
                        @php
                                    $statusList = [
                                        'laki-laki' => 'Laki-Laki',
                                        'perempuan' => 'Perempuan'
                                        ];
                        @endphp
                        <p><strong>Jenis kelamin:</strong> {{ $statusList[strtolower($pekerja->jenis_kelamin)] ?? $pekerja->jenis_kelamin }}</p>
                        <p><strong>Tgl Masuk:</strong> {{ $pekerja->tgl_masuk}}</p>
                        <p><strong>Jabatan:</strong>  {{ $pekerja->Levelpekerja->jabatan_pekerja ?? '-' }}</p>
                        @php
                                    $statusList = [
                                        'tetap' => 'Tetap',
                                        'tidak-tetap' => 'Tidak Tetap'
                                        ];
                        @endphp
                        <p><strong>Status:</strong> {{ $statusList[strtolower($pekerja->status_pekerja)] ?? $pekerja->status_pekerja }}</p>
                         @php
                                    $statusList = [
                                        'tidak sekolah' => 'Tidak Sekolah',
                                        'sd' => 'SD',
                                         'smp' => 'SMP',
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
                        <p> <strong>Pendidikan:</strong>
                            {{ $statusList[strtolower($pekerja->pendidikan)] ?? $pekerja->pendidikan }}
                        </P>
                        <!-- Tombol Kembali dan Edit Project -->
                        <div class="d-flex gap-2">
                            <a href="{{ route('admin/pekerja/semua') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>
                            <a href="{{ route('admin/pekerja/edit', $pekerja->id_pekerja) }}" class="btn btn-warning">
                                Edit Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
