<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        $vehicleId = $this->route('vehicle') ? $this->route('vehicle')->id : null;

        return [
            'license_plate' => 'required|unique:vehicles,license_plate,' . $vehicleId,
            'type'          => 'required|string|max:255',
            'brand'         => 'required|string|max:255',
            'color'         => 'required|string|max:255',
            'is_stolen'     => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'license_plate.required' => 'Plat nomor wajib diisi.',
            'license_plate.unique' => 'Plat nomor sudah digunakan.',
            'type.required' => 'Tipe kendaraan wajib diisi.',
            'brand.required' => 'Merk kendaraan wajib diisi.',
            'color.required' => 'Warna kendaraan wajib diisi.',
            'is_stolen.required' => 'Status hilang wajib diisi.',
        ];
    }
}
