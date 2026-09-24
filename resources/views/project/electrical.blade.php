<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electrical - PT. Mardika Sarana Engineering</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100 min-h-screen">

  @include('pages.header')
  @include('pages.navbar')

  <div class="max-w-6xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-center text-[#DA241A] mb-8">
    @isset($namaBidang)
        Nama Bidang: {{ $namaBidang }}
    @else
        Halaman Electrical
    @endisset
    </h2>

    <!-- Search Form -->
    <form action="{{ route('project/electrical') }}" method="GET" class="mb-6">
      <div class="flex flex-col md:flex-row gap-4">
        <input type="text" name="search" placeholder="Cari proyek..." class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ request()->get('search') }}">
        <button type="submit" class="px-6 py-2 bg-[#002349] text-white rounded-lg hover:bg-[#DA241A] transition">Cari</button>
      </div>
    </form>

    <!-- Table -->
    <div class="overflow-x-auto shadow-lg rounded-lg bg-white">
      <table class="w-full table-auto border-collapse">
        <thead class="bg-[#002349] text-white">
          <tr class="text-center">
            <th class="px-4 py-3">ID</th>
            <th class="px-4 py-3">Logo</th>
            <th class="px-4 py-3">Klien</th>
            <th class="px-4 py-3">Nama Proyek</th>
            <th class="px-4 py-3">No. Kontrak</th>
            <th class="px-4 py-3">Tanggal Mulai</th>
            <th class="px-4 py-3">Tanggal Selesai</th>
            <th class="px-4 py-3">Status</th>
            <th class="px-4 py-3">Project Leader</th>
            <th class="px-4 py-3">Bidang</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($projects as $project)
          <tr class="border-t hover:bg-gray-100 text-center">
            <td class="px-4 py-2">{{ $loop->index + 1 }}</td> <!-- ID Urut -->
            <td class="px-4 py-2 text-left">
                @if ($project->logo_klien) 
                    <img src="{{ asset('/storage/logo_klien/' . $project->logo_klien) }}" alt="Logo" class="w-16 h-16 object-contain mx-auto">
                @else
                    <span>No Logo</span>
                @endif
            </td>
            <td class="px-4 py-2 text-left">{{ $project->nama_klien }}</td>
            <td class="px-4 py-2 text-left">{{ $project->nama_proyek }}</td>
            <td class="px-4 py-2">{{ $project->no_kontrak }}</td>
            <td class="px-4 py-2">{{ \Carbon\Carbon::parse($project->tanggal_mulai)->format('d M Y') }}</td>
            <td class="px-4 py-2">{{ \Carbon\Carbon::parse($project->tanggal_selesai)->format('d M Y') }}</td>
            <td class="px-4 py-2">
              <span class="inline-block px-3 py-1 rounded-full text-white text-sm {{ $project->status == 'Aktif' ? 'bg-green-500' : 'bg-red-500' }}">
                {{ $project->status }}
              </span>
            </td>
            <td class="px-4 py-2">{{ $project->nama_pekerja }}</td>
            <td class="px-4 py-2">{{ $project->nama_bproyek }}</td>
          </tr>
          @empty
          <tr>
            <td colspan="8" class="text-center text-gray-500 py-4">Tidak ada proyek ditemukan.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-center">
      {{ $projects->appends(['search' => request()->get('search')])->links('pagination::tailwind') }}
    </div>
  </div>

  @include('pages.footer')

</body>
</html>
