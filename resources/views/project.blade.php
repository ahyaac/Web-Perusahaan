<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maintenance - PT. Mardika Sarana Engineering</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="bg-gray-100 min-h-screen">

  @include('pages.header')
  @include('pages.navbar')

  <div class="max-w-6xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-center text-[#002349] mb-8">
      @isset($namaBidang)
          Nama Bidang: {{ $namaBidang }}
      @else
          Halaman Proyek
      @endisset
    </h2>

    <!-- Form Pencarian -->
    <form action="{{ route('/project/semua') }}" method="GET" class="mb-6">
      <div class="flex flex-col md:flex-row gap-4">
        <input type="text" name="search" placeholder="Cari proyek..." class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-900" value="{{ request()->get('search') }}">
        <button type="submit" class="px-6 py-2 bg-[#002349] text-white rounded-lg hover:bg-blue-900 transition">Cari</button>
      </div>
    </form>

    <!-- Tabel Proyek -->
    <div class="overflow-x-auto shadow-lg rounded-lg bg-white p-4">
      <table class="table-fixed w-full divide-y divide-gray-200 text-sm text-center">
      <thead class="bg-white text-[#002349] border-b-2 border-[#002349] text-sm">
        <tr>
            <th class="px-2 py-2">Nomor</th>
            <th class="px-2 py-2">Nama Proyek</th>
            <th class="px-2 py-2">No Kontrak</th>
            <th class="px-2 py-2">Nilai Proyek</th>
            <!-- Lokasi Proyek -->
            <th class="relative px-2 py-2 text-[#002349] whitespace-nowrap group">
              <div class="flex items-center justify-center gap-1 font-semibold">
                Lokasi 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </div>
              <div class="absolute left-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg z-50 hidden group-hover:block max-h-60 overflow-y-auto">
                <a href="{{ route('/project/semua', array_merge(request()->except('page'), ['lokasi' => null])) }}"
                  class="block px-4 py-2 hover:bg-gray-100 text-sm">
                  All
                </a>
                @foreach ($lokasiList as $lokasi)
                  <a href="{{ route('/project/semua', array_merge(request()->except('page'), ['lokasi' => $lokasi])) }}"
                    class="block px-4 py-2 hover:bg-gray-100 text-sm">
                    {{ $lokasi }}
                  </a>
                @endforeach
              </div>
            </th>

            <th class="px-2 py-2">Pemilik Proyek (Klien)</th>
            <!-- Tgl Mulai -->
            <th class="relative px-2 py-2 text-[#002349] whitespace-nowrap group">
              <div class="flex items-center justify-center gap-1 font-semibold">
                Tgl Mulai
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </div>
              <div class="absolute left-0 mt-2 w-40 bg-white border border-gray-300 rounded-md shadow-lg z-50 hidden group-hover:block max-h-60 overflow-y-auto">
                <a href="{{ route('/project/semua', array_merge(request()->except('page'), ['tahun_mulai' => null])) }}"
                  class="block px-4 py-2 hover:bg-gray-100 text-sm">
                  All
                </a>
                @foreach ($tahunMulaiList as $tahun)
                  <a href="{{ route('/project/semua', array_merge(request()->except('page'), ['tahun_mulai' => $tahun])) }}"
                    class="block px-4 py-2 hover:bg-gray-100 text-sm">
                    {{ $tahun }}
                  </a>
                @endforeach
              </div>
            </th>

            <!-- Tgl Selesai -->
            <th class="relative px-2 py-2 text-[#002349] whitespace-nowrap group">
              <div class="flex items-center justify-center gap-1 font-semibold">
                Tgl Selesai
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </div>
              <div class="absolute left-0 mt-2 w-40 bg-white border border-gray-300 rounded-md shadow-lg z-50 hidden group-hover:block max-h-60 overflow-y-auto">
                <a href="{{ route('/project/semua', array_merge(request()->except('page'), ['tahun_selesai' => null])) }}"
                  class="block px-4 py-2 hover:bg-gray-100 text-sm">
                  All
                </a>
                @foreach ($tahunSelesaiList as $tahun)
                  <a href="{{ route('/project/semua', array_merge(request()->except('page'), ['tahun_selesai' => $tahun])) }}"
                    class="block px-4 py-2 hover:bg-gray-100 text-sm">
                    {{ $tahun }}
                  </a>
                @endforeach
              </div>
            </th>

            <th class="px-2 py-2">No Bast</th>
            <!-- Dropdown Bidang -->
            <th class="relative px-4 py-2 text-[#002349] whitespace-nowrap group">
                <div class="flex items-center justify-center gap-1 font-semibold">
                    Bidang
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <!-- Dropdown yang muncul saat hover -->
                <div class="absolute left-0 mt-2 w-48 max-h-60 overflow-y-auto bg-white border border-gray-300 rounded-md shadow-lg z-50 hidden group-hover:block">
                    <a href="{{ route('/project/semua', array_merge(request()->except('page'), ['bidang' => null])) }}"
                    class="block px-4 py-2 hover:bg-gray-100 text-sm">
                    All
                    </a>
                    @foreach ($bidangList as $bidang)
                    <a href="{{ route('/project/semua', array_merge(request()->except('page'), ['bidang' => $bidang])) }}"
                        class="block px-4 py-2 hover:bg-gray-100 text-sm">
                        {{ $bidang }}
                    </a>
                    @endforeach
                </div>
            </th>
            <th class="px-2 py-2">Status</th>
            <!-- Dropdown Pekerja / Project Leader -->
            <th class="relative px-4 py-2 text-[#002349] whitespace-nowrap group">
                <div class="flex items-center justify-center gap-1 font-semibold">
                    Leader 
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <!-- Dropdown yang muncul saat hover -->
                <div class="absolute left-0 mt-2 w-48 max-h-60 overflow-y-auto bg-white border border-gray-300 rounded-md shadow-lg z-50 hidden group-hover:block">
                    <a href="{{ route('/project/semua', array_merge(request()->except('page'), ['pekerja' => null])) }}"
                    class="block px-4 py-2 hover:bg-gray-100 text-sm">
                    All
                    </a>
                    @foreach ($pekerjaList as $pekerja)
                    <a href="{{ route('/project/semua', array_merge(request()->except('page'), ['pekerja' => $pekerja])) }}"
                        class="block px-4 py-2 hover:bg-gray-100 text-sm">
                        {{ $pekerja }}
                    </a>
                    @endforeach
                </div>
            </th>    
        </tr>
      </thead>
        <tbody class="divide-y divide-gray-100">
          @forelse ($projects as $project)
            <tr class="hover:bg-gray-50">
              <td class="px-2 py-2">{{ ($projects->currentPage() - 1) * $projects->perPage() + $loop->iteration }}</td>
              <td class="text-left px-2 py-2">{{ $project->nama_proyek }}</td>
              <td class="px-2 py-2">{{ $project->no_kontrak }}</td>
              <td class="px-2 py-2">Rp {{ number_format($project->nominal, 0, ',', '.') }}</td>
              <td class="px-2 py-2">{{ $project->lokasi_klien }}</td>
              <td class=" px-2 py-2">{{ $project->nama_klien }}</td>
              <td class="px-2 py-2">{{ \Carbon\Carbon::parse($project->tanggal_mulai)->format('d M Y') }}</td>
              <td class="px-2 py-2">{{ \Carbon\Carbon::parse($project->tanggal_selesai)->format('d M Y') }}</td>
              <td class="px-2 py-2">{{ $project->no_brast }}</td>
              <td class="px-2 py-2">{{ $project->nama_bproyek }}</td>              
              <td class="px-2 py-2">
                <span class="px-2 py-1 rounded-full text-white {{ $project->status == 'Aktif' ? 'bg-green-500' : 'bg-yellow-500' }}">
                  {{ $project->status }}
                </span>
              </td>
              <td class="px-2 py-2">
                  {{ $project->nama_pekerja }}
              </td>
              
            </tr>
          @empty
            <tr>
              <td colspan="12" class="text-center py-4 text-gray-500">Tidak ada proyek ditemukan.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-center">
      {{ $projects->appends(request()->query())->links('pagination::tailwind') }}
    </div>
  </div>

  @include('pages.footer')

</body>
</html>
