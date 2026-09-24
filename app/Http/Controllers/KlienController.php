<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\ProyekModel;
use App\Models\KlienModel;

class KlienController extends Controller
{
    public function ShowKlien()
    {
        $namaKlien = KlienModel::paginate(5);

        return view('klien-mse', compact('namaKlien'));
    
    }

    public function semua(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }
        $search = $request->get('search');

        $klien = KlienModel::query()
        ->when($search, function ($query, $search) {
            return $query->where('nama_klien', 'like', '%' . $search . '%');
        })->paginate(5);

        return view('admin.klien', compact('klien'));
    }

    public function tambah_klien(){
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        return view('admin.tambah-klien');
    }

    public function simpan(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $validate = $request->validate([
            'nama_klien' => 'required|string|max:255',
            'alamat_klien' => 'required|string|max:255',
            'telp_klien' => 'required|string|max:255'
        ]);

        KlienModel::create([
            'nama_klien' => $request->nama_klien,
            'alamat_klien' => $request->alamat_klien,
            'telp_klien' => $request->telp_klien,
            
        ]);

        return redirect()->route('admin/klien/semua')->with('Succes', 'Equipment ini berhasil ditambahkan');
    }

    public function hapus_klien($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $klien = KlienModel::findOrFail($id);
        $klien->delete();
        return redirect()->route('admin/klien/semua')->with('Succes','Equipment ini berhasil dihapus');
        
    }

    public function edit_klien($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $klien = KlienModel::findOrfail($id);

        return view('admin.edit-klien', compact('klien'));
    }

    public function update_klien(Request $request, $id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };


        $request->validate([
            'nama_klien' => 'required|string|max:255',
            'alamat_klien' => 'required|string|max:255',
            'telp_klien' => 'required|string|max:255'
        ]);

        $klien = KlienModel::findOrFail($id);

        $klien->nama_klien = $request->nama_klien;
        $klien->alamat_klien = $request->alamat_klien;
        $klien->telp_klien = $request->telp_klien;

        $klien->save();

        return redirect()->route('admin/klien/semua')->with('succes', 'Data Proyek Berhasil Diperbaharui.');
    }


}

?>