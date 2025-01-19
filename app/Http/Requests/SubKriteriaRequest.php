<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubKriteriaRequest extends FormRequest
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
            'nama_subkriteria' => ['required', 'string', 'max:255'],
            'nilai' => ['required', 'integer'],
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
            'nama_subkriteria.required' => 'Nama Sub Kriteria harus diisi',
            'nama_subkriteria.string' => 'Nama Sub Kriteria harus berupa string',
            'nama_subkriteria.max' => 'Nama Sub Kriteria maksimal 255 karakter',
            'nilai.required' => 'Nilai harus diisi',
            'nilai.integer' => 'Nilai harus berupa angka',
        ];
    }
}
