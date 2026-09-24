<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LevelkerjaModel;

class JabatanController extends Controller
{
    public function semua(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }
        $search = $request->get('search');

        $jabatan = LevelkerjaModel::query()
        ->when($search, function ($query, $search) {
            return $query->where('nama_jabatan', 'like', '%' . $search . '%');
        })->paginate(5);

        return view('admin.jabatan', compact('jabatan'));
    }

    public function tambah_jabatan()
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $jabatan = LevelkerjaModel::all();

        return view('admin.tambah-jabatan', compact('jabatan'));
    }

    public function simpan(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $validate = $request->validate([
            'nama_jabatan' => 'required|string|max:255',
        ]);

        LevelkerjaModel::create([
            'jabatan_pekerja' => $request->nama_jabatan,
        ]);

        return redirect()->route('admin/jabatan/semua')->with('Succes', 'Jabatan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $jabatan = LevelkerjaModel::findOrFail($id);

        return view('admin.edit-jabatan', compact('jabatan'));
    }

    public function update_jabatan($id, Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
        ]);

        $jabatan = LevelkerjaModel::findOrFail($id);

        $jabatan->jabatan_pekerja = $request->nama_jabatan;

        $jabatan->save();

        return redirect()->route('admin/jabatan/semua')->with('Succes', 'Jabatan berhasil diperbaharui.');
    }

    public function hapus_jabatan($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $jabatan = LevelkerjaModel::findOrFail($id);

        $jabatan->delete();

        return redirect()->route('admin/jabatan/semua')->with('Succes', 'Jabatan berhasil dihapus.');
    }
}
?>