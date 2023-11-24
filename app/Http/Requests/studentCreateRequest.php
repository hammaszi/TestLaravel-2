<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class studentCreateRequest extends FormRequest
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
            'nis' => 'unique:students|max:8|required',
            'nama_siswa' => 'max:50|required',
            'gender' => 'required',
            'class_id' => 'required',
            'alamat' => 'required'
        ];
    }

    public function attributes()
    {
        return[
            'class_id' => 'class',
        ];
    }

    public function messages()
    {
        return[
            'nis.required' => 'NIS harus diisi',
            'nis.max' => 'NIS terdiri maksimal :max karakter',
            'nama_siswa.required' => 'Nama harus diisi',
            'gender.required' => 'Jenis Kelamin harus diisi',
            'class_id.required' => 'Kelas harus diisi',
            'alamat.required' => 'Alamat harus diisi',

        ];
    }
}
