@include('pages/header')
@include('pages/navbar')
<body class="bg-gray-100">
    <section class="relative h-[600px] flex items-center bg-gradient-to-r from-blue-50 to-blue-100">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-6 md:px-12">
    <div class="md:w-1/2 text-left">
        <h1 class="text-5xl font-bold text-[#002349]">Industri</h1>
        <h1 class="text-5xl font-bold text-[#002349]">Konstruksi</h1>
        <p class="mt-4 text-lg font-medium text-justify">
            <span class="text-[#002349]">Kami Berkomitmen</span> <span class="text-[#957C3D]">untuk Memastikan Semua Pekerjaan</span>
            <span class="text-[#002349]">Dilakukan Sesuai Standar</span>
        </p>

        <p class="text-lg md:text-xl mt-2 font-semibold leading-relaxed text-justify">
            <span class="text-[#DA241A]">PT. Mardika Sarana Engineering</span> 
            <span class="text-[#957C3D]"> berdiri sejak tahun 1982, kami bergerak di bidang konstruksi dan pekerjaan kelistrikan di berbagai proyek di Indonesia.</span>
        </p>
    </div>

    <div class="md:w-1/2 flex justify-center">
        <img src="/images/rev.jpg" alt="Illustration" class="max-w-md md:max-w-lg">
    </div>
        </div>
    </section>

    <section class="relative  h-[750px] py-16 bg-white">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-6 md:px-12">

    <div class="relative w-full md:w-1/2 flex justify-center z-10">

    <div class="absolute -left-5 -top-5 w-[420px] h-[300px] bg-[#DA241A] opacity-50 rounded-lg rotate-3"></div>
    <div class="absolute -right-5 bottom-5 w-[320px] h-[220px] bg-yellow-500 opacity-50 rounded-lg -rotate-3"></div>        
    <img src="/images/K1.jpg" alt="Pekerja" class="relative w-[400px] rounded-lg shadow-lg z-10">
    </div>

    <div class="w-full md:w-1/2 md:pl-16 z-10">
    <h1 class="text-5xl font-bold text-[#002349]">Kebijakan Mutu<br>dan Sistem Mutu</h1>
        <p class="mt-4 text-gray-700 text-justify">
            <span class="text-xl font-semibold text-[#DA241A]">PT. Mardika Sarana Engineering</span> 
            <span class="text-[#000000]"> menganggap serius sistem mutu, prosedur, ITP, dll. dan memastikan bahwa semua pekerjaan dilakukan sesuai standar. 
            Untuk tujuan ini, kami telah menetapkan sistem mutu kami sendiri untuk memenuhi kebutuhan khusus. Lebih jauh, pada tahun 1997, 
            kami telah memenuhi syarat untuk memperoleh ISO sebagai standar manajemennya. Oleh karena itu, hal ini memberikan dorongan pada 
            produktivitas.</span>
        </p>

    <div class="mt-8 flex items-start">
    <img src="/images/PL.png" class="w-16 h-16 mr-4"> 
    <div>
    <h3 class="text-3xl font-semibold text-[#002349]">Kebijakan Mutu</h3>
        <p class="text-gray-700 text-justify">
            <span class="font-bold text-[#DA241A]">PT. Mardika Sarana Engineering</span> 
            <span class="text-[#000000]"> berkomitmen untuk memberikan kepuasan pelanggan dengan memberikan layanan 
            konstruksi tepat waktu dan berkualitas, sesuai standar dan memenuhi spesifikasi pelanggan.</span>
        </p>
    </div>
    </div>

    <div class="mt-6 flex items-start">
    <img src="/images/MT.png" class="w-16 h-16 mr-4"> 
    <div>
        <h3 class="text-3xl font-semibold text-[#002349]">Sistem Mutu</h3>
        <p class="text-gray-700 text-justify">
            <span class="font-bold text-[#DA241A]">PT. Mardika Sarana Engineering</span> 
            <span class="text-[#000000]"> merupakan perusahaan yang telah terakreditasi ISO-9001:2008 dan telah 
            tersertifikasi oleh Sistem Manajemen Mutu GLOBAL/UKAS (nomor registrasi 7630430150). Perusahaan ini 
            memiliki prosedur manajemen mutu yang lengkap dalam seluruh kegiatannya. Perusahaan ini menggunakan 
            prosedur mutu untuk seluruh pekerjaan konstruksi di lapangan dalam semua disiplin ilmu sipil, kelistrikan, dan instrumen.</span>
            </p>
    </div> 
    </section>

    <section class="relative bg-gradient-to-b from-blue-300 to-blue-50 pb-16 flex flex-col items-center justify-center text-center">
    <div class="bg-white h-16 w-full"></div>
        <h2 class="text-3xl font-bold text-[#002349] mt-12">KONSTRUKSI UMUM</h2>
        <p class="text-2xl font-bold text-[#DA241A]">PT. MARDIKA SARANA ENGINEERING</p>
    </section>
    <section class="container mx-auto px-6 md:px-12 py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="py-16 bg-gradient-to-r from-blue-50 to-blue-100 grid place-items-center text-center p-6 shadow-md rounded-lg">
        <img src="/images/aboutmse.jpg" alt="Tentang Kami" 
            class="w-full h-48 object-cover rounded-md transition-transform duration-300 hover:rotate-3 hover:scale-105">
        <h3 class="text-xl font-bold text-[#002349]">TENTANG MSE</h3>
        <p class="text-[#000000]">
            Kami menawarkan solusi konstruksi komprehensif untuk berbagai kebutuhan, baik individu, 
            perusahaan swasta, maupun instansi pemerintah.
        </p>
        <a href="{{ route('tentang-mse') }}" class="inline-block mt-4 px-6 py-3 border-2 border-[#002349] text-[#00000] font-semibold rounded-lg hover:bg-gray-900 hover:text-white transition duration-300 ease-in-out shadow-md">READ MORE</a>     
    </div>

    <div class="py-16 bg-gradient-to-r from-blue-50 to-blue-100 grid place-items-center text-center p-6 shadow-md rounded-lg">
        <img src="/images/timmse.jpg" alt="Tim Kami" 
            class="w-full h-48 object-cover rounded-md transition-transform duration-300 hover:rotate-3 hover:scale-105">
        <h3 class="text-xl font-bold text-[#002349]">TIM KAMI</h3>
        <p class="text-[#000000]">
            Kami berkomitmen untuk terus meningkatkan kinerja, menghadirkan inovasi, dan 
            memberikan hasil kerja yang melebihi ekspektasi.
        </p>
        <a href="{{ route('tim-kami') }}" class="inline-block mt-4 px-6 py-3 border-2 border-[#002349] text-[#000000] font-semibold rounded-lg hover:bg-gray-900 hover:text-white transition duration-300 ease-in-out shadow-md">READ MORE</a>   
    </div>

    <div class="py-16 bg-gradient-to-r from-blue-50 to-blue-100 grid place-items-center text-center p-6 shadow-md rounded-lg">
        <img src="/images/korporasi.jpg" alt="Nilai Korporasi" 
            class="w-full h-48 object-cover rounded-md transition-transform duration-300 hover:rotate-3 hover:scale-105">
        <h3 class="text-xl font-bold text-[#002349]">LEGALITAS</h3>
        <p class="text-[#000000]">
            Komitmen kami terhadap kepatuhan hukum adalah bagian dari upaya untuk 
            memberikan layanan terbaik dan memastikan kelangsungan operasional yang aman dan terpercaya.    
    </p>
        <a href="{{ route('legalitas') }}" class="inline-block mt-4 px-6 py-3 border-2 border-[#002349] text-[#00000] font-semibold rounded-lg hover:bg-gray-900 hover:text-white transition duration-300 ease-in-out shadow-md">READ MORE</a>   
    </div>
    </div>
