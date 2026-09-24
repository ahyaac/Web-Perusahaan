<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Statistik Proyek</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (optional, jika pakai icon) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    @include('admin.layouts.header') {{-- Tambahkan jika masih dibutuhkan --}}
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <div class="container">
                <h2 class="mb-4">Statistik Proyek</h2>

                <!-- Statistik Ringkas -->
                <div class="row mb-4">
                    @php
                        $cards = [
                            ['title' => 'Total Proyek', 'value' => $totalProyek, 'color' => 'primary'],
                            ['title' => 'Proyek Aktif', 'value' => $proyekSelesai, 'color' => 'success'],
                            ['title' => 'Proyek Tidak Aktif', 'value' => $proyekProses, 'color' => 'danger'],
                            ['title' => 'Total Pekerja', 'value' => $totalPekerja, 'color' => 'warning'],
                        ];
                    @endphp
                    @foreach ($cards as $card)
                    <div class="col-md-3">
                        <div class="card text-white bg-{{ $card['color'] }} shadow" style="height: 120px;">
                            <div class="card-body p-3">
                                <h6 class="mb-1">{{ $card['title'] }}</h6>
                                <h4>{{ $card['value'] }}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Grafik Statistik -->
                <div class="card shadow mb-4">
                    <div class="card-header bg-[#002349] text-white">
                        Statistik Proyek per Bulan
                    </div>
                    <div class="card-body" style="height: 320px;">
                        <canvas id="chartProyek"></canvas>
                    </div>
                </div>

                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('chartProyek').getContext('2d');
        const chartProyek = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($bulanLabels) !!},
                datasets: [{
                    label: 'Jumlah Proyek',
                    data: {!! json_encode($jumlahProyekPerBulan) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>