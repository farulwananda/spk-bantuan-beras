<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasyarakatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kode' => ['required', 'string', 'max:255'],
            'id_kepala_keluarga' => ['required', 'string', 'max:255'],
            'provinsi' => ['required', 'string', 'max:255'],
            'kabupaten_kota' => ['required', 'string', 'max:255'],
            'kecamatan' => ['required', 'string', 'max:255'],
            'desa_kelurahan' => ['required', 'string', 'max:255'],
            'desil_kesejahteraan' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string'],
            'kepala_keluarga' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'string', 'max:255'],
            'padan_dukcapil' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'string', 'max:255'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'kepemilikan_rumah' => ['required', 'string', 'max:255'],
            'jenis_atap' => ['required', 'string', 'max:255'],
            'jenis_dinding' => ['required', 'string', 'max:255'],
            'jenis_lantai' => ['required', 'string', 'max:255'],
            'sumber_penerangan' => ['required', 'string', 'max:255'],
            'bahan_bakar_memasak' => ['required', 'string', 'max:255'],
            'sumber_air_minum' => ['required', 'string', 'max:255'],
            'fasilitas_bab' => ['required', 'string', 'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'kode.required' => 'Kode harus diisi',
            'id_kepala_keluarga.required' => 'Id Kepala Keluarga harus diisi',
            'provinsi.required' => 'Provinsi harus diisi',
            'kabupaten_kota.required' => 'Kabupaten Kota harus diisi',
            'kecamatan.required' => 'Kecamatan harus diisi',
            'desa_kelurahan.required' => 'Desa Kelurahan harus diisi',
            'desil_kesejahteraan.required' => 'Desil Kesejahteraan harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'kepala_keluarga.required' => 'Kepala Keluarga harus diisi',
            'nik.required' => 'Nik harus diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin harus diisi',
            'padan_dukcapil.required' => 'Padan Dukcapil harus diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir harus diisi',
            'pekerjaan.required' => 'Pekerjaan harus diisi',
            'kepemilikan_rumah.required' => 'Kepemilikan Rumah harus diisi',
            'jenis_atap.required' => 'Jenis Atap harus diisi',
            'jenis_dinding.required' => 'Jenis Dinding harus diisi',
            'jenis_lantai.required' => 'Jenis Lantai harus diisi',
            'sumber_penerangan.required' => 'Sumber Penerangan harus diisi',
            'bahan_bakar_memasak.required' => 'Bahan Bakar Memasak harus diisi',
            'sumber_air_minum.required' => 'Sumber Air Minum harus diisi',
            'fasilitas_bab.required' => 'Fasilitas Bab harus diisi',
            'kode.string' => 'Kode harus berupa string',
            'id_kepala_keluarga.string' => 'Id Kepala Keluarga harus berupa string',
            'provinsi.string' => 'Provinsi harus berupa string',
            'kabupaten_kota.string' => 'Kabupaten Kota harus berupa string',
            'kecamatan.string' => 'Kecamatan harus berupa string',
            'desa_kelurahan.string' => 'Desa Kelurahan harus berupa string',
            'desil_kesejahteraan.string' => 'Desil Kesejahteraan harus berupa string',
            'alamat.string' => 'Alamat harus berupa string',
            'kepala_keluarga.string' => 'Kepala Keluarga harus berupa string',
            'nik.string' => 'Nik harus berupa string',
            'jenis_kelamin.string' => 'Jenis Kelamin harus berupa string',
            'padan_dukcapil.string' => 'Padan Dukcapil harus berupa string',
            'tanggal_lahir.string' => 'Tanggal Lahir harus berupa string',
            'pekerjaan.string' => 'Pekerjaan harus berupa string',
            'kepemilikan_rumah.string' => 'Kepemilikan Rumah harus berupa string',
            'jenis_atap.string' => 'Jenis Atap harus berupa string',
            'jenis_dinding.string' => 'Jenis Dinding harus berupa string',
            'jenis_lantai.string' => 'Jenis Lantai harus berupa string',
            'sumber_penerangan.string' => 'Sumber Penerangan harus berupa string',
            'bahan_bakar_memasak.string' => 'Bahan Bakar Memasak harus berupa string',
            'sumber_air_minum.string' => 'Sumber Air Minum harus berupa string',
            'fasilitas_bab.string' => 'Fasilitas Bab harus berupa string',
            'kode.max' => 'Kode maksimal 255 karakter',
            'id_kepala_keluarga.max' => 'Id Kepala Keluarga maksimal 255 karakter',
            'provinsi.max' => 'Provinsi maksimal 255 karakter',
            'kabupaten_kota.max' => 'Kabupaten Kota maksimal 255 karakter',
            'kecamatan.max' => 'Kecamatan maksimal 255 karakter',
            'desa_kelurahan.max' => 'Desa Kelurahan maksimal 255 karakter',
            'desil_kesejahteraan.max' => 'Desil Kesejahteraan maksimal 255 karakter',
            'kepala_keluarga.max' => 'Kepala Keluarga maksimal 255 karakter',
            'nik.max' => 'Nik maksimal 255 karakter',
            'jenis_kelamin.max' => 'Jenis Kelamin maksimal 255 karakter',
            'padan_dukcapil.max' => 'Padan Dukcapil maksimal 255 karakter',
            'tanggal_lahir.max' => 'Tanggal Lahir maksimal 255 karakter',
            'pekerjaan.max' => 'Pekerjaan maksimal 255 karakter',
            'kepemilikan_rumah.max' => 'Kepemilikan Rumah maksimal 255 karakter',
            'jenis_atap.max' => 'Jenis Atap maksimal 255 karakter',
            'jenis_dinding.max' => 'Jenis Dinding maksimal 255 karakter',
            'jenis_lantai.max' => 'Jenis Lantai maksimal 255 karakter',
            'sumber_penerangan.max' => 'Sumber Penerangan maksimal 255 karakter',
            'bahan_bakar_memasak.max' => 'Bahan Bakar Memasak maksimal 255 karakter',
            'sumber_air_minum.max' => 'Sumber Air Minum maksimal 255 karakter',
            'fasilitas_bab.max' => 'Fasilitas Bab maksimal 255 karakter',
        ];
    }
}
