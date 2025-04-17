<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';

    protected $fillable = [
        'id',
        'nopol',
        'thn_kendaraan',
        'no_mesin',
        'no_rangka',
        'kapasitas_mesin',
        'transmisi',
    ];
}
