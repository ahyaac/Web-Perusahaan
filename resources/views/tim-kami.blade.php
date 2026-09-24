<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instalasi - PT. Mardika Sarana Engineering</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100">
  @include('pages/header')
  @include('pages/navbar')

  <header class="relative bg-cover bg-center h-64" style="background-image: url('/images/instalasi1.jpg');">
    <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
      <h1 class="text-white text-4xl font-bold">TIM MARDIKA SARANA ENGINEERING</h1>
    </div>
  </header>

  <div class="container mx-auto py-12 px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="md:col-span-2">
      <img src="/images/timmse.jpg" alt="Meeting" class="w-full rounded-lg shadow-lg">
    </div>

    <div>
      <h2 class="text-2xl font-semibold text-[#002349] mb-4">Halaman</h2>
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

  

  <div class="flex flex-col items-center space-y-4">
   @if ($struktural && $struktural->gambar_struktural)
        <div class="flex justify-center">
            <img src="{{ asset('storage/foto_struktural/' . $struktural->gambar_struktural) }}"
                alt="Struktur Organisasi"
                class="rounded-lg shadow-lg w-full max-w-5xl object-contain">
        </div>
    @else
        <p class="text-center text-gray-600">Struktur organisasi belum tersedia.</p>
    @endif

  </div>


@include('pages/footer')
</body>
</html>