<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelkerjaModel extends Model
{
    use HasFactory;

    protected $table = 'level_pekerja'; // Nama tabel

    protected $primaryKey = 'id_levelkerja'; // Pastikan penulisannya benar

    protected $fillable = [
        'jabatan_pekerja'
    ];

    public $timestamps = false;
}

