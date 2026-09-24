<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PekerjaModel;
use App\Models\BidangModel;
use App\Models\KlienModel;

class ProyekModel extends Model
{
    use HasFactory;

    protected $table = 'proyek';

    protected $primaryKey = 'id_proyek'; // karena kolom primary key-nya bukan "id"

    protected $fillable = [
        'nama_proyek', 
        'no_kontrak', 
        'tanggal_mulai', 
        'tanggal_selesai',
        'status', 
        'id_pekerja', 
        'id_bproyek',
        'id_klien', 
        'nama_klien',
        'lokasi_klien',
        'no_brast',
        'nominal', 
        'alamat_klien', 
        'telp_klien'
    ];

    // Relasi ke Pekerja
    public function pekerja()
    {
        return $this->belongsTo(PekerjaModel::class, 'id_pekerja');

    }

    // Relasi ke Bidang Proyek
    public function bidang()
    {
        return $this->belongsTo(BidangModel::class, 'id_bproyek');
    }

    // Relasi ke klien
    public function klien()
    {
        return $this->belongsTo(KlienModel::class, 'id_klien');
    }
}