</section>

<style>
    .btn-view {
        @apply inline-block mt-4 px-6 py-3 border-2 border-[#957C3D] text-[#957C3D] font-semibold rounded-lg 
               hover:bg-[#002349] hover:text-white transition duration-300 ease-in-out shadow-md;
    }
</style>

<section class="bg-white py-16">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-center">
            @php
                $stats = [
                    ['icon' => 'worker.png', 'count' => $jumlahklien, 'label' => 'Total Klien'],
                    ['icon' => 'hook.png', 'count' => $totalProyek, 'label' => 'Total Proyek'],
                    ['icon' => 'car.png', 'count' => $proyekSelesai, 'label' => 'Proyek Selesai'],
                ];
            @endphp

            @foreach ($stats as $stat)
                <div class="group flex flex-col items-center bg-[#F5F5F5] p-6 rounded-xl shadow-lg transition transform hover:scale-105 hover:shadow-2xl">
                    <div class="p-4 bg-[#ff7417] rounded-full">
                        <img src="/icon/{{ $stat['icon'] }}" alt="Icon {{ $stat['label'] }}" class="h-16 w-16 transition-transform duration-300 group-hover:rotate-6">
                    </div>
                    <h2 class="text-gray-700 text-5xl font-bold mt-4">{{ $stat['count'] }}</h2>
                    <p class="text-[#000000] text-lg mt-2">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-16 bg-[#F5F5F5] text-center">
    <div class="container mx-auto">
        <h2 class="text-3xl font-extrabold text-[#002349] mb-12">OUR SERVICE</h2>

        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <div class="border rounded-lg bg-white shadow-lg p-6">
                <div class="flex justify-center mb-4">
                    <img src="/icon/insta.png" alt="Service Icon" class="w-12">
                </div>
                <h3 class="text-xl font-bold text-[#002349] mb-2">Instalasi dan Konstruksi</h3>
                <p class="text-[#000000] text-sm">
                    Pengalaman kerja PT. Mardika Sarana Engineering selama bertahun-tahun telah membuktikan kemampuannya dalam bidang konstruksi.
                </p>
                <a href="{{ route('instalasi') }}" class="text-[#002349] font-semibold mt-4 inline-block border-b-2 border-[#002349] transition-colors duration-300 hover:text-[#957C3D] focus:text-[#002349] active:text-[#002349]">Read More</a>
            </div>
            <div class="border rounded-lg bg-white shadow-lg p-6">
                <div class="flex justify-center mb-4">
                    <img src="icon/main.png" alt="Service Icon" class="w-12">
                </div>
                <h3 class="text-xl font-bold text-[#002349] mb-2">Perawatan dan Perbaikan</h3>
                <p class="text-[#000000] text-sm">
                    Kami di bidang industri, kami telah mengembangkan unit layanan pemasangan dan pemeliharaan peralatan dielektrik. </p>
                <a href="{{ route('perawatan-perbaikan') }}" class="text-[#002349] font-semibold mt-4 inline-block border-b-2 border-[#002349] transition-colors duration-300 hover:text-[#957C3D] focus:text-[#002349] active:text-[#002349]">Read More</a>
            </div>
            <div class="border rounded-lg bg-white shadow-lg p-6">
                <div class="flex justify-center mb-4">
                    <img src="icon/test.png" alt="Service Icon" class="w-12">
                </div>
                <h3 class="text-xl font-bold text-[#002349] mb-2">Pengujian dan Komisioning</h3>
                <p class="text-[#000000] text-sm">
                    Kami telah berpengalaman dalam pendampingan proyek commissioning dan pengujian. Setelah itu kami mengembangkan unit kerja sendiri.
                </p>
                <a href="{{ route('pengujian') }}" class="text-[#002349] font-semibold mt-4 inline-block border-b-2 border-[#002349] transition-colors duration-300 hover:text-[#957C3D] focus:text-[#002349] active:text-[#002349]">Read More</a>
            </div>
        </div>
    </div>
</section>
</div>
</div>
</div>
</div>
</section> 
@include('pages/footer')
</body>
</html>