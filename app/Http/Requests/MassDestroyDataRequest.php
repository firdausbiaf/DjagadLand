<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class MassDestroyDataRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Sesuaikan dengan aturan otorisasi yang sesuai untuk akses fitur ini
    }

    public function rules()
    {
        return [
            'ids' => 'required|array',
            'ids.*' => 'exists:data,id', // Memastikan bahwa semua ID yang dikirimkan benar-benar ada dalam tabel Data
        ];
    }

    public function messages()
    {
        return [
            'ids.required' => 'Anda harus memilih setidaknya satu data untuk dihapus.',
            'ids.array' => 'Data yang dikirimkan harus berupa array.',
            'ids.*.exists' => 'ID data yang dikirimkan tidak valid.',
        ];
    }

    public function failedAuthorization()
    {
        abort(Response::HTTP_FORBIDDEN, '403 Forbidden'); // Pesan kesalahan jika otorisasi gagal
    }
}
