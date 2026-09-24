<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidangModel;

class BidangController extends Controller
{
    public function ShowBidang()
    {
        $namaBidang = BidangModel::where('id_bproyek', 1)->value('nama_bproyek');
        return view('maintenance', compact('namaBidang'));
    }

    public function semua(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        // Ambil query search dari parameter URL
        $search = $request->get('search');

        // Menggunakan pagination dan query filter berdasarkan search
        $bidang = BidangModel::query()
        ->when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%');
        })->paginate(10);  // Gunakan paginate, bukan get

        return view('admin.bidang', compact('bidang'));
    }

    public function tambah_bidang()
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }
        
        $bidang = BidangModel::all();

        return view('admin.tambah-bidang', compact('bidang'));
    }

    public function simpan(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $validated = $request->validate([
            'nama_bidang' => 'required|string|max:255',
        ]);

        BidangModel::create([
            'nama_bproyek' => $request->nama_bidang,
        ]);

        return redirect()->route('admin/bidang/semua')->with('succes','Bidang berhasil ditambahkan');

    }

    public function edit($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $bidang = BidangModel::findOrFail($id);

        return view('admin.edit-bidang', compact('bidang'));
    }

    public function update_bidang($id, Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $request->validate([
            'nama_bidang' => 'required|string|max:255',
        ]);

        $bidang = BidangModel::findOrFail($id);

        $bidang->nama_bproyek = $request->nama_bidang;

        $bidang->save();

        return redirect()->route('admin/bidang/semua')->with('Succes','Data bidang berhasil diperbaharui');

    }

    public function hapus_bidang($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $bidang = BidangModel::findOrFail($id);

        $bidang->delete();

        return redirect()->route('admin/bidang/semua')->with('Succes','Data bidang berhasil dihapus');
    }


}
?>