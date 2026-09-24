<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProyekModel;
use App\Models\PekerjaModel;
use App\Models\BidangModel;
use App\Models\KlienModel;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class ProjectController extends Controller
{
    public function semua(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')
                            ->withErrors(['Silakan login terlebih dahulu.']);
        }

        // 1. Ambil semua nilai filter dari URL
        $search             = $request->get('search');
        $filterBidang       = $request->get('bidang');
        $filterPekerja      = $request->get('pekerja');
        $filterLokasi       = $request->get('lokasi');
        $filterTahunMulai   = $request->get('tahun_mulai');
        $filterTahunSelesai = $request->get('tahun_selesai');

        // 2. Siapkan daftar opsi untuk dropdown
        $bidangList       = BidangModel::pluck('nama_bproyek');
        $pekerjaList      = PekerjaModel::pluck('nama_pekerja');
        $tahunMulaiList   = ProyekModel::selectRaw('YEAR(tanggal_mulai) as tahun')
                                        ->distinct()
                                        ->orderBy('tahun', 'desc')
                                        ->pluck('tahun');
        $tahunSelesaiList = ProyekModel::selectRaw('YEAR(tanggal_selesai) as tahun')
                                        ->distinct()
                                        ->orderBy('tahun', 'desc')
                                        ->pluck('tahun');
        $lokasiList       = ProyekModel::select('lokasi_klien')
                                        ->distinct()
                                        ->orderBy('lokasi_klien')
                                        ->pluck('lokasi_klien');

        
        // 3. Bangun query dengan semua when() untuk filter
        $projects = ProyekModel::join('bidang_proyek', 'proyek.id_bproyek', '=', 'bidang_proyek.id_bproyek')
            ->join('pekerja',        'proyek.id_pekerja', '=', 'pekerja.id_pekerja')
            ->leftJoin('klien', 'proyek.id_klien', '=', 'klien.id_klien')
            ->select('proyek.*','klien.nama_klien as nama_klien_klien' ,
            'bidang_proyek.nama_bproyek',  
            'klien.alamat_klien as alamat_klien_klien',    
            'klien.telp_klien as telp_klien_klien', 
            'pekerja.nama_pekerja')
            ->whereIn('pekerja.level_pekerja', [1, 2, 14, 15, 16, 18, 23])
            ->when($search, function ($q) use ($search) {
                $q->where('proyek.nama_proyek', 'like', "%{$search}%");
                $q->orWhere('proyek.alamat_klien', 'like', "%{$search}%");
                $q->orWhere('proyek.lokasi_klien', 'like', "%{$search}%");
                $q->orWhere('pekerja.nama_pekerja', 'like', "%{$search}%");
            })
            ->when($filterBidang, fn($q) => $q->where('bidang_proyek.nama_bproyek', $filterBidang))
            ->when($filterPekerja, fn($q) => $q->where('pekerja.nama_pekerja', $filterPekerja))
            ->when($filterLokasi, fn($q) => $q->where('proyek.lokasi_klien', $filterLokasi))
            ->when($filterTahunMulai, fn($q) => $q->whereYear('proyek.tanggal_mulai', $filterTahunMulai))
            ->when($filterTahunSelesai, fn($q) => $q->whereYear('proyek.tanggal_selesai', $filterTahunSelesai))
            ->orderBy('proyek.id_proyek')
            ->paginate(10);

        // 4. Kirim semua variabel ke view
        return view('admin.proyek', compact(
            'projects',
            'search',
            'filterBidang',
            'filterPekerja',
            'filterLokasi',
            'filterTahunMulai',
            'filterTahunSelesai',
            'bidangList',
            'pekerjaList',
            'tahunMulaiList',
            'tahunSelesaiList',
            'lokasiList'
        ));
    }


    public function tambah_proyek()
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $proyek = ProyekModel::all();
        $pekerja = PekerjaModel::whereIn('level_pekerja', [1, 2, 14, 15, 16, 18, 23])->get();
        $bidang = BidangModel::all();
        $klien = KlienModel::all();

        return view('admin.tambah-project', compact('proyek','pekerja','bidang','klien'));
    }

    public function simpan(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        

        $validated = $request->validate([
            'id_klien' => 'required|integer|exists:klien,id_klien',
            'nama_proyek' => 'required|string|max:255',
            'no_kontrak' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date',
            'status' => 'required|string',
            'id_pekerja' => 'required|integer',
            'id_bproyek' => 'required|integer',
            'lokasi' => 'required|string|max:255',
            'no_brast' => 'required|string|max:255',
            'harga_bersih' => 'required|string',
        ]);

        //dd($validated);
        //dd($request->all());


    
       // Ambil file dari request
        

        // Simpan file ke folder storage/public/logo_klien
  
        // Ambil data klien sesuai id_klien
        $klien = KlienModel::find($request->id_klien);
        if (!$klien) {
            return back()->withErrors(['id_klien' => 'Klien tidak ditemukan']);
        }

        // Mengambil nilai nominal yang berupa string dengan format Rupiah
        $nominalBersih = str_replace(['Rp', '.', ','], '', $request->harga_bersih);



        // Simpan data proyek ke database
        ProyekModel::create([
            'id_klien' => $klien->id_klien,
            'nama_klien' => $klien->nama_klien,
            'alamat_klien' => $klien->alamat_klien,
            'telp_klien' => $klien->telp_klien,

            'nama_proyek' => $request->nama_proyek,
            'no_kontrak' => $request->no_kontrak,
            'tanggal_mulai' => $request->tanggal_mulai,
            'status' => $request->status,
            'id_pekerja' => $request->id_pekerja,
            'id_bproyek' => $request->id_bproyek,
            'tanggal_selesai' => $request->tanggal_selesai,
            'lokasi_klien' => $request->lokasi,
            'no_brast' => $request ->no_brast,
            'nominal' => $nominalBersih,  
        ]);

        return redirect()->route('admin/project/semua')->with('success', 'Proyek berhasil ditambahkan!');
    }

    public function hapus_proyek($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $proyek = ProyekModel::findOrFail($id);
        $proyek->delete();
        return redirect()->route('admin/project/semua')->with('success', 'Proyek berhasil dihapus.');


        
    }

    public function detail_proyek($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }
        
        $detail = ProyekModel::with(['pekerja', 'bidang', 'klien'])->findOrFail($id);
        return view('admin.detail-project', compact('detail'));
    }

    public function edit_proyek($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $edit = ProyekModel::findOrFail($id);
        $pekerja = PekerjaModel::whereIn('level_pekerja',[1, 2, 14, 15, 16, 18, 23])->get();
        $bidang = BidangModel::all();
        $klien = KlienModel::all();

        // Default: kosong
        $provinsi = '';
        $kota = '';

        // Cek apakah data lama masih digabung
        if ($edit->lokasi_klien) {
            $parts = explode(' - ', $edit->lokasi_klien);
            $provinsi = strtoupper(trim($parts[0] ?? ''));
            $kota = strtoupper(trim($parts[1] ?? ''));
        } else {
            $provinsi = strtoupper($edit->provinsi ?? '');
            $kota = strtoupper($edit->kota ?? '');
        }

        return view('admin.edit-project', compact('edit', 'provinsi', 'kota', 'pekerja','bidang','klien'));
    }



    public function update_proyek(Request $request, $id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $request->validate([
            'nama_proyek' => 'required|string|max:255',
            'no_kontrak' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'status' => 'required|string|in:proses,selesai',
            'id_pekerja' => 'required|integer',
            'id_bproyek' => 'required|integer',
            'id_klien' => 'required|integer',
            'lokasi' => 'required|string|max:255', 
            'no_brast' => 'required|string|max:255',
            'nominal_bersih' => 'nullable|numeric',
        ]);

        $proyek = ProyekModel::findOrFail($id);
         $klien = KlienModel::findOrFail($request->id_klien);
    

        // Cek kalau ada file baru diupload
       



        // Update data proyek
        $proyek->nama_proyek = $request->nama_proyek;
        $proyek->no_kontrak = $request->no_kontrak;
        $proyek->tanggal_mulai = $request->tanggal_mulai;
        $proyek->tanggal_selesai = $request->tanggal_selesai;
        $proyek->status = $request->status;
        $proyek->id_pekerja = $request->id_pekerja;
        $proyek->id_bproyek = $request->id_bproyek;
        $proyek->lokasi_klien = $request->lokasi;
        $proyek->no_brast = $request->no_brast;
        $proyek->id_klien = $request->id_klien;
        $proyek->alamat_klien = $klien->alamat_klien; 
        $proyek->telp_klien = $klien->telp_klien; 
        // Proses nominal_bersih untuk memastikan hanya angka yang disimpan
        if ($request->has('nominal_bersih')) {
            // Hapus karakter selain angka
            $nominalBersih = str_replace(['Rp', '.', ','], '', $request->nominal_bersih);
            $proyek->nominal = is_numeric($nominalBersih) ? $nominalBersih : null;
        }

        $proyek->save();

        return redirect()->route('admin/project/detail', ['id' => $id])->with('success', 'Data proyek berhasil diperbarui.');

    }


    public function maintenance(Request $request)
    {
        // Ambil query search dari parameter URL
        $search = $request->get('search');

        // Mengambil data dengan pagination (maksimal 10) dan filter berdasarkan pencarian
        $projects = ProyekModel::join('bidang_proyek', 'proyek.id_bproyek', '=', 'bidang_proyek.id_bproyek')
        ->join('pekerja', 'proyek.id_pekerja', '=', 'pekerja.id_pekerja') // Menambahkan join dengan tabel pekerja
        ->select('proyek.*', 'bidang_proyek.nama_bproyek', 'pekerja.nama_pekerja') // Menambahkan nama pekerja ke select
        ->where('proyek.id_bproyek', 1)
        ->when($search, function ($query, $search) {
            $query->where(function ($q) use ($search) {
                $q->where('proyek.nama_proyek', 'like', '%' . $search . '%')
                  ->orWhere('proyek.no_kontrak', 'like', '%' . $search . '%')
                  ->orWhere('proyek.nama_klien', 'like', '%' . $search . '%');
            });
        })
        
        ->paginate(10);

    return view('project.maintenance', compact('projects'));
    }

    public function electrical(Request $request)
    {
        // Ambil query search dari parameter URL
        $search = $request->get('search');

        // Mengambil data dengan pagination (maksimal 10) dan filter berdasarkan pencarian
        $projects = ProyekModel::join('bidang_proyek', 'proyek.id_bproyek', '=', 'bidang_proyek.id_bproyek')
        ->join('pekerja', 'proyek.id_pekerja', '=', 'pekerja.id_pekerja') // Menambahkan join dengan tabel pekerja
        ->select('proyek.*', 'bidang_proyek.nama_bproyek', 'pekerja.nama_pekerja') // Menambahkan nama pekerja ke select
        ->where('proyek.id_bproyek', 2)
        ->when($search, function ($query, $search) {
            $query->where('proyek.nama_proyek', 'like', '%' . $search . '%');
        })
        ->paginate(10);

    return view('project.electrical', compact('projects'));
    }

    public function civil(Request $request)
    {
        // Ambil query search dari parameter URL
        $search = $request->get('search');

        // Mengambil data dengan pagination (maksimal 10) dan filter berdasarkan pencarian
        $projects = ProyekModel::join('bidang_proyek', 'proyek.id_bproyek', '=', 'bidang_proyek.id_bproyek')
        ->join('pekerja', 'proyek.id_pekerja', '=', 'pekerja.id_pekerja') // Menambahkan join dengan tabel pekerja
        ->select('proyek.*', 'bidang_proyek.nama_bproyek', 'pekerja.nama_pekerja') // Menambahkan nama pekerja ke select
        ->where('proyek.id_bproyek', 3)
        ->when($search, function ($query, $search) {
            $query->where('proyek.nama_proyek', 'like', '%' . $search . '%');
        })
        ->paginate(10);

    return view('project.civil', compact('projects'));
    }

    public function sewalat(Request $request)
    {
        // Ambil query search dari parameter URL
        $search = $request->get('search');

        // Mengambil data dengan pagination (maksimal 10) dan filter berdasarkan pencarian
        $projects = ProyekModel::join('bidang_proyek', 'proyek.id_bproyek', '=', 'bidang_proyek.id_bproyek')
        ->join('pekerja', 'proyek.id_pekerja', '=', 'pekerja.id_pekerja') // Menambahkan join dengan tabel pekerja
        ->select('proyek.*', 'bidang_proyek.nama_bproyek', 'pekerja.nama_pekerja') // Menambahkan nama pekerja ke select
        ->where('proyek.id_bproyek', 4)
        ->when($search, function ($query, $search) {
            $query->where('proyek.nama_proyek', 'like', '%' . $search . '%');
        })
        ->paginate(10);

    return view('project.sewa-alat', compact('projects'));
    }

    public function construction(Request $request)
    {
        // Ambil query search dari parameter URL
        $search = $request->get('search');

        // Mengambil data dengan pagination (maksimal 10) dan filter berdasarkan pencarian
        $projects = ProyekModel::join('bidang_proyek', 'proyek.id_bproyek', '=', 'bidang_proyek.id_bproyek')
        ->join('pekerja', 'proyek.id_pekerja', '=', 'pekerja.id_pekerja') // Menambahkan join dengan tabel pekerja
        ->select('proyek.*', 'bidang_proyek.nama_bproyek', 'pekerja.nama_pekerja') // Menambahkan nama pekerja ke select
        ->where('proyek.id_bproyek', 4)
        ->when($search, function ($query, $search) {
            $query->where('proyek.nama_proyek', 'like', '%' . $search . '%');
        })
        ->paginate(10);

    return view('project.construction', compact('projects'));
    }

    public function pengadaan(Request $request)
    {
        // Ambil query search dari parameter URL
        $search = $request->get('search');

        // Mengambil data dengan pagination (maksimal 10) dan filter berdasarkan pencarian
        $projects = ProyekModel::join('bidang_proyek', 'proyek.id_bproyek', '=', 'bidang_proyek.id_bproyek')
        ->join('pekerja', 'proyek.id_pekerja', '=', 'pekerja.id_pekerja') // Menambahkan join dengan tabel pekerja
        ->select('proyek.*', 'bidang_proyek.nama_bproyek', 'pekerja.nama_pekerja') // Menambahkan nama pekerja ke select
        ->where('proyek.id_bproyek', 4)
        ->when($search, function ($query, $search) {
            $query->where('proyek.nama_proyek', 'like', '%' . $search . '%');
        })
        ->paginate(10);

    return view('project.pengadaan', compact('projects'));
    }

    public function testing(Request $request)
    {
        // Ambil query search dari parameter URL
        $search = $request->get('search');

        // Mengambil data dengan pagination (maksimal 10) dan filter berdasarkan pencarian
        $projects = ProyekModel::join('bidang_proyek', 'proyek.id_bproyek', '=', 'bidang_proyek.id_bproyek')
        ->join('pekerja', 'proyek.id_pekerja', '=', 'pekerja.id_pekerja') // Menambahkan join dengan tabel pekerja
        ->select('proyek.*', 'bidang_proyek.nama_bproyek', 'pekerja.nama_pekerja') // Menambahkan nama pekerja ke select
        ->where('proyek.id_bproyek', 4)
        ->when($search, function ($query, $search) {
            $query->where('proyek.nama_proyek', 'like', '%' . $search . '%');
        })
        ->paginate(10);

    return view('project.t&m', compact('projects'));
    }

    public function web_project(Request $request)
    {
        $search = $request->get('search');
        $filterField = $request->get('filter_field', 'no_kontrak');
        $filterBidang = $request->get('bidang');
        $filterPekerja = $request->get('pekerja');
        $filterTahunMulai = $request->get('tahun_mulai');
        $filterTahunSelesai = $request->get('tahun_selesai');
        $filterLokasi = $request->get('lokasi');


        $bidangList = BidangModel::pluck('nama_bproyek');
        $pekerjaList = PekerjaModel::pluck('nama_pekerja');

        // Ambil daftar tahun dari database
        $tahunMulaiList = ProyekModel::selectRaw('YEAR(tanggal_mulai) as tahun')
            ->distinct()->orderBy('tahun', 'desc')->pluck('tahun');

        $tahunSelesaiList = ProyekModel::selectRaw('YEAR(tanggal_selesai) as tahun')
            ->distinct()->orderBy('tahun', 'desc')->pluck('tahun');
        
        $lokasiList = ProyekModel::select('lokasi_klien')->distinct()->orderBy('lokasi_klien')->pluck('lokasi_klien');

        $projects = ProyekModel::join('bidang_proyek', 'proyek.id_bproyek', '=', 'bidang_proyek.id_bproyek')
            ->join('pekerja', 'proyek.id_pekerja', '=', 'pekerja.id_pekerja')
            ->select('proyek.*', 'bidang_proyek.nama_bproyek', 'pekerja.nama_pekerja')
            ->whereIn('pekerja.level_pekerja', [1, 2, 14, 15, 16, 18, 23])
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('proyek.nama_proyek', 'like', '%' . $search . '%')
                        ->orWhere('proyek.no_kontrak', 'like', '%' . $search . '%')
                        ->orWhere('proyek.nominal', 'like', '%' . $search . '%')
                        ->orWhere('proyek.lokasi_klien', 'like', '%' . $search . '%')
                        ->orWhere('proyek.nama_klien', 'like', '%' . $search . '%')
                        ->orWhereDate('proyek.tanggal_mulai', 'like', '%' . $search . '%')
                        ->orWhereDate('proyek.tanggal_selesai', 'like', '%' . $search . '%')
                        ->orWhere('proyek.no_brast', 'like', '%' . $search . '%')
                        ->orWhere('proyek.status', 'like', '%' . $search . '%')
                        ->orWhere('bidang_proyek.nama_bproyek', 'like', '%' . $search . '%')
                        ->orWhere('pekerja.nama_pekerja', 'like', '%' . $search . '%');
                });
            })
            ->when($filterBidang, fn($query) => $query->where('bidang_proyek.nama_bproyek', $filterBidang))
            ->when($filterPekerja, fn($query) => $query->where('pekerja.nama_pekerja', $filterPekerja))
            ->when($filterTahunMulai, fn($query) => $query->whereYear('proyek.tanggal_mulai', $filterTahunMulai))
            ->when($filterTahunSelesai, fn($query) => $query->whereYear('proyek.tanggal_selesai', $filterTahunSelesai))
            ->when($filterLokasi, fn($query) => $query->where('proyek.lokasi_klien', $filterLokasi))

            ->paginate(10);

        return view('project', compact(
            'projects',
            'filterField',
            'bidangList',
            'pekerjaList',
            'tahunMulaiList',
            'tahunSelesaiList',
            'lokasiList'
        ));
    }

}

?>