<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Proyek - PT. Mardika Sarana Engineering</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 min-h-screen">

  @include('admin.layouts.header')
  
    @include('admin.layouts.sidebar')
    <div class="ml-[250px] px-6 py-8 w-full">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Data Proyek</h2>

      <div class="flex justify-between items-center mb-4">
        <a href="{{ route('admin/project/tambah-project') }}" class="btn btn-success">
          <i class="bi bi-plus-circle me-1"></i> Tambah Proyek
        </a>
        <form action="{{ route('admin/project/semua') }}" method="GET" class="flex space-x-2">
          <input type="text" name="search" placeholder="Cari proyek..." class="form-control" value="{{ request()->get('search') }}">
          <button type="submit"
                  class="px-4 py-2 bg-[#002349] text-white rounded hover:bg-blue-900">
            Cari
          </button>
        </form>
      </div>

       <div class="table-responsive shadow-lg rounded-lg bg-white p-3">
                <table class="table table-bordered table-hover align-middle text-center text-sm">
          <thead class="bg-white text-[#002349]">
            <tr>
                <th class="px-2 py-3">No</th>
                <th class="px-2 py-3 text-left">Nama Proyek</th>
                <th class="px-2 py-3">No Kontrak</th>
                <th class="px-2 py-3">Nilai</th>

                <!-- Dropdown Lokasi Proyek -->
                <th class="relative px-2 py-2 text-[#002349] whitespace-nowrap group">
                <div class="flex items-center justify-center gap-1 font-semibold text-sm cursor-pointer">
                    Lokasi Proyek
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="absolute left-0 mt-2 w-40 bg-white border border-gray-300 rounded-md shadow-lg z-50 hidden group-hover:block max-h-48 overflow-y-auto text-xs">
                    <a href="{{ route('admin/project/semua', array_merge(request()->except('page'), ['lokasi' => null])) }}"
                    class="block px-3 py-1.5 hover:bg-gray-100 text-[#002349]">
                    All
                    </a>
                    @foreach ($lokasiList as $lokasi)
                    <a href="{{ route('admin/project/semua', array_merge(request()->except('page'), ['lokasi' => $lokasi])) }}"
                        class="block px-3 py-1.5 hover:bg-gray-100 text-[#002349]">
                        {{ $lokasi }}
                    </a>
                    @endforeach
                </div>
                </th>


                <th class="px-2 py-3 text-left">Klien</th>
                <th class="px-2 py-3 text-left">Alamat & No.Telp Klien </th>

               <!-- Dropdown Tgl Mulai -->
                <th class="relative px-2 py-2 text-[#002349] whitespace-nowrap group">
                <div class="flex items-center justify-center gap-1 font-semibold text-sm cursor-pointer">
                    Tgl Mulai
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="absolute left-0 mt-2 w-32 bg-white border border-gray-300 rounded-md shadow-lg z-50 hidden group-hover:block max-h-48 overflow-y-auto text-xs">
                    <a href="{{ route('admin/project/semua', array_merge(request()->except('page'), ['tahun_mulai' => null])) }}"
                    class="block px-3 py-1.5 hover:bg-gray-100 text-[#002349]">
                    All
                    </a>
                    @foreach ($tahunMulaiList as $tahun)
                    <a href="{{ route('admin/project/semua', array_merge(request()->except('page'), ['tahun_mulai' => $tahun])) }}"
                        class="block px-3 py-1.5 hover:bg-gray-100 text-[#002349]">
                        {{ $tahun }}
                    </a>
                    @endforeach
                </div>
                </th>


               <!-- Dropdown Tgl Selesai -->
                <th class="relative px-2 py-2 text-[#002349] whitespace-nowrap group">
                <div class="flex items-center justify-center gap-1 font-semibold text-sm cursor-pointer">
                    Tgl Selesai
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="absolute left-0 mt-2 w-32 bg-white border border-gray-300 rounded-md shadow-lg z-50 hidden group-hover:block max-h-48 overflow-y-auto text-xs">
                    <a href="{{ route('admin/project/semua', array_merge(request()->except('page'), ['tahun_selesai' => null])) }}"
                    class="block px-3 py-1.5 hover:bg-gray-100 text-[#002349]">
                    All
                    </a>
                    @foreach ($tahunSelesaiList as $tahun)
                    <a href="{{ route('admin/project/semua', array_merge(request()->except('page'), ['tahun_selesai' => $tahun])) }}"
                        class="block px-3 py-1.5 hover:bg-gray-100 text-[#002349]">
                        {{ $tahun }}
                    </a>
                    @endforeach
                </div>
                </th>


                <th class="px-2 py-3">No BAST</th>
                <th class="px-2 py-3">Jenis Proyek</th>
                <th class="px-2 py-3">Status</th>
               <th class="relative px-2 py-2 text-[#002349] whitespace-nowrap group">
                  <div class="flex items-center justify-center gap-1 font-semibold text-sm cursor-pointer">
                    Leader
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                  </div>
                  <div class="absolute left-0 mt-2 w-48 max-h-60 overflow-y-auto bg-white border border-gray-300 rounded-md shadow-lg z-50 hidden group-hover:block text-xs">
                    <a href="{{ route('admin/project/semua', array_merge(request()->except('page'), ['pekerja' => null])) }}"
                      class="block px-3 py-1.5 hover:bg-gray-100 text-[#002349]">
                      All
                    </a>
                    @foreach ($pekerjaList as $pekerja)
                      <a href="{{ route('admin/project/semua', array_merge(request()->except('page'), ['pekerja' => $pekerja])) }}"
                        class="block px-3 py-1.5 hover:bg-gray-100 text-[#002349]">
                        {{ $pekerja }}
                      </a>
                    @endforeach
                  </div>
                </th>


                <th class="px-2 py-3">Aksi</th>
            </tr>
            </thead>

          <tbody class="divide-y divide-gray-100">
            @forelse($projects as $p)
              <tr class="hover:bg-gray-50">
               <td class="px-2 py-2">
                {{ ($projects->currentPage() - 1) * $projects->perPage() + $loop->iteration }}
              </td>
                <td class="px-2 py-2 text-left">{{ $p->nama_proyek }}</td>
                <td class="px-2 py-2">{{ $p->no_kontrak }}</td>
                <td class="px-2 py-2">Rp {{ number_format($p->nominal,0,',','.') }}</td>
                <td class="px-2 py-2">{{ $p->lokasi_klien }}</td>
                <td class="px-2 py-2 text-left"> {{ $p->nama_klien_klien ?? $p->nama_klien }}</td>
                <td class="px-2 py-2 text-left">{{ $p->alamat_klien }} </br> {{ $p->telp_klien }} </td>
                <td class="px-2 py-2">{{ \Carbon\Carbon::parse($p->tanggal_mulai)->format('d M Y') }}</td>
                <td class="px-2 py-2">{{ \Carbon\Carbon::parse($p->tanggal_selesai)->format('d M Y') }}</td>
                <td class="px-2 py-2">{{ $p->no_brast }}</td>
                <td class="px-2 py-2">{{ $p->nama_bproyek }}</td>
                <td class="px-2 py-2">
                  <span class="px-2 py-1 rounded-full text-white {{ $p->status=='Aktif'? 'bg-green-500':'bg-red-500' }}">
                    {{ $p->status }}
                  </span>
                </td>
                <td class="px-2 py-2">{{ $p->nama_pekerja }}</td>
                <td> 
                    <div class="d-flex justify-content-center gap-2">
                  <a href="{{ route('admin/project/detail', $p->id_proyek) }}" class="btn btn-info text-white btn-sm">
                    <i class="bi bi-eye me-1"></i> Lihat
                  </a>
                  <form action="{{ route('admin/project/hapus-project', $p->id_proyek) }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus proyek ini?');">
                    @csrf @method('DELETE')
                    <button type="submit"
                             class="btn btn-danger btn-sm">
                      <i class="bi bi-trash me-1"></i> Hapus
                    </button>
                  </form>
                </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="13" class="py-4 text-center text-gray-500">Tidak ada proyek ditemukan.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

        <div class="mt-4 d-flex justify-content-center">
        {{ $projects->appends(request()->query())->links('pagination::bootstrap-4') }}
      </div>
      <a href="{{ route('admin.dashboard') }}"
        class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
    </div>

</body>
</html>
