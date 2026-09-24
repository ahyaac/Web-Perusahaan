<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LevelkerjaModel;

class PekerjaModel extends Model
{
    use HasFactory;

    protected $table = 'pekerja'; // Nama tabel

    protected $primaryKey = 'id_pekerja';

    protected $fillable = [
        'nama_pekerja', 'level_pekerja','foto_pekerja','alamat','pendidikan','jenis_kelamin','status_pekerja','nik_pekerja','tgl_lahir','tgl_masuk'
    ];

    public function Levelpekerja()
    {
        return $this->belongsTo(LevelkerjaModel::class,'level_pekerja');

    }

    public function proyek()
    {
        return $this->hasMany(ProyekModel::class, 'id_pekerja', 'id_pekerja');
    }
}
