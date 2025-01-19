<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KriteriaRequest extends FormRequest
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
            'kode_kriteria' => ['required', 'string', 'max:255'],
            'nama_kriteria' => ['required', 'string', 'max:255'],
            'bobot_kriteria' => ['required', 'integer'],
            'tipe_kriteria' => ['required', 'in:benefit,cost'],
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
            'kode.required' => 'Kode Kriteria harus diisi',
            'kode.string' => 'Kode Kriteria harus berupa string',
            'kode.max' => 'Kode Kriteria maksimal 255 karakter',
            'nama_kriteria.required' => 'Nama Kriteria harus diisi',
            'nama_kriteria.string' => 'Nama Kriteria harus berupa string',
            'nama_kriteria.max' => 'Nama Kriteria maksimal 255 karakter',
            'bobot_kriteria.required' => 'Bobot Kriteria harus diisi',
            'bobot_kriteria.integer' => 'Bobot Kriteria harus berupa angka',
            'tipe_kriteria.required' => 'Tipe Kriteria harus diisi',
            'tipe_kriteria.in' => 'Tipe Kriteria harus berupa benefit atau cost',
        ];
    }
}
