<nav class="relative flex items-center justify-between px-10 py-4 w-full bg-gradient-to-b from-[#CFE2FF] to-white shadow-md z-50">
    <div class="flex items-center space-x-12 w-full justify-center relative">
        <!-- Logo -->
        <a href="#" class="flex-shrink-0">
            <img src="/images/logo.png" alt="Logo" class="h-16"> <!-- Perbesar logo -->
        </a>

        <!-- Menu Navigasi -->
        <div class="flex space-x-12 text-[#002349] font-semibold text-xl">
            <a href="{{ route('home') }}" class="hover:text-[#957C3D]">Home</a>

            <div class="relative group">
                <button class="flex items-center hover:text-[#957C3D]">
                    Our Service
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul class="absolute left-0 w-64 bg-white shadow-md rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 text-lg">
                    <li><a href="{{ route('instalasi') }}" class="block px-4 py-2 hover:text-[#957C3D]">Instalasi dan Konstruksi</a></li>
                    <li><a href="{{ route('perawatan-perbaikan') }}" class="block px-4 py-2 hover:text-[#957C3D]">Perawatan dan Perbaikan</a></li>
                    <li><a href="{{ route('pengujian') }}" class="block px-4 py-2 hover:text-[#957C3D]">Inspeksi, Pengujian dan Komisioning</a></li>
                </ul>
            </div>

            <div class="relative group">
                <button class="flex items-center hover:text-[#957C3D]">
                    Page
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul class="absolute left-0 w-64 bg-white shadow-md rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 text-lg">
                    <li><a href="{{ route('tentang-mse') }}" class="block px-4 py-2 hover:text-[#957C3D]">Tentang MSE</a></li>
                    <li><a href="{{ route('tim-kami') }}" class="block px-4 py-2 hover:text-[#957C3D]">Tim Kami</a></li>
                    <li><a href="{{ route('legalitas') }}" class="block px-4 py-2 hover:text-[#957C3D]">Legalitas</a></li>
                    <li><a href="{{ route('klien') }}" class="block px-4 py-2 hover:text-[#957C3D]">Klien MSE</a></li>
                    <li><a href="{{ route('equipment.semua') }}" class="block px-4 py-2 hover:text-[#957C3D]">Equipment</a></li>
                </ul>
            </div>

            <a href="{{ route('/project/semua') }}" class="hover:text-[#957C3D]">Project</a>
            <a href="{{ route('contact-us') }}" class="hover:text-[#957C3D]">Contact Us</a>
        </div>
    </div>
</nav>