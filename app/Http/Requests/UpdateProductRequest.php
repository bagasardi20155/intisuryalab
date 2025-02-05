<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'nama_barang' => 'sometimes|required',
            'jenis_barang' => 'sometimes|required',
            'stok_barang' => 'sometimes|required|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'nama_barang' => "Nama Barang",
            'jenis_barang' => "Jenis Barang",
            "stok_barang" => "Stok Barang",
        ];
    }
}
