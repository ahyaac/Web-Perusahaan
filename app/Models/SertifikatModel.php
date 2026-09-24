<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertifikatModel extends Model
{
    use HasFactory;

    protected $table = 'sertifkat'; // Nama tabel
    protected $primaryKey = 'id_sertifikat';

    protected $fillable = [
        'nama_sertifikat','dokumen_sertifikat'
    ];

    public $timestamps = false;
}
