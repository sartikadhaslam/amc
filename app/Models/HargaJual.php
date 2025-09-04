<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaJual extends Model
{
    use HasFactory;

    protected $table = 'ref_weapons_harga_jual';

    protected $fillable = [
        'id_weapon',
        'id_badside',
        'harga_jual',
        'status',
        'keterangan',
        'created_by',
        'updated_by',
    ];
}
