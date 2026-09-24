<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PekerjaModel;
use App\Models\ProyekModel;
use App\Models\KlienModel;
use App\Models\StrukturModel;
use Carbon\Carbon;

class StatistikController extends Controller
{
    public function index()
    {
        // Hitung jumlah total pekerja
        $totalPekerja = PekerjaModel::count();

        // Hitung jumlah total proyek
        $totalProyek = ProyekModel::count();
        $jumlahklien = KlienModel::count();;
        $proyekSelesai = ProyekModel::where('status', 'Selesai')->count();


        // Kirim data ke view
        return view('home', compact('totalPekerja', 'totalProyek', 'proyekSelesai','jumlahklien'));
    }

    public function struktural()
    {
        $struktural = StrukturModel::first(); // ambil satu data (misalnya baris pertama)
        return view('tim-kami', compact('struktural'));
    }



    public function admin_statistik()

    {

        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }
    
        // Hitung statistik dasar
        $totalPekerja = PekerjaModel::count();
        $totalProyek = ProyekModel::count();
        $klienUnik = ProyekModel::select('nama_klien')->distinct()->get();
        $proyekSelesai = ProyekModel::where('status', 'Selesai')->count();
        $proyekProses = ProyekModel::where('status', 'Proses')->count();
    
        // Ambil data proyek per bulan
        $proyekPerBulan = ProyekModel::whereNotNull('created_at')
            ->selectRaw('DATE_FORMAT(created_at, "%Y-%m") as periode, COUNT(*) as jumlah')
            ->groupBy('periode')
            ->orderBy('periode')
            ->get();
    
        // Siapkan data untuk grafik
        $bulanLabels = [];
        $jumlahProyekPerBulan = [];
    
        foreach ($proyekPerBulan as $item) {
            if ($item->periode && preg_match('/^\d{4}-\d{2}$/', $item->periode)) {
                try {
                    $bulanLabels[] = \Carbon\Carbon::createFromFormat('Y-m', $item->periode)->translatedFormat('F Y');
                    $jumlahProyekPerBulan[] = $item->jumlah;
                } catch (\Exception $e) {
                    // Abaikan data yang tidak valid
                    continue;
                }
            }
        }


        // Kirim data ke view
        return view('admin.statistik.statistik', compact('totalPekerja', 'totalProyek', 'proyekSelesai', 'proyekProses', 'bulanLabels',
        'jumlahProyekPerBulan','klienUnik'));
    }

    public function home_klien(){
        
    }
}
