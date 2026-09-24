<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentModel extends Model
{
    use HasFactory;

    protected $table = 'equipment'; // Nama tabel
    protected $primaryKey = 'id_equipment';

    protected $fillable = [
        'namaquipment','gambarquipment'
    ];

    public $timestamps = false;
}
