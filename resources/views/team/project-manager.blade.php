@include('pages/header')
@include('pages/navbar')
<div class="max-w-6xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-center text-blue-600 mb-8">
    Daftar Manager
    </h2>

    <!-- Search Form -->
    <form action="{{ route('manager') }}" method="GET" class="mb-6">
      <div class="flex flex-col md:flex-row gap-4">
        <input type="text" name="search" placeholder="Cari proyek..." class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ request()->get('search') }}">
        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Cari</button>
      </div>
    </form>

    <!-- Table -->
    <div class="overflow-x-auto shadow-lg rounded-lg bg-white">
      <table class="w-full table-auto border-collapse">
        <thead class="bg-blue-600 text-white">
          <tr class="text-center">
            <th class="px-4 py-3">No</th>
            <th class="px-4 py-3">Nama</th>
            <th class="px-4 py-3">Jabatan</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($jabatan as $jabatans)
          <tr class="border-t hover:bg-gray-100 text-center">
            <td class="px-4 py-2">{{ $loop->index + 1 }}</td> <!-- ID Urut -->
            <td class="px-4 py-2 text-left">{{ $jabatans->nama_pekerja }}</td>
            <td class="px-4 py-2 text-left">{{ $jabatans->jabatan_pekerja }}</td>
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
      {{ $jabatan->appends(['search' => request()->get('search')])->links('pagination::tailwind') }}
    </div>
  </div>
@include('pages/footer')