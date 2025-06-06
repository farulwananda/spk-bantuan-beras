<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_kriteria',
        'nama_kriteria',
        'bobot_kriteria',
        'tipe_kriteria',
    ];

    public function subkriteria()
    {
        return $this->hasMany(SubKriteria::class);
    }
}
