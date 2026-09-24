<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perawatan - PT. Mardika Sarana Engineering</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100">
  @include('pages/header')
  @include('pages/navbar')
    <header class="relative bg-cover bg-center h-64" style="background-image: url('/images/pb1.jpg');">
    <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
      <h1 class="text-white text-4xl font-bold">PERAWATAN DAN PERBAIKAN</h1>
    </div>
    </header>
    <div class="container mx-auto py-12 px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="md:col-span-2">
      <img src="/images/pb2.jpg" alt="Meeting" class="w-full rounded-lg shadow-lg">
    </div>

    <div>
      <h2 class="text-2xl font-semibold text-[#002349] mb-4">Services</h2>
      <ul class="space-y-2 text-[#957C3D]">
      <li class="cursor-pointer text-[#000000] hover:text-[#957c3d]" onclick="changeColor(this)">
            <a href="{{ route('instalasi') }}" class="block w-full">&#10148; INSTALASI DAN KONSTRUKSI</a>
        </li>
        <li class="cursor-pointer text-[#000000] hover:text-[#957c3d]" onclick="changeColor(this)">
            <a href="{{ route('perawatan-perbaikan') }}" class="block w-full">&#10148; PERAWATAN DAN PERBAIKAN</a>
        </li>
        <li class="cursor-pointer text-[#000000] hover:text-[#957c3d]" onclick="changeColor(this)">
            <a href="{{ route('pengujian') }}" class="block w-full">&#10148; INSPEKSI, PENGUJIAN DAN KOMISIONING</a>
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
          Contact us at PT. Mardika Sarana Engineering office to you or submit a business inquiry online.
        </p>
        <a href="{{ route('contact-us') }}" class="inline-block mt-2 px-3 py-1 border-2 border-[#002349] text-[#002349] font-semibold rounded-lg hover:bg-gray-900 hover:text-white transition duration-300 ease-in-out shadow-md">
          CONTACT US
        </a>
      </div>
    </div>
    </div>
    <div class="container mx-auto px-6 md:px-12 text-gray-700 text-center md:text-left mt-4 mb-8">
        <p class="text-gray-700 text-justify mb-4">
        <span class="text-[#000000]">
        Apakah Anda sedang mencari jasa pemeliharaan dan perbaikan peralatan elektrikal dengan tarif hemat? Mardika Sarana Engineering bisa menjadi pilihan tepat Anda dalam melayani segala kebutuhan jasa pemeliharaan dan perbaikan peralatan elektrikal di Surabaya Jawa Timur dan bisa cover untuk wilayah seluruh Indonesia ☑
        </span>
        </p>
        <p class="text-gray-700 text-justify">
        <span class="text-[#000000]">
        Jasa Pemeliharaan dan Perbaikan yang kami sediakan untuk Anda meliputi : jasa pemeliharaan peralatan elektrikal, jasa pemeliharaan trafo / transformator, jasa perbaikan peralatan elektrikal, jasa perbaikan trafo / transformator dan lain-lain, disesuaikan dengan permintaan.
        Dalam setiap proyek, kami mengutamakan inovasi, keselamatan, dan efisiensi energi. Didukung oleh teknologi terkini dan tim ahli yang berpengalaman, kami siap mewujudkan proyek impian Anda dengan hasil optimal, tepat waktu, dan sesuai anggaran. Pilih PT. Mardika Sarana Engineering untuk solusi perawatan dan perbaikan elektrikal yang terpercaya dan profesional.
        </span>
        </p>
    </div>
    @include('pages/footer')
</body>
</html>