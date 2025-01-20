<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiap extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'C1',
        'C2',
        'C3',
        'C4',
        'C5',
        'C6',
        'C7',
        'C8',
        'C9',
        'vektor_s',
        'vektor_v',
        'proses',
    ];
}
