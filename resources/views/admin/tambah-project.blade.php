<!DOCTYPE html>
<html lang="id">
<head>
@include('admin.layouts.header')
<body>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- Main Content -->
        <div style="margin-left: 250px; padding: 2rem 1.5rem; width: calc(100% - 250px);">
            <h2 class="mb-5">Tambah Proyek</h2>
                <form action="{{ route('admin/project/simpan') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white rounded shadow-sm">
                    @csrf
                    <div class="row mb-4">
                        <div class="col">
                            <label for="id_klien">Klien</label>
                            <select name="id_klien" id="id_klien" class="form-control select2" required>
                                <option value="" disabled selected>Pilih Klien</option>
                                @foreach ($klien as $kliens)
                                    <option value="{{ $kliens->id_klien }}">{{ $kliens->nama_klien }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nama_proyek">Nama Proyek</label>
                            <input type="text" name="nama_proyek" id="nama_proyek" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="nominal">Nilai Proyek</label>
                            <input type="text" name="nominal" id="nominal" class="form-control" required>
                            <input type="hidden" name="harga_bersih" id="harga_bersih">
                        </div>
                        <div class="col">
                            <label for="no_kontrak">No. Kontrak</label>
                            <input type="text" name="no_kontrak" id="no_kontrak" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="tanggal_mulai">Tgl Mulai</label>
                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="tanggal_selesai">Tgl Selesai</label>
                            <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" >
                        </div>
                        <div class="col">
                            <label for="no_brast">No. BAST</label>
                            <input type="text" name="no_brast" id="no_brast" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="id_pekerja">Leader</label>
                            <select name="id_pekerja" id="id_pekerja" class="form-control select2" required>
                              @foreach ($pekerja as $mandor)
                                    <option value="{{ $mandor->id_pekerja }}">{{ $mandor->nama_pekerja }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="id_bproyek">Bidang</label>
                            <select name="id_bproyek" id="id_bproyek" class="form-control select2" required>
                               @foreach ($bidang as $b)
                                    <option value="{{ $b->id_bproyek }}">{{ $b->nama_bproyek }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div x-data="lokasiData()" x-init="initSelect2()" class="mb-4">
                        <!-- Provinsi -->
                        <label class="block mb-1 font-semibold">Provinsi</label>
                        <select id="provinsiSelect" class="form-control select2">
                            <option value="">-- Pilih Provinsi --</option>
                            <template x-for="(nama, kode) in provinsiList" :key="kode">
                                <option :value="kode" x-text="nama"></option>
                            </template>
                        </select>

                        <!-- Kota -->
                        <label class="block mt-4 mb-1 font-semibold">Kota/Kabupaten</label>
                        <select id="kotaSelect" class="form-control select2">
                            <option value="">-- Pilih Kota/Kabupaten --</option>
                        </select>

                        <!-- Hidden input untuk disubmit -->
                        <input type="hidden" name="lokasi" :value="provinsiList[provinsi] + ' - ' + kota">
                    </div>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
        </div>
    <script>
        const input = document.getElementById('nominal');
        const hidden = document.getElementById('harga_bersih');

        input.addEventListener('input', function(e) {
        // Ambil angka saja (hapus simbol "Rp" dan titik pemisah ribuan)
        let value = e.target.value.replace(/[^0-9]/g, '');  // Menghapus karakter selain angka

        // Simpan ke hidden input (nilai bersih tanpa format)
        hidden.value = value;

        // Format ke Rupiah
        let formatted = new Intl.NumberFormat('id-ID').format(value);
        e.target.value = 'Rp ' + formatted;  // Menampilkan format Rupiah
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
            placeholder: "Pilih opsi",
            allowClear: true,
            width: '100%'
            });
        });
    </script>
    <script>
        function lokasiData() {
            return {
                provinsi: '',
                kota: '',
                provinsiRaw: {
                    '1': 'ACEH',
                    '2': 'SUMATERA UTARA',
                    '3': 'SUMATERA BARAT',
                    '4': 'SUMATERA SELATAN',
                    '5': 'RIAU',
                    '6': 'KEPULAUAN RIAU',
                    '7': 'JAMBI',
                    '8': 'BENGKULU',
                    '9': 'BANGAK BELITUNG',
                    '10': 'LAMPUNG',
                    '11': 'BANTEN',
                    '12': 'JAWA BARAT',
                    '13': 'JAWA TENGAH',
                    '14': 'JAWA TIMUR',
                    '15': 'DKI JAKARTA',
                    '16': 'DAERAH ISTIMEWAH TOGYAKARTA',
                    '17': 'BALI',
                    '18': 'NUSA TENGGARA BARAT',
                    '19': 'NUSA TENGGARA TIMUR',
                    '20': 'KALIMANTAN BARAT',
                    '21': 'KALIMANTAN SELATAN',
                    '22': 'KALIMANTAN TENGAH',
                    '23': 'KALIMANTAN TIMUR',
                    '24': 'KALIMANTAN UTARA',
                    '25': 'SULAWESI SELATAN',
                    '27': 'SULAWESI TENGGARA',
                    '28': 'SULAWESI TENGAH',
                    '29': 'SULAWESI UTARA',
                    '30': 'SULAWESI BARAT',
                    '31': 'MALUKU',
                    '32': 'MALUKU UTARA',
                    '33': 'PAPUA',
                    '34': 'PAPUA BARAT',
                },
                kotaDataRaw: {
                    '1': [
                        'KABUPATEN ACEH BARAT',
                        'KABUPATEN ACEH BARAT DAYA',
                        'KABUPATEN ACEH BESAR',
                        'KABUPATEN ACEH JAYA',
                        'KABUPATEN ACEH SINGKIL',
                        'KABUPATEN ACEH TENGAH',
                        'KABUPATEN ACEH TENGGARA',
                        'KABUPATEN ACEH TIMUR',
                        'KABUPATEN ACEH UTARA',
                        'KABUPATEN BENER MERIAH',
                        'KABUPATEN BIREUEN',
                        'KABUPATEN GAYOLUES',
                        'KABUPATEN NAGAN RAYA',
                        'KABUPATEN PIDIE',
                        'KABUPATEN PIDIE JAYA',
                        'KABUPATEN SIMEULUE',
                        'KOTA LANGSA',
                        'KOTA LHOKSEUMAWE',
                        'KOTA SABANG',
                        'KOTA SUBULUSSALAM'
                    ],
                    '2': [
                        'KABUPATEN ASAHAN',
                        'KABUPATEN BATUBARA',
                        'KABUPATEN HUMBANG HASUNDUTAN',
                        'KABUPATEN KARO',
                        'KABUPATEN LABUHAN BATU UTARA',
                        'KABUPATEN NIAS',
                        'KABUPATEN NIAS BARAT',
                        'KABUPATEN NIAS UTARA',
                        'KABUPATEN PADANG LAWAS',
                        'KABUPATEN PADANG LAWAS UTARA',
                        'KABUPATEN PAKPAK BHARAT',
                        'KABUPATEN SAMOSIR',
                        'KABUPATEN TAPANULI SELATAN',
                        'KABUPATEN TAPANULI TENGAH',
                        'KABUPATEN TAPANULI UTARA',
                        'KOTA GUNUNG SITOLI',
                        'KOTA PADANG SIDEMPUAN',
                        'KOTA SIBOLGA',
                        'KOTA TANJUNG BALAI',
                        'KOTA TEBING TINGGI'

                    ],
                    '3': [
                        'KABUPATEN AGAM',
                        'KABUPATEN LIMA PULUH KOTA',
                        'KABUPATEN PADANG PARIAMAN',
                        'KABUPATEN PASAMAN',
                        'KABUPATEN PASAMAN BARAT',
                        'KABUPATEN PESISIR SELATAN',
                        'KABUPATEN SOLOK',
                        'KABUPATEN SOLOK SELATAN',
                        'KABUPATEN TANAH DATAR',
                        'KOTA PADANG',
                        'KOTA PADANG PANJANG',
                        'KOTA PARIAMAN',
                        'KOTA PAYAKUMBUH',
                        'KOTA SAWAHLUNTO'
                    ],
                    '4': [
                        'KABUPATEN BANYUASIN',
                        'KABUPATEN EMPAT LAWANG',
                        'KABUPATEN LAHAT',
                        'KABUPATEN MUSI BANYUASIN',
                        'KABUPATEN MUSI RAWAS',
                        'KABUPATEN MUSI RAWAS UTARA',
                        'KABUPATEN OGAN ILIR',
                        'KABUPATEN OGAN KOMERING ILIR',
                        'KABUPATEN OGAN KOMERING ULU',
                        'KABUPATEN OGAN KOMERING ULU SELATAN',
                        'KABUPATEN OGAN KOMERING ULU TIMUR',
                        'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                        'KOTA LUBUKLINGGAU',
                        'KOTA PAGAR ALAM',
                        'KOTA PRABUMULIH'
                    ],
                    '5': [
                        'KABUPATEN BENGKALIS',
                        'KABUPATEN INDRAGIRI HILIR',
                        'KABUPATEN INDRAGIRI HULU',
                        'KABUPATEN KAMPAR',
                        'KABUPATEN KEPULAUAN MERANTI',
                        'KABUPATEN KUANTAN SINGINGI',
                        'KABUPATEN PELALAWAN',
                        'KABUPATEN ROKAN HILIR',
                        'KABUPATEN ROKAN HULU',
                        'KABUPATEN SIAK',
                        'KOTA DUMAI'
                    ],
                    '6': [
                        'KABUPATEN KARIMUN',
                        'KABUPATEN KEPULAUAN ANAMBAS',
                        'KABUPATEN LINGGA',
                        'KOTA BATAM',

                    ],
                    '7': [
                        'Kabupaten Bungo',
                        'Kabupaten Kerinci',
                        'Dinas Perumahan & Kawasan Permukiman Kabup',
                        'Kabupaten Muaro Jambi',
                        'Kabupaten Sarolangun',
                        'Kabupaten Tanjung Jabung Timur',
                        'Kabupaten Tebo',
                        'Kota Sungai Penuh',
                    ],
                    '8': [
                        'KABUPATEN BENGKULU SELATAN',
                        'KABUPATEN BENGKULU TENGAH',
                        'KABUPATEN KAUR',
                        'KABUPATEN KEPAHIANG',
                        'KABUPATEN LEBONG',
                        'KABUPATEN MUKOMUKO',
                        'KABUPATEN REJANG LEBONG',
                        'KABUPATEN SELUMA',
                        'KOTA BENGKULU',

                    ],
                    '9': [
                        'KABUPATEN BANGKA',
                        'KABUPATEN BANGKA BARAT',
                        'KABUPATEN BANGKA SELATAN',
                        'KABUPATEN BANGKA TENGAH',
                        'KABUPATEN BELITUNG',
                        'KABUPATEN BELITUNG TIMUR',
                        'KOTA PANGKAL PINANG/ DINAS LINGKUNGAN',
                    ],
                    '10': [
                        'KABUPATEN LAMPUNG BARAT',
                        'KABUPATEN LAMPUNG SELATAN',
                        'KABUPATEN LAMPUNG TENGAH',
                        'KABUPATEN LAMPUNG TIMUR',
                        'KABUPATEN LAMPUNG UTARA',
                        'KABUPATEN MESUJI',
                        'KABUPATEN PESAWARAN',
                        'KABUPATEN PESISIR BARAT',
                        'KABUPATEN PRINGSEWU',
                        'KABUPATEN TANGGAMUS',
                        'KABUPATEN TULANG BAWANG',
                        'KABUPATEN WAY KANAN',
                        'KOTA BANDAR LAMPUNG',
                        'KOTA METRO',
                    ],
                    '11': [
                        'KABUPATEN LEBAK',
                        'KABUPATEN PANDEGLANG',
                        'KABUPATEN SERANG',
                        'KABUPATEN TANGERANG',
                        'KOTA CILEGON',
                        'KOTA SERANG',
                        'KOTA TANGERANG SELATAN',
                    ],
                    '12': [
                        'KABUPATEN BANDUNG',
                        'KABUPATEN BOGOR',
                        'KABUPATEN CIAMIS',
                        'KABUPATEN CIANJUR',
                        'KABUPATEN CIREBON',
                        'KABUPATEN KARAWANG',
                        'KABUPATEN KUNINGAN',
                        'KABUPATEN PANGANDARAN',
                        'KABUPATEN PURWAKARTA (PUPR)',
                        'KABUPATEN SUBANG',
                        'KABUPATEN SUMEDANG',
                        'KOTA BANJAR',
                        'KOTA BEKASI',
                        'KOTA BOGOR',
                        'KOTA CIMAHI',
                        'KOTA CIREBON',
                        'KOTA DEPOK',
                        'KOTA SUKABUMI'
                    ],
                    '13': [
                        'KABUPATEN BATANG',
                        'KABUPATEN BOYOLALI',
                        'KABUPATEN BREBES',
                        'KABUPATEN CILACAP',
                        'KABUPATEN DEMAK',
                        'KABUPATEN GROBOGAN',
                        'KABUPATEN KEBUMEN',
                        'KABUPATEN KENDAL',
                        'KABUPATEN KLATEN',
                        'KABUPATEN KUDUS',
                        'KABUPATEN MAGELANG',
                        'KABUPATEN PATI',
                        'KABUPATEN PEMALANG',
                        'KABUPATEN PURBALINGGA',
                        'KABUPATEN SRAGEN',
                        'KABUPATEN SUKOHARJO',
                        'KABUPATEN TEGAL',
                        'KABUPATEN TEMANGGUNG',
                        'KABUPATEN WONOGIRI',
                        'KOTA PEKALONGAN',
                        'KOTA SALATIGA',
                        'KOTA SEMARANG',
                        'KOTA SURAKARTA',
                        'KOTA TEGAL'
                    ],
                    '14': [
                        'KABUPATEN BANGKALAN',
                        'KABUPATEN BANYUWANGI',
                        'KABUPATEN BLITAR',
                        'KABUPATEN BOJONEGORO',
                        'KABUPATEN BONDOWOSO',
                        'KABUPATEN GRESIK',
                        'KABUPATEN JEMBER',
                        'KABUPATEN JOMBANG',
                        'KABUPATEN KEDIRI',
                        'KABUPATEN LAMONGAN',
                        'KABUPATEN LUMAJANG',
                        'KABUPATEN MADIUN',
                        'KABUPATEN MAGETAN',
                        'KABUPATEN MALANG',
                        'KABUPATEN MOJOKERTO',
                        'KABUPATEN NGANJUK',
                        'KABUPATEN NGAWI',
                        'KABUPATEN PACITAN',
                        'KABUPATEN PAMEKASAN',
                        'KABUPATEN PASURUAN',
                        'KABUPATEN PONOROGO',
                        'KABUPATEN PROBOLINGGO',
                        'KABUPATEN SAMPANG',
                        'KABUPATEN SIDOARJO',
                        'KABUPATEN SITUBONDO',
                        'KABUPATEN SUMENEP',
                        'KABUPATEN TRENGGALEK',
                        'KABUPATEN TUBAN',
                        'KABUPATEN TULUNGAGUNG',
                        'KOTA BATU',
                        'KOTA BLITAR',
                        'KOTA KEDIRI',
                        'KOTA MADIUN',
                        'KOTA MALANG',
                        'KOTA MOJOKERTO',
                        'KOTA PASURUAN',
                        'KOTA PROBOLINGGO',
                        'KOTA SURABAYA'
                    ],
                    '15': [
                        'KABUPATEN ADMINISTRASI KEPULAUAN SERIBU',
                        'KOTA ADMINISTRASI JAKARTA BARAT',
                        'KOTA ADMINISTRASI JAKARTA PUSAT',
                        'KOTA ADMINISTRASI JAKARTA SELATAN',
                        'KOTA ADMINISTRASI JAKARTA TIMUR',
                        'KOTA ADMINISTRASI JAKARTA UTARA'
                    ],
                    '16': [
                        'KABUPATEN BANTUL',
                        'KABUPATEN KULON PROGO',
                        'KABUPATEN SLEMAN',
                        'KOTA YOGYAKARTA'
                    ],
                    '17': [
                        'KABUPATEN BADUNG',
                        'KABUPATEN BANGLI',
                        'KABUPATEN BULELENG',
                        'KABUPATEN JEMBRANA',
                        'KABUPATEN KARANGASEM',
                        'KOTA DENPASAR'
                    ],
                    '18': [
                        'KABUPATEN BIMA',
                        'KABUPATEN LOMBOK BARAT',
                        'KABUPATEN LOMBOK TENGAH',
                        'KABUPATEN LOMBOK TIMUR',
                        'KABUPATEN LOMBOK UTARA',
                        'KABUPATEN SUMBAWA',
                        'KABUPATEN SUMBAWA BARAT',
                        'KOTA BIMA',
                        'KOTA MATARAM'
                    ],
                    '19': [
                        'KABUPATEN ALOR',
                        'KABUPATEN BELU',
                        'KABUPATEN ENDE',
                        'KABUPATEN FLORES TIMUR',
                        'KABUPATEN KUPANG',
                        'KABUPATEN LEMBATA',
                        'KABUPATEN MALAKA',
                        'KABUPATEN MANGGARAI',
                        'KABUPATEN MANGGARAI BARAT',
                        'KABUPATEN MANGGARAI TIMUR',
                        'KABUPATEN NAGEKEO',
                        'KABUPATEN NGADA',
                        'KABUPATEN ROTE NDAO',
                        'KABUPATEN SABU RAIJUA',
                        'KABUPATEN SUMBA BARAT',
                        'KABUPATEN SUMBA BARAT DAYA',
                        'KABUPATEN SUMBA TENGAH',
                        'KABUPATEN SUMBA TIMUR',
                        'KABUPATEN TIMOR TENGAH SELATAN',
                        'KABUPATEN TIMOR TENGAH UTARA',
                        'KOTA KUPANG'
                    ],
                    '20': [
                        'KABUPATEN BENGKAYANG',
                        'KABUPATEN KAPUASHULU',
                        'KABUPATEN KAYONG UTARA',
                        'KABUPATEN KETAPANG',
                        'KABUPATEN KUBURAYA',
                        'KABUPATEN LANDAK',
                        'KABUPATEN MELAWI',
                        'KABUPATEN MEMPAWAH',
                        'KABUPATEN SAMBAS',
                        'KABUPATEN SANGGAU',
                        'KABUPATEN SINTANG',
                        'KOTA PONTIANAK',
                        'KOTA SINGKAWANG'
                    ],
                    '21': [
                        'KABUPATEN BALANGAN',
                        'KABUPATEN BARITO KUALA',
                        'KABUPATEN HULU SUNGAI SELATAN',
                        'KABUPATEN HULU SUNGAI TENGAH',
                        'KABUPATEN HULU SUNGAI UTARA',
                        'KABUPATEN KOTABARU',
                        'KABUPATEN TABALONG',
                        'KABUPATEN TANAHLAUT',
                        'KABUPATEN TAPIN',
                        'KOTA BANJARMASIN'
                    ],
                    '22': [
                        'KABUPATEN BARITO SELATAN',
                        'KABUPATEN BARITO TIMUR',
                        'KABUPATEN BARITO UTARA',
                        'KABUPATEN GUNUNG MAS',
                        'KABUPATEN KAPUAS',
                        'KABUPATEN KOTAWARINGIN BARAT',
                        'KABUPATEN KOTAWARINGIN TIMUR',
                        'KABUPATEN LAMANDAU',
                        'KABUPATEN MURUNGRAYA',
                        'KABUPATEN PULANGPISAU',
                        'KABUPATEN SUKAMARA',
                        'KABUPATEN SERUYAN',
                        'KOTA PALANGKA RAYA'
                    ],
                    '23': [
                        'KABUPATEN BERAU',
                        'KABUPATEN KUTAI BARAT',
                        'KABUPATEN KUTAI KARTANEGARA',
                        'KABUPATEN KUTAI TIMUR',
                        'KABUPATEN MAHAKAM ULU',
                        'KABUPATEN PASER',
                        'KABUPATEN PENAJAM PASERUTARA',
                        'KOTA BALIKPAPAN'
                    ],
                    '24': [
                        'KABUPATEN BULUNGAN',
                        'KABUPATEN MALINAU',
                        'KABUPATEN NUNUKAN',
                        'KABUPATEN TANA TIDUNG'
                    ],
                    '25': [
                        'KABUPATEN BOALEMO',
                        'KABUPATEN BONE BOLANGO',
                        'KABUPATEN GORONTALO',
                        'KABUPATEN GORONTALO UTARA',
                        'KABUPATEN POHUWATO',
                        'KOTA GORONTALO'
                    ],
                    '26': [
                        'KABUPATEN BANTAENG',
                        'KABUPATEN BARRU',
                        'KABUPATEN BONE',
                        'KABUPATEN BULUKUMBA',
                        'KABUPATEN ENREKANG',
                        'KABUPATEN GOWA',
                        'KABUPATEN JENEPONTO',
                        'KABUPATEN KEPULAUANSELAYAR',
                        'KABUPATEN LUWU TIMUR',
                        'KABUPATEN LUWU UTARA',
                        'KABUPATEN PANGKAJENEDAN KEPULAUAN',
                        'KABUPATEN PINRANG',
                        'KABUPATEN SINJAI',
                        'KABUPATEN SOPPENG',
                        'KABUPATEN TAKALAR',
                        'KABUPATEN TANA TORAJA',
                        'KABUPATEN WAJO',
                        'KOTA MAKASSAR',
                        'KOTA PALOPO',
                        'KOTA PAREPARE',
                    ],
                    '27': [
                        'KABUPATEN BUTON',
                        'KABUPATEN BUTON SELATAN',
                        'KABUPATEN BUTON TENGAH',
                        'KABUPATEN BUTON UTARA',
                        'KABUPATEN KOLAKA',
                        'KABUPATEN KONAWE KEPULAUAN',
                        'KABUPATEN KONAWE SELATAN',
                        'KABUPATEN KONAWE UTARA',
                        'KABUPATEN MUNA',
                        'KABUPATEN WAKATOBI',
                        'KABUPATEN WAKATOBI ( PUPR )',
                        'KOTA BAU-BAU'  
                    ],
                    '28': [
                        'KABUPATEN BANGGAI',
                        'KABUPATEN BANGGA KEPULAUAN',
                        'KABUPATEN BANGGAI LAUT',
                        'KABUPATEN BUOL',
                        'KABUPATEN DONGGALA',
                        'KABUPATEN MOROWALI UTARA',
                        'KABUPATEN PARIGI MOUTONG',
                        'KABUPATEN TOJO UNA-UNA',
                        'KABUPATEN TOLI-TOLI',
                        'KOTA PALU',
                    ],
                    '29': [
                        'KABUPATEN BOLAANG MONGONDOW TIMUR',
                        'KABUPATEN BOLAANG MONGONDOW UTARA',
                        'KABUPATEN KEPULAUAN SANGIHE',
                        'KABUPATEN KEPULAUAN SIAU TAGULANDANG BIAR',
                        'KABUPATEN KEPULAUAN TALAUD',
                        'KABUPATEN MINAHASA SELATAN',
                        'KABUPATEN MINAHASA TENGGARA',
                        'KABUPATEN MINAHASA UTARA',
                        'KOTA KOTAMOBAGU',
                        'KOTA TOMOHON',
                    ],
                    '30': [
                        'KABUPATEN MAJENE',
                        'KABUPATEN MAMASA',
                        'KABUPATEN MAMUJU',
                        'KABUPATEN PASANGKAYU',
                        'KABUPATEN POLEWALI MANDAR',
                        'KOTA MAMUJU',
                    ],
                    '31': [
                        'Kabupaten Buru',
                        'Kabupaten Buru Selatan',
                        'Kabupaten Kepulauan Aru',
                        'Kabupaten Maluku Barat Daya',
                        'Kabupaten Maluku Tengah',
                        'Kabupaten Maluku Tenggara',
                        'Kabupaten Kepulauan Tanimbar',
                        'Kabupaten Seram Bagian Barat',
                        'Kabupaten Seram Bagian Timur',
                        'Kota Tual',
                    ],
                    '32': [
                        'KABUPATEN HALMAHERA BARAT',
                        'KABUPATEN HALMAHERA TENGAH',
                        'KABUPATEN HALMAHERA TIMUR',
                        'KABUPATEN HALMAHERA SELATAN',
                        'KABUPATEN HALMAHERA UTARA',
                        'KABUPATEN KEPULAUAN SULA',
                        'KABUPATEN PULAU MOROTAI',
                        'KABUPATEN PULAU TALIABU',
                        'KOTA TERNATE',
                    ],
                    '33': [
                        'KABUPATEN BIAK NUMFOR',
                        'KABUPATEN JAYAPURA',
                        'KABUPATEN KEEROM',
                        'KABUPATEN KEPULAUAN YAPEN',
                        'KABUPATEN MAMBERAMO RAYA',
                        'KABUPATEN SARMI',
                        'KABUPATEN SUPIORI',
                        'KABUPATEN WAROPEN',
                        'KOTA JAYAPURA',
                        'KABUPATEN ASMAT',
                        'KABUPATEN BOVEN DIGOEL',
                        'KABUPATEN MAPPI',
                        'KABUPATEN MERAUKE',
                        'KABUPATEN DEIYAI',
                        'KABUPATEN DOGIYAI',
                        'KABUPATEN INTAN JAYA',
                        'KABUPATEN MIMIKA',
                        'KABUPATEN NABIRE',
                        'KABUPATEN PANIAI',
                        'KABUPATEN PUNCAK',
                        'KABUPATEN PUNCAK JAYA',
                        'KABUPATEN JAYAWIJAYA',
                        'KABUPATEN LANNY JAYA',
                        'KABUPATEN MAMBERAMO TENGAH',
                        'KABUPATEN PEGUNUNGAN BINTANG',
                        'KABUPATEN TOLIKARA',
                        'KABUPATEN YALIMO',
                        'KABUPATEN YAHUKIMO',
                        'KABUPATEN MAYBRAT',
                        'KABUPATEN RAJA AMPAT',
                        'KABUPATEN SORONG',
                        'KABUPATEN SORONG SELATAN',
                        'KOTA SORONG',
                    ],
                    '34': [
                        'KABUPATEN FAKFAK',
                        'KABUPATEN KAIMANA',
                        'KABUPATEN PEGUNUNGAN ARFAK',
                        'KABUPATEN TELUK BINTUNI',
                        'KABUPATEN TELUK WONDAMA',
                    ]
                },
                kotaList: [],

                // computed property untuk provinsi urut abjad
                get provinsiList() {
                    return Object.entries(this.provinsiRaw)
                        .sort((a, b) => a[1].localeCompare(b[1]))
                        .reduce((obj, [key, val]) => {
                            obj[key] = val;
                            return obj;
                        }, {});
                },

                // inisialisasi Select2 dan sinkronisasi awal
                initSelect2() {
                    let self = this;

                    // Inisialisasi Select2 Provinsi
                    $('#provinsiSelect').select2({
                        placeholder: "Pilih Provinsi",
                        allowClear: true,
                        width: '100%'
                    });

                    // sync perubahan dari Select2 ke Alpine.js model provinsi
                    $('#provinsiSelect').on('change', function () {
                        self.provinsi = $(this).val();
                        self.loadKota();
                    });

                    // Inisialisasi Select2 Kota
                    $('#kotaSelect').select2({
                        placeholder: "Pilih Kota/Kabupaten",
                        allowClear: true,
                        width: '100%'
                    });

                    // sync perubahan dari Select2 ke Alpine.js model kota
                    $('#kotaSelect').on('change', function () {
                        self.kota = $(this).val();
                    });
                },

                loadKota() {
                    if (this.provinsi && this.kotaDataRaw[this.provinsi]) {
                        this.kotaList = this.kotaDataRaw[this.provinsi].slice().sort((a, b) => a.localeCompare(b));
                    } else {
                        this.kotaList = [];
                    }

                    this.kota = '';

                    this.$nextTick(() => {
                        const kotaSelect = $('#kotaSelect');

                        kotaSelect.off().select2('destroy').empty();

                        // Tambahkan option default
                        kotaSelect.append(new Option('-- Pilih Kota/Kabupaten --', ''));

                        // Tambahkan opsi kota
                        this.kotaList.forEach(kota => {
                            kotaSelect.append(new Option(kota, kota));
                        });

                        kotaSelect.select2({
                            placeholder: "Pilih Kota/Kabupaten",
                            allowClear: true,
                            width: '100%'
                        });

                        // 🟡 Penting! Tambahkan delay sedikit agar opsi benar-benar dimuat dulu
                        setTimeout(() => {
                            kotaSelect.val(this.kota).trigger('change');
                        }, 50);

                        kotaSelect.on('change', () => {
                            this.kota = kotaSelect.val();
                        });
                    });
                }

            }
        }
    </script>
    <!-- Load Alpine.js -->
    <script src="https://unpkg.com/alpinejs" defer></script>

</body>
</html>
