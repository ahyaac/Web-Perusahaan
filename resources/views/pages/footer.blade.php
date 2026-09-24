<footer class="bg-gradient-to-r from-blue-50 to-blue-100 text-gray-800 py-10">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 px-6 md:px-12">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="PT. Mardika Sarana Engineering" class="h-16 mb-4">
            <p class="text-gray-900 space-y-2">
                Solusi Konstruksi Terpercaya.</p>
            <p class="text-gray-900 space-y-2">
                Membangun Masa Depan Bersama Anda.</p>
        </div>

        <div>
            <h3 class="text-xl text-[#002349] font-semibold mb-4">Best Services</h3>
            <ul class="text-gray-900 space-y-2">
            <li class="cursor-pointer hover:text-[#957C3D] transition duration-300">
                <a href="{{ route('instalasi') }}" onclick="changeColor(this)" class="block w-full">
                    Instalasi dan Konstruksi
                </a>
            </li>
            <li class="cursor-pointer hover:text-[#957C3D] transition duration-300">
                <a href="{{ route('perawatan-perbaikan') }}" class="block w-full">
                    Perawatan dan Perbaikan
                </a>
            </li>
            <li class="cursor-pointer hover:text-[#957C3D] transition duration-300">
                <a href="{{ route('pengujian') }}" class="block w-full">
                    Inspeksi, Pengujian dan Komisioning
                </a>
            </li>
            </ul>

            <script>
                function changeColor(element) {
                document.querySelectorAll("ul li").forEach(li => {
                    li.classList.remove("text-[#957C3D]");
                    li.classList.add("text-gray-900");});
                    element.classList.remove("text-[#957C3D]");
                    element.classList.add("text-gray-900");}
            </script>
        </div>

        <div>
            <h3 class="text-xl text-[#002349] font-semibold mb-4">Follow Us</h3>
            <div class="flex space-x-3">
                <a href="#" class="bg-gradient-to-r from-[#515BD4] to-[#B134AF] p-3 rounded-full text-white">
                    <i class="bi bi-instagram text-2xl"></i>
                </a>
                <a href="#" class="bg-[#1DA1F2] p-3 rounded-full text-white">
                    <i class="bi bi-twitter text-2xl"></i>
                </a>
                <a href="#" class="bg-[#DA241A] p-3 rounded-full text-white">
                    <i class="bi bi-youtube text-2xl"></i>
                </a>
            </div>
        </div>

        <div>
            <h3 class="text-xl text-[#002349] font-semibold mb-4">Contact Info</h3>
            <p class="text-gray-900 text-sm leading-relaxed">
                Jl. Raya Tenggilis Mejoyo 121/AA-1<br>
                Surabaya 60293, Jawa Timur Indonesia 
            </p>
            <p class="mt-3 text-gray-900 text-sm">
                Phone: +62-31-8434 184 <br>
                Email: office@mse.co.id
            </p>
        </div>

    </div>

    <div class="text-center text-gray-700 text-sm mt-8 border-t border-gray-700 pt-4">
        Copyright © 2025 All rights reserved by 
        <a href="https://mse.co.id" class="text-[#DA241A] font-semibold">mse.co.id</a>
    </div>
</footer>