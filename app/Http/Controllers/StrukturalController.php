<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\StrukturModel;

class StrukturalController extends Controller
{
    public function semua(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }
        $search = $request->get('search');

        $struktural = StrukturModel::query()
        ->when($search, function ($query, $search) {
            return $query->where('nama_struktural', 'like', '%' . $search . '%');
        })->paginate(5);

        return view('admin.struktural', compact('struktural'));
    }

    public function tambah_struktur(){
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        return view('admin.tambah-struktur');
    }

    public function simpan(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $validate = $request->validate([
            'nama_struktural' => 'required|string|max:255',
            'gambar_struktural' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Ambil file dari request
        $file = $request->file('gambar_struktural');

        // Simpan file ke folder storage/public/
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('foto_struktural', $namaFile, 'public');

        StrukturModel::create([
            'nama_struktural' => $request->nama_struktural,
            'gambar_struktural' => $namaFile
        ]);

        return redirect()->route('admin/struktur/semua')->with('Succes', 'Equipment ini berhasil ditambahkan');
    }

    public function edit_struktur($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $struktural = StrukturModel::first(); 

        return view('admin.edit-struktur', compact('struktural'));
    }

    public function update_struktur(Request $request, $id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $request->validate([
            'nama_struktural' => 'required|string|max:255',
            'gambar_struktural' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $struktural = StrukturModel::findOrFail($id);

        $struktural->nama_struktural = $request->nama_struktural;

        
        
        if ($request->hasFile('gambar_struktural')) {
            $file = $request->file('gambar_struktural');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('foto_struktural', $namaFile, 'public');
            $struktural->gambar_struktural = $namaFile;
        }
        
        $struktural->save();

        return redirect()->route('admin/struktur/semua')->with('succes', 'Data Proyek Berhasil Diperbaharui.');
    }

}