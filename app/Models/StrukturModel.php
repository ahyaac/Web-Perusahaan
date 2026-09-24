<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturModel extends Model
{
    use HasFactory;

    protected $table = 'struktural'; // Nama tabel
    protected $primaryKey = 'id_struktur';

    protected $fillable = [
        'nama_struktural','gambar_struktural'
    ];

    public $timestamps = false;
}
