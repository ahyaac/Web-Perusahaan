<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SertifikatModel;

class SertifikatController extends Controller
{
    public function semua(Request $request)
    {
         if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }
        $search = $request->get('search');

        $sertifikat = SertifikatModel::query()
        ->when($search, function ($query, $search) {
            return $query->where('nama_sertifikat', 'like', '%' . $search . '%');
        })->paginate(5);

        return view('admin.sertifikat', compact('sertifikat'));
    }

    public function tambah_sertifikat(){
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        return view('admin.tambah-sertifikat');
    }

    public function simpan(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $validate = $request->validate([
            'nama_sertifikat' => 'required|string|max:255',
            'dokumen_sertifikat' => 'required|mimes:pdf|max:2048'
        ]);

        // Ambil file dari request
        $file = $request->file('dokumen_sertifikat');

        // Simpan file ke folder storage/public/
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('dokumen_sertifikat', $namaFile, 'public');

        SertifikatModel::create([
            'nama_sertifikat' => $request->nama_sertifikat,
            'dokumen_sertifikat' => $namaFile
        ]);

        return redirect()->route('admin/sertifikat/semua')->with('Succes', 'Equipment ini berhasil ditambahkan');
    }

    public function hapus_sertifikat($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $sertifikat = SertifikatModel::findOrFail($id);
        $sertifikat->delete();
        return redirect()->route('admin/sertifikat/semua')->with('Succes','Equipment ini berhasil dihapus');
        
    }

    public function edit_sertifikat($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $sertifikat = SertifikatModel::findOrfail($id);

        return view('admin.edit-sertifikat', compact('sertifikat'));
    }

    public function update_sertifikat(Request $request, $id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };


        $request->validate([
            'nama_sertifikat' => 'required|string|max:255',
            'dokumen_sertifikat' => 'nullable|mimes:pdf|max:2048',
        ]);

        $sertifikat = SertifikatModel::findOrFail($id);

        $sertifikat->nama_sertifikat = $request->nama_sertifikat;


        if ($request->hasFile('dokumen_sertifikat')) {
            $file = $request->file('dokumen_sertifikat');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('dokumen_sertifikat', $namaFile, 'public');
            $sertifikat->dokumen_sertifikat = $namaFile;
        }

        $sertifikat->save();

        return redirect()->route('admin/sertifikat/semua')->with('succes', 'Data Proyek Berhasil Diperbaharui.');
    }


    public function web_sertifikat(Request $request)
    {
        $search = $request->get('search');

        $sertifikat = SertifikatModel::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama_sertifikat', 'like', '%' . $search . '%');
            })
            ->paginate(4);

        return view('legalitas', compact('sertifikat', 'search'));
    }


}