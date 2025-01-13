<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'id_kepala_keluarga',
        'provinsi',
        'kabupaten_kota',
        'kecamatan',
        'desa_kelurahan',
        'desil_kesejahteraan',
        'alamat',
        'kepala_keluarga',
        'nik',
        'padan_dukcapil',
        'jenis_kelamin',
        'tanggal_lahir',
        'pekerjaan',
        'kepemilikan_rumah',
        'jenis_atap',
        'jenis_dinding',
        'jenis_lantai',
        'sumber_penerangan',
        'bahan_bakar_memasak',
        'sumber_air_minum',
        'fasilitas_bab',
    ];
}
