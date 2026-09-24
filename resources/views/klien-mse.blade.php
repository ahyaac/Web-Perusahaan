<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klien - PT. Mardika Sarana Engineering</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100">

  @include('pages/header')
  @include('pages/navbar')

  <!-- Header -->
  <header class="relative bg-cover bg-center h-64" style="background-image: url('/images/instalasi1.jpg');">
    <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
      <h1 class="text-white text-4xl font-bold text-center px-4">KLIEN MARDIKA SARANA ENGINEERING</h1>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container mx-auto py-12 px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8">
    
    <!-- Daftar Klien -->
    <div class="md:col-span-2">
      <div class="bg-white shadow-md rounded-lg p-8">
        @foreach ($namaKlien as $klien)
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">{{ $klien->nama_klien }}</h3>
            <p class="text-gray-600 text-sm">{{ $klien->lokasi_klien }}</p>
          </div>
          @if (!$loop->last)
            <hr class="border-t border-gray-200">
          @endif
        @endforeach

        <!-- Pagination -->
        <div class="mt-6 flex justify-center">
          {{ $namaKlien->links('pagination::tailwind') }}
        </div>
      </div>
    </div>

    <!-- Sidebar -->
    <div>
      <h2 class="text-2xl font-semibold text-[#002349] mb-4">Halaman</h2>
      <ul class="space-y-2 text-[#957C3D]">
        <li><a href="{{ route('tentang-mse') }}" class="block w-full text-black hover:text-[#957C3D]">&#10148; TENTANG MSE</a></li>
        <li><a href="{{ route('tim-kami') }}" class="block w-full text-black hover:text-[#957C3D]">&#10148; TIM KAMI</a></li>
        <li><a href="{{ route('legalitas') }}" class="block w-full text-black hover:text-[#957C3D]">&#10148; LEGALITAS</a></li>
        <li><a href="{{ route('klien') }}" class="block w-full text-black hover:text-[#957C3D]">&#10148; KLIEN MSE</a></li>
        <li><a href="{{ route('equipment.semua') }}" class="block w-full text-black hover:text-[#957C3D]">&#10148; EQUIPMENT</a></li>
      </ul>

      <!-- Jam Operasional -->
      <div class="mt-6 p-4 border border-[#957C3D] rounded-lg shadow-lg bg-[#F4F4F4]">
        <h3 class="text-lg font-semibold text-[#002349] mb-2 border-b border-[#957C3D] pb-2">Jam Operasional</h3>
        <p class="text-[#002349] border-b border-[#957C3D] pb-1">
          <strong>Senin - Jumat:</strong> <span class="text-[#957C3D]">08:00 - 17:00 WIB</span>
        </p>
        <p class="text-[#002349]">
          <strong>Sabtu - Minggu & Libur Nasional:</strong> <span class="text-[#957C3D]">Tutup</span>
        </p>
      </div>

      <!-- Kontak -->
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

  @include('pages/footer')
</body>
</html>
