<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang MSE - PT. Mardika Sarana Engineering</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>
    html {
        scroll-behavior: smooth;
    }
  </style>
</head>
<body class="bg-gray-100">
    @include('pages/header')
    @include('pages/navbar')
  <header class="relative bg-cover bg-center h-64" style="background-image: url('/images/instalasi1.jpg');">
    <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
      <h1 class="text-white text-4xl font-bold">TENTANG MARDIKA SARANA ENGINEERING</h1>
    </div>
  </header>
  <div class="container mx-auto py-12 px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
  <div class="md:col-span-2">
    <img src="/images/aboutmse.jpg" alt="Meeting" class="w-full rounded-lg shadow-lg mb-4">
    <p class="text-gray-700 text-justify">
      <strong class="text-[#DA241A]">PT. Mardika Sarana Engineering (MSE)</strong> adalah perusahaan yang bergerak di bidang konstruksi & pekerjaan elektrikal, 
      berfokus pada penyediaan solusi kelistrikan yang andal, efisien, dan sesuai standar keselamatan nasional maupun internasional.
      <br>Berdiri sejak tahun 1982, MSE telah berkembang menjadi mitra terpercaya dalam berbagai proyek 
      infrastruktur, industri, komersial, dan pemerintahan. Serta, dalam setiap kerja sama, kami mengedepankan koordinasi yang solid dan integritas lintas disiplin, dengan melibatkan tenaga ahli profesional dan berpengalaman dalam menangani proyek-proyek berskala besar.
    </p>
  </div>

  <div class="flex flex-col gap-8">
    <div class="bg-gradient-to-r from-blue-50 to-blue-100 text-center p-6 shadow-md rounded-lg">
      <img src="/images/timmse.jpg" alt="Tim Kami" 
           class="w-full h-40 object-cover rounded-md transition-transform duration-300 hover:rotate-3 hover:scale-105">
      <h3 class="text-xl font-bold text-[#002349] mt-4">TIM KAMI</h3>
      <p class="text-[#000000] text-sm">
        Kami berkomitmen untuk terus meningkatkan kinerja, menghadirkan inovasi, dan memberikan hasil kerja yang melebihi ekspektasi.
      </p>
      <a href="{{ route('tim-kami') }}" class="inline-block mt-4 px-4 py-2 border-2 border-[#002349] text-[#002349] font-semibold rounded-lg hover:bg-gray-900 hover:text-white transition duration-300 ease-in-out shadow-md text-sm">READ MORE</a>
    </div>
    <div class="bg-gradient-to-r from-blue-50 to-blue-100 text-center p-6 shadow-md rounded-lg">
      <img src="/images/korporasi.jpg" alt="Nilai Korporasi" 
           class="w-full h-40 object-cover rounded-md transition-transform duration-300 hover:rotate-3 hover:scale-105">
      <h3 class="text-xl font-bold text-[#002349] mt-4">LEGALITAS</h3>
      <p class="text-[#000000] text-sm">
        Komitmen kami terhadap kepatuhan hukum adalah bagian dari upaya untuk memberikan layanan terbaik dan memastikan kelangsungan operasional yang aman dan terpercaya.
      </p>
      <a href="{{ route('legalitas') }}" class="inline-block mt-4 px-4 py-2 border-2 border-[#002349] text-[#002349] font-semibold rounded-lg hover:bg-gray-900 hover:text-white transition duration-300 ease-in-out shadow-md text-sm">READ MORE</a>
    </div>
  </div>
</div>

<section class="bg-[#FFFFFF] text-[#000000] py-16 px-6 md:px-12 grid md:grid-cols-3 gap-8">
  <div class="space-y-12 md:col-span-2">
    <div class="flex items-start gap-4">
      <div class="text-[#DA241A] text-3xl pt-1">
        <i class="fas fa-lightbulb"></i>
      </div>
      <div>
        <h3 class="text-lg text-[#002349] font-bold uppercase">Visi Kami</h3>
        <p class="text-m text-[#000000] mt-3 text-justify">
          Menjadi perusahaan konstruksi elektrikal nasional yang unggul dalam keandalan, inovasi, dan tanggung jawab sosial, serta mampu memberikan kontribusi nyata terhadap pembangunan infrastruktur kelistrikan yang aman, efisien, dan berkelanjutan.
        </p>
      </div>
    </div>

    <div class="flex items-start gap-4">
      <div class="text-[#DA241A] text-3xl pt-1">
        <i class="fas fa-bolt"></i>
      </div>
      <div>
        <h3 class="text-lg text-[#002349] font-bold uppercase">Misi Kami</h3>
        <ul class="list-disc list-inside text-m text-[#000000] mt-3 text-justify space-y-1">
          <li>Memberikan layanan instalasi dan konstruksi elektrikal yang memenuhi standar keselamatan dan mutu, termasuk sertifikasi ISO dan peraturan teknis nasional.</li>
          <li>Menyelesaikan setiap proyek dengan profesionalisme, ketepatan waktu, dan komitmen terhadap kepuasan pelanggan.</li>
          <li>Mendorong penggunaan teknologi terkini untuk menciptakan sistem kelistrikan yang modern dan hemat energi.</li>
          <li>Berperan aktif dalam kegiatan sosial dan lingkungan sebagai bagian dari tanggung jawab perusahaan terhadap masyarakat.</li>
          <li>Membangun budaya kerja yang positif, kolaboratif, dan mendukung pengembangan kompetensi karyawan secara berkelanjutan.</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col justify-between">
    <div>
      <p class="text-lg text-[#002349] font-semibold uppercase">Komitmen Kami</p>
      <h3 class="text-l font-bold text-[#002349] leading-snug mt-2">
        Kami Berkomitmen untuk:
      </h3>
      <ul class="list-disc list-inside text-sm text-[#000000] mt-4 text-justify space-y-1">
        <li>Menyediakan layanan yang berkualitas tinggi dengan penerapan standar ISO dan sistem manajemen mutu yang konsisten.</li>
        <li>Menjaga keselamatan dan kesehatan kerja melalui pelatihan rutin serta penerapan prosedur kerja yang aman.</li>
        <li>Menumbuhkan budaya kerja yang jujur, terbuka, dan saling menghargai dalam setiap lini operasional.</li>
        <li>Mengin­tegrasikan nilai-nilai keberlanjutan dalam setiap kegiatan, termasuk efisiensi energi.</li>
        <li>Menjalin hubungan jangka panjang dengan klien dan mitra melalui komunikasi yang transparan dan solusi yang dapat diandalkan.</li>
        <li>Berkontribusi pada kesejahteraan masyarakat sekitar melalui program tanggung jawab sosial perusahaan.</li>
      </ul>
    </div>
  </div>
</section>
@include('pages/footer')
</body>
</html>