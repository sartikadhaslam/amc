<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badsides extends Model
{
    use HasFactory;

    protected $table = 'ref_badside';

    protected $fillable = [
        'kode',
        'nama',
        'keterangan',
        'cp',
        'phone',
        'aktif',
        'created_by',
        'updated_by',
    ];
}
