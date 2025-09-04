<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapons extends Model
{
    use HasFactory;

    protected $table = 'ref_weapons';

    protected $fillable = [
        'nama',
        'tipe',
        'is_crafting',
        'status',
        'keterangan',
        'foto',
        'created_by',
        'updated_by',
    ];
}
