<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaBeli extends Model
{
    use HasFactory;

    protected $table = 'ref_weapons_harga_beli';

    protected $fillable = [
        'id_weapon',
        'id_badside',
        'harga_beli',
        'status',
        'keterangan',
        'created_by',
        'updated_by',
    ];
}
