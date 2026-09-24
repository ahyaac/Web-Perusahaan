<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EquipmentModel;

class EquipmentController extends Controller
{
    public function semua(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }
        $search = $request->get('search');

        $equipment = EquipmentModel::query()
        ->when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%');
        })->paginate(3);

        return view('admin.equipment', compact('equipment'));
    }

    public function tambah_equipment(){
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        return view('admin.tambah-equipment');
    }

    public function simpan(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $validate = $request->validate([
            'namaquipment' => 'required|string|max:255',
            'gambarquipment' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Ambil file dari request
        $file = $request->file('gambarquipment');

        // Simpan file ke folder storage/public/
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('foto_equipment', $namaFile, 'public');

        EquipmentModel::create([
            'namaquipment' => $request->namaquipment,
            'gambarquipment' => $namaFile
        ]);

        return redirect()->route('admin/equipment/semua')->with('Succes', 'Equipment ini berhasil ditambahkan');
    }

    public function hapus_equipment($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $equipment = EquipmentModel::findOrFail($id);
        $equipment->delete();
        return redirect()->route('admin/equipment/semua')->with('Succes','Equipment ini berhasil dihapus');
        
    }

    public function edit_equiment($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $equipment = EquipmentModel::findOrfail($id);

        return view('admin.edit-equipment', compact('equipment'));
    }

    public function update_equipment(Request $request, $id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        };

        $request->validate([
            'namaquipment' => 'required|string|max:255',
            'gambarquipment' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $equipment = EquipmentModel::findOrFail($id);

        $equipment->namaquipment = $request->namaquipment;

        
        
        if ($request->hasFile('gambarquipment')) {
            $file = $request->file('gambarquipment');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('foto_equipment', $namaFile, 'public');
            $equipment->gambarquipment = $namaFile;
        }
        
        $equipment->save();

        return redirect()->route('admin/equipment/semua')->with('succes', 'Data Proyek Berhasil Diperbaharui.');
    }

    public function web_equipment(Request $request)
    {
        $search = $request->search; // Ambil nilai pencarian dari input

        $equipment = EquipmentModel::query()
            ->when($search, function ($query, $search) {
                return $query->where('namaquipment', 'like', '%' . $search . '%');
            })
            ->paginate(100); // Misal: 6 item per halaman, bisa disesuaikan

        return view('equipment', compact('equipment'));
    }


}