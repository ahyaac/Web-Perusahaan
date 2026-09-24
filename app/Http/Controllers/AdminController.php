<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use App\Models\ProyekModel;
use App\Models\PekerjaModel;
use App\Models\KlienModel;
use App\Models\BidangModel;
use App\Models\EquipmentModel;
use App\Models\LevelkerjaModel;
use App\Models\SertifikatModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function login_aksi(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'namaadmin' => 'required|string',
            'password' => 'required|min:8',
        ]);

        // Cari admin berdasarkan namaadmin
        $loginadmin = LoginModel::where('admin', $validated['namaadmin'])->first();

        // Cek kecocokan password
        if ($loginadmin && Hash::check($validated['password'], $loginadmin->katasandi)) {
            // Simpan data ke session
            session([
                'admin_id' => $loginadmin->id, // atau kolom yang sesuai
                'admin_nama' => $loginadmin->admin,
                'is_admin_logged_in' => true,
            ]);

            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['Invalid credentials, please try again.']);
        }
    }

    public function dashboard()
    {
        // Cek apakah sudah login
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $jumlahKlien = KlienModel::count();
        $jumlahProyek = ProyekModel::count();
        $jumlahPekerja = PekerjaModel::count();
        $jumlahBidang = BidangModel::count();
        $jumlahJabatan = LevelkerjaModel::count();
        $jumlahSertifikat = SertifikatModel::count();
        $jumlahEquipment = EquipmentModel::count();

        return view('admin.dashboard', compact('jumlahKlien', 'jumlahProyek', 'jumlahPekerja', 'jumlahBidang', 'jumlahJabatan', 'jumlahSertifikat', 'jumlahEquipment'));
    }


    

    public function editForm()
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        // Gunakan admin (username) sebagai primary key
        $adminUsername = session('admin_nama');
        $admin = LoginModel::find($adminUsername);

        if (!$admin) {
            return redirect()->route('admin/form-login')->withErrors(['Data admin tidak ditemukan.']);
        }

        return view('admin.edit', compact('admin'));
    }

    public function updateAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'admin' => 'required|string|max:255',
            'katasandi' => 'nullable|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $oldUsername = session('admin_nama');
        $admin = LoginModel::where('admin', $oldUsername)->first();

        if (!$admin) {
            return redirect()->route('admin/form-login')->withErrors(['Data admin tidak ditemukan.']);
        }

        // Update username
        $admin->admin = $request->admin;

        // Update password jika diisi
        if ($request->filled('katasandi')) {
            $admin->katasandi = Hash::make($request->katasandi);
        }

        $admin->save();

        // Update session dengan username baru
        session(['admin_nama' => $request->admin]);

        return redirect()->route('admin.dashboard')->with('success', 'Data admin berhasil diperbarui.');
    }

    public function logout()
    {
        session()->flush(); // Hapus semua session
        return redirect()->route('home');
    }
}
