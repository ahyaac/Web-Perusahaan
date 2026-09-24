<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KlienModel extends Model
{
    use HasFactory;

    protected $table = 'klien'; // Nama tabel
    protected $primaryKey = 'id_klien';

    protected $fillable = [
        'nama_klien','alamat_klien', 'telp_klien'
    ];

    public $timestamps = false;
}
