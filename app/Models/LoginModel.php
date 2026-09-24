<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;

    protected $table = 'Login'; // Nama tabel persis
    protected $primaryKey = 'admin'; // Kolom 'admin' sebagai primary key
    public $incrementing = false; // Karena 'admin' bukan auto-increment
    protected $keyType = 'string'; // Karena 'admin' adalah varchar
    public $timestamps = false; // Nonaktifkan timestamps

    protected $fillable = [
        'admin',      // Nama admin (jika ingin bisa diisi massal)
        'katasandi',  // Sesuai nama kolom password di database
    ];
}
