<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\StrukturalController;


//statistik
Route::get('/', [StatistikController::class, 'index'])->name('home'); // Halaman utama dengan data statistik
Route::get('tim-kami', [StatistikController::class, 'struktural'])->name('tim-kami'); 
Route::get('admin/statistik', [StatistikController::class, 'admin_statistik'])->name('admin/statistik');


//Klien
Route::get('admin/klien/semua', [KlienController::class, 'semua'])->name('admin/klien/semua');
Route::get('admin/klien/tambah-klien', [KlienController::class, 'tambah_klien'])->name('admin/klien/tambah-klien');
Route::delete('admin/klien/hapus-klien/{id}', [KlienController::class, 'hapus_klien'])->name('admin/klien/hapus-klien');
Route::post('admin/klien/simpan', [KlienController::class, 'simpan'])->name('admin/klien/simpan');
Route::get('admin/klien/edit/{id}', [KlienController::class, 'edit_klien'])->name('admin/klien/edit');
Route::put('admin/klien/update/{id}',[KlienController::class,'update_klien'])->name('admin/klien/update');

//Struktur
Route::get('admin/struktur/semua', [StrukturalController::class, 'semua'])->name('admin/struktur/semua');
Route::get('admin/struktur/tambah-struktur', [StrukturalController::class, 'tambah_struktur'])->name('admin/struktur/tambah-struktur');
Route::delete('admin/struktur/hapus-struktur/{id}', [StrukturalController::class, 'hapus_struktur'])->name('admin/struktur/hapus-struktur');
Route::post('admin/struktur/simpan', [StrukturalController::class, 'simpan'])->name('admin/struktur/simpan');
Route::get('admin/struktur/edit/{id}', [StrukturalController::class, 'edit_struktur'])->name('admin/struktur/edit');
Route::put('admin/struktur/update/{id}',[StrukturalController::class,'update_struktur'])->name('admin/struktur/update');

//Project
Route::get('admin/project/semua', [ProjectController::class, 'semua'])->name('admin/project/semua');
Route::get('admin/project/tambah-project', [ProjectController::class, 'tambah_proyek'])->name('admin/project/tambah-project');
Route::delete('admin/project/hapus-project/{id}', [ProjectController::class, 'hapus_proyek'])->name('admin/project/hapus-project');
Route::post('admin/project/simpan', [ProjectController::class, 'simpan'])->name('admin/project/simpan');
Route::get('admin/project/detail/{id}', [ProjectController::class, 'detail_proyek'])->name('admin/project/detail');
Route::get('admin/project/edit/{id}', [ProjectController::class, 'edit_proyek'])->name('admin/project/edit');
Route::put('admin/project/update/{id}',[ProjectController::class,'update_proyek'])->name('admin/project/update');
Route::get('/project/semua', [ProjectController::class, 'web_project'])->name('/project/semua');


    
//admin
Route::post('admin/login', [AdminController::class, 'login_aksi'])->name('admin/login');
Route::get('admin/form-login', function () {
    return view('admin/login');
})->name('admin/form-login');
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');   
Route::get('admin/edit', [AdminController::class, 'editForm'])->name('admin.edit');   
Route::put('admin/update', [AdminController::class, 'updateAdmin'])->name('admin.update');   





Route::get('project/tambah', [ProjectController::class, 'tambah'])->name('project/tambah');
Route::get('project/maintenance', [ProjectController::class, 'maintenance'])->name('project/maintenance');
Route::get('project/electrical', [ProjectController::class, 'electrical'])->name('project/electrical');
Route::get('project/civil', [ProjectController::class, 'civil'])->name('project/civil');
Route::get('project/sewa-alat', [ProjectController::class, 'sewalat'])->name('project/sewa-alat');
Route::get('project/construction', [ProjectController::class, 'construction'])->name('project/construction');
Route::get('project/pengadaan', [ProjectController::class, 'pengadaan'])->name('project/pengadaan');
Route::get('project/testing-commissioning', [ProjectController::class, 'testing'])->name('project/testing-commissioning');

//pekerja
Route::get('admin/pekerja/semua',[TimController::class,'semua'])->name('admin/pekerja/semua');
Route::delete('admin/pekerja/hapus-pekerja/{id}', [TimController::class, 'hapus_pekerja'])->name('admin/pekerja/hapus-pekerja');
Route::get('admin/pekerja/detail/{id}', [TimController::class, 'detail_pekerja'])->name('admin/pekerja/detail');
Route::get('admin/pekerja/tambah-pekerja', [TimController::class, 'tambah_pekerja'])->name('admin/pekerja/tambah-pekerja');
Route::post('admin/pekerja/simpan', [TimController::class, 'simpan'])->name('admin/pekerja/simpan');
Route::get('admin/pekerja/edit/{id}', [TimController::class, 'edit_pekerja'])->name('admin/pekerja/edit');
Route::put('admin/pekerja/update/{id}',[TimController::class,'update_pekerja'])->name('admin/pekerja/update');
Route::get('admin/pekerja/history/{id}',[TimController::class,'histori'])->name('admin/pekerja/history');

