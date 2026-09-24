<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangModel extends Model
{
    use HasFactory;

    protected $table = 'bidang_proyek'; // Nama tabel
    protected $primaryKey = 'id_bproyek';

    protected $fillable = [
        'nama_bproyek'
    ];

    public $timestamps = false;
}
