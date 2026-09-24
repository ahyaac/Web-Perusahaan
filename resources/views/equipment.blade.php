<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment - PT. Mardika Sarana Engineering</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">    
    <style>
        .card {
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-gray-100">

    {{-- Header dan Navbar --}}
    @include('pages.header')
    @include('pages.navbar')

    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-semibold mb-6 text-[#002349]">Machine & Equipment List</h2>

        <div class="flex justify-between items-center mb-6">
            <form action="{{ route('equipment.semua') }}" method="GET" class="flex gap-2 w-full max-w-md">
                <input type="text" name="search" placeholder="Cari equipment..." 
                       class="form-control flex-grow px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-900"
                       value="{{ request()->get('search') }}">
                <button type="submit" class="btn btn-primary px-4 py-2">
                    <i class="bi bi-search"></i> Cari
                </button>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($equipment as $equipments)
                <div class="bg-white shadow-md rounded overflow-hidden">
                    @if ($equipments->gambarquipment)
                        <img src="{{ asset('/storage/foto_equipment/' . $equipments->gambarquipment) }}"
                             alt="{{ $equipments->namaquipment }}"
                             class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500">Tidak ada gambar</span>
                        </div>
                    @endif
                    <div class="p-4 text-center">
                        <h6 class="text-lg font-medium capitalize">{{ $equipments->namaquipment }}</h6>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-500">
                    Tidak ada equipment ditemukan.
                </div>
            @endforelse
        </div>
    </div>

    {{-- Footer --}}
    @include('pages.footer')

</body>
</html>