//bidang
Route::get('admin/bidang/semua',[BidangController::class,'semua'])->name('admin/bidang/semua');
Route::delete('admin/bidang/hapus-bidang/{id}', [BidangController::class, 'hapus_bidang'])->name('admin/bidang/hapus-bidang');
Route::get('admin/bidang/tambah-bidang', [BidangController::class, 'tambah_bidang'])->name('admin/bidang/tambah-bidang');
Route::post('admin/bidang/simpan', [BidangController::class, 'simpan'])->name('admin/bidang/simpan');
Route::get('admin/bidang/edit/{id}', [BidangController::class, 'edit'])->name('admin/bidang/edit');
Route::put('admin/bidang/update/{id}',[BidangController::class,'update_bidang'])->name('admin/bidang/update');

//jabatan
Route::get('admin/jabatan/semua',[JabatanController::class,'semua'])->name('admin/jabatan/semua');
Route::delete('admin/jabatan/hapus-jabatan/{id}', [JabatanController::class, 'hapus_jabatan'])->name('admin/jabatan/hapus-jabatan');
Route::get('admin/jabatan/tambah-jabatan', [JabatanController::class, 'tambah_jabatan'])->name('admin/jabatan/tambah-jabatan');
Route::post('admin/jabatan/simpan', [JabatanController::class, 'simpan'])->name('admin/jabatan/simpan');
Route::get('admin/jabatan/edit/{id}', [JabatanController::class, 'edit'])->name('admin/jabatan/edit');
Route::put('admin/jabatan/update/{id}',[JabatanController::class,'update_jabatan'])->name('admin/jabatan/update');

//equipment
Route::get('admin/equipment/semua',[EquipmentController::class,'semua'])->name('admin/equipment/semua');
Route::get('admin/equipment/tambah-equipment',[EquipmentController::class, 'tambah_equipment'])->name('admin/equipment/tambah-equipment');
Route::delete('admin/equipment/hapus-equipment/{id}', [EquipmentController::class, 'hapus_equipment'])->name('admin/equipment/hapus-equipment');
Route::post('admin/equipment/simpan', [EquipmentController::class, 'simpan'])->name('admin/equipment/simpan');
Route::get('admin/equipment/edit/{id}', [EquipmentController::class, 'edit_equiment'])->name('admin/equipment/edit');
Route::put('admin/equipment/update/{id}',[EquipmentController::class,'update_equipment'])->name('admin/equipment/update');

Route::get('/equipment/semua', [EquipmentController::class, 'web_equipment'])->name('equipment.semua');

//sertifikat
Route::get('admin/sertifikat/semua',[SertifikatController::class,'semua'])->name('admin/sertifikat/semua');
Route::get('admin/sertifikat/tambah-sertifikat',[SertifikatController::class, 'tambah_sertifikat'])->name('admin/sertifikat/tambah-sertifikat');
Route::delete('admin/sertifikat/hapus-sertifikat/{id}', [SertifikatController::class, 'hapus_sertifikat'])->name('admin/sertifikat/hapus-sertifikat');
Route::post('admin/sertifikat/simpan', [SertifikatController::class, 'simpan'])->name('admin/sertifikat/simpan');
Route::get('admin/sertifikat/edit/{id}', [SertifikatController::class, 'edit_sertifikat'])->name('admin/sertifikat/edit');
Route::put('admin/sertifikat/update/{id}',[SertifikatController::class,'update_sertifikat'])->name('admin/sertifikat/update');

Route::get('/legalitas', [SertifikatController::class, 'web_sertifikat'])->name('legalitas');




Route::get('bidang', [BidangController::class, 'ShowBidang'])->name('bidang');

Route::get('klien', [KlienController::class, 'ShowKlien'])->name('klien');
Route::get('manager', [TimController::class, 'ShowManager'])->name('manager');


Route::get('instalasi', function () {
    return view('instalasi-kontruksi');
})->name('instalasi');

Route::get('perawatan-perbaikan', function () {
    return view('perawatan-perbaikan');
})->name('perawatan-perbaikan');

Route::get('pengujian', function () {
    return view('pengujian');
})->name('pengujian');

Route::get('portofolio', function () {
    return view('portofolio');
})->name('portofolio');


Route::get('tentang-mse', function () {
    return view('tentang-mse');
})->name('tentang-mse');






Route::get('contact-us', function () {
    return view('contact-us');
})->name('contact-us');

