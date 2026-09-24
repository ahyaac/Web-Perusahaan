<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Legalitas - PT. Mardika Sarana Engineering</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
</head>
<body class="bg-gray-100">

  @include('pages.header')
  @include('pages.navbar')

  <header class="relative bg-cover bg-center h-64" style="background-image: url('/images/instalasi1.jpg');">
    <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
      <h1 class="text-white text-4xl font-bold">LEGALITAS</h1>
    </div>
  </header>

  <div class="container mx-auto py-12 px-6 md:px-12 md:flex md:gap-8">

    <div class="md:w-2/3 space-y-8">

      {{-- Form pencarian --}}
      <form method="GET" action="{{ route('legalitas') }}" class="mb-6">
        <input
          type="text"
          name="search"
          placeholder="Cari sertifikat..."
          value="{{ request('search') }}"
          class="px-4 py-2 border border-gray-300 rounded w-full md:w-1/2"
        />
      </form>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        @forelse ($sertifikat as $item)
          <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <div class="flex justify-center mb-4">
              <div class="w-16 h-16 bg-[#957C3D] rounded-full flex items-center justify-center">
                <i class="bi bi-file-earmark-text text-2xl text-white"></i>
              </div>
            </div>
            <h3 class="text-lg font-semibold">{{ $item->nama_sertifikat }}</h3>
            <p class="text-gray-600 text-sm">{{ $item->kode_sertifikat }}</p>
            <br>
            {{ $item->deskripsi ?? '-' }}

            {{-- Link untuk buka PDF --}}
            @if ($item->dokumen_sertifikat)
              <div class="mt-4">
                <a href="{{ asset('storage/dokumen_sertifikat/' . $item->dokumen_sertifikat) }}" target="_blank" class="text-[#957C3D] underline hover:text-[#002349]">
                  <i class="bi bi-file-earmark-pdf-fill"></i> Lihat Dokumen PDF
                </a>
              </div>
            @endif
          </div>
        @empty
          <p class="col-span-2 text-center text-gray-500">Tidak ada sertifikat ditemukan.</p>
        @endforelse

      </div>

      
        <!-- Pagination -->
        <div class="mt-6 flex justify-center">
          {{ $sertifikat->links('pagination::tailwind') }}
        </div>

    </div>

    <div class="md:w-1/3 mt-12 md:mt-0">
      <h2 class="text-2xl font-semibold text-[#002349] mb-2">Halaman</h2>
      <ul class="space-y-2 text-[#957C3D]">
        <li class="cursor-pointer text-[#000000] hover:text-[#957C3D]">
          <a href="{{ route('tentang-mse') }}" class="block w-full">&#10148; TENTANG MSE</a>
        </li>
        <li class="cursor-pointer text-[#000000] hover:text-[#957C3D]">
          <a href="{{ route('tim-kami') }}" class="block w-full">&#10148; TIM KAMI</a>
        </li>
        <li class="cursor-pointer text-[#000000] hover:text-[#957C3D]">
          <a href="{{ route('legalitas') }}" class="block w-full">&#10148; LEGALITAS</a>
        </li>
        <li class="cursor-pointer text-[#000000] hover:text-[#957C3D]">
          <a href="{{ route('klien') }}" class="block w-full">&#10148; KLIEN MSE</a>
        </li>
        <li class="cursor-pointer text-[#000000] hover:text-[#957C3D]">
          <a href="{{ route('equipment.semua') }}" class="block w-full">&#10148; EQUIPMENT</a>
        </li>
      </ul>

      <div class="mt-6 p-4 border border-[#957C3D] rounded-lg shadow-lg bg-[#F4F4F4]">
        <h3 class="text-lg font-semibold text-[#002349] mb-2 border-b border-[#957C3D] pb-2">Jam Operasional</h3>
        <p class="text-[#002349] border-b border-[#957C3D] pb-1">
          <strong>Senin - Jumat:</strong> <span style="color: #957C3D;">08:00 - 17:00 WIB</span>
        </p>
        <p class="text-[#002349]">
          <strong>Sabtu - Minggu & Libur Nasional:</strong> <span style="color: #957C3D;">Tutup</span>
        </p>
      </div>

      <div class="mt-6 p-4 border border-[#957C3D] rounded-lg shadow-lg bg-[#F4F4F4] text-[#002349]">
        <h3 class="text-lg font-semibold mb-2">Do you have any questions?</h3>
        <p class="text-sm mb-3 text-[#957C3D]">
          Contact us at PT. Mardika Sarana Engineering office nearest to you or submit a business inquiry online.
        </p>
        <a href="{{ route('contact-us') }}" class="inline-block mt-2 px-3 py-1 border-2 border-[#002349] text-[#002349] font-semibold rounded-lg hover:bg-gray-900 hover:text-white transition duration-300 ease-in-out shadow-md">
          CONTACT US
        </a>
      </div>
    </div>

  </div>

  @include('pages.footer')

</body>
</html>
