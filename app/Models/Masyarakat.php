<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

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

    protected function tanggalLahirForInput(): Attribute
    {
        return Attribute::make(
            get: fn ($value, array $attributes) => isset($attributes['tanggal_lahir'])
                ? Carbon::parse($attributes['tanggal_lahir'])->format('Y-m-d')
                : null,
        );
    }

    /**
     * Set the tanggal_lahir.
     */
    protected function tanggalLahir(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Carbon::parse($value)->format('d/m/Y') : null,
            set: fn ($value) => $value ? Carbon::parse($value) : null,
        );
    }
}
