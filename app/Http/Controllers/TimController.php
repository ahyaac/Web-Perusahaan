<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PekerjaModel;
use App\Models\LevelkerjaModel;

class TimController extends Controller
{
    public function ShowManager(Request $request)
    {
        // Ambil query search dari parameter URL
        $search = $request->get('search');

        // Mengambil data dengan pagination (maksimal 10) dan filter berdasarkan pencarian
        // Controller method
        $jabatan = PekerjaModel::join('level_pekerja', 'pekerja.level_pekerja', '=', 'level_pekerja.id_levelkerja')
        ->select('pekerja.nama_pekerja', 'level_pekerja.jabatan_pekerja') 
        ->where('pekerja.level_pekerja', 1)
        ->when($search, function ($query, $search) {
            $query->where('pekerja.nama_pekerja', 'like', '%' . $search . '%');
        })
        ->paginate(10);

    return view('team.project-manager', compact('jabatan'));
    }

    public function semua(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        // Ambil query search dari parameter URL
        $search = $request->get('search');

        // Menggunakan pagination dan query filter berdasarkan search
        $pekerja = PekerjaModel::with('Levelpekerja')
        ->when($search, function ($query, $search) {
            return $query->where('nama_pekerja', 'like', '%' . $search . '%');
        })->paginate(10);  // Gunakan paginate, bukan get

        return view('admin.pekerja', compact('pekerja'));
    }

    public function tambah_pekerja()
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $pekerja = PekerjaModel::all();
        $level = LevelkerjaModel::all();

        return view('admin.tambah-pekerja', compact('pekerja','level'));
    }

    public function simpan(Request $request)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $validated = $request->validate([
            'nama_pekerja' => 'required|string|max:255',
            'id_levelkerja' => 'required|integer',
            'nik_pekerja' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            'alamat' => 'required|string|max:200',
            'pendidikan' => 'required|string|in:tidak-sekolah,sd,smp,sltp,mts,sma,slta,smea,stm,smk,diploma-3,strata-1,strata-2,strata-3',
            'jenis_kelamin' => 'required|string|in:laki-laki,perempuan',
            'status' => 'required|string|in:tetap,tidak-tetap',
            'tgl_lahir' => 'required|date',
            'tgl_masuk' => 'required|date',


        ]);

        
        // Ambil file dari request
        $file = $request->file('foto');

        // Simpan file ke folder storage/public/foto_pekerja
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('foto_pekerja', $namaFile, 'public');


        


        PekerjaModel::create([
            'nama_pekerja' => $request->nama_pekerja,
            'level_pekerja' => $request->id_levelkerja,
            'nik_pekerja' => $request->nik_pekerja,
            'alamat' => $request->alamat,
            'pendidikan' => $request->pendidikan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_pekerja' => $request->status,
            'foto_pekerja' => $namaFile,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_masuk' => $request->tgl_masuk,

        ]);

        return redirect()->route('admin/pekerja/semua')->with('success', 'Proyek berhasil ditambahkan!');
    }

    public function detail_pekerja($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $pekerja = PekerjaModel::with('Levelpekerja')->findOrFail($id);

        return view('admin.detail-pekerja', compact('pekerja'));
    }

    public function hapus_pekerja($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $pekerja = PekerjaModel::with('Levelpekerja')->findOrFail($id);

        $pekerja->delete();
        
        return redirect()->route('admin/pekerja/semua')->with('success', 'Proyek berhasil dihapus.');
    }

    public function edit_pekerja($id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $pekerja = PekerjaModel::findOrFail($id);
        $level = LevelkerjaModel::all();

        return view('admin.edit-pekerja', compact('pekerja','level'));
    }

    public function update_pekerja(Request $request, $id)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $request->validate([
            'nama_pekerja' => 'required|string|max:255',
            'id_levelkerja' => 'required|integer',
            'nik_pekerja' => 'required|string|max:255',
            'alamat' => 'required|string|max:200',
            'pendidikan' => 'required|string|in:tidak-sekolah,sd,Smp,sltp,mts,sma,slta,smea,stm,smk,diploma-3,strata-1,strata-2,strata-3',
            'jenis_kelamin' => 'required|string|in:laki-laki,perempuan',
            'status' => 'required|string|in:tetap,tidak-tetap',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tgl_lahir' => 'required|date',
            'tgl_masuk' => 'required|date',

        ]);

        $pekerja = PekerjaModel::findOrFail($id);

        $pekerja->nama_pekerja = $request->nama_pekerja;
        $pekerja->level_pekerja = $request->id_levelkerja;
        $pekerja->nik_pekerja = $request->nik_pekerja;
        $pekerja->alamat = $request->alamat;
        $pekerja->pendidikan = $request->pendidikan;
        $pekerja->jenis_kelamin = $request->jenis_kelamin;
        $pekerja->status_pekerja = $request->status;
        $pekerja->tgl_lahir = $request->tgl_lahir;
        $pekerja->tgl_masuk = $request->tgl_masuk;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('foto_pekerja', $namaFile, 'public');
            $pekerja->foto_pekerja = $namaFile;
        }
        
        $pekerja->save();

        return redirect()->route('admin/pekerja/detail',['id'=>$id])->with('succes', 'Data Proyek Berhasil Diperbaharui.'); 
    }

    public function riwayat($id)
    {
        $pekerja = PekerjaModel::with('proyek')->findOrFail($id);
        return view('admin.pekerja.histori', compact('pekerja'));
    }

}
?>