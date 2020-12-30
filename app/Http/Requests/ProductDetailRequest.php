<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_id' => 'required|numeric',
            'screen' => 'required',
            'operatingSystem' => 'required',
            'camera' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'rom' => 'required',
            'origin' => 'required',
        ];
    }

    public function messages()
    {
        $message = [
            'product_id.required'=>'khong duoc de trong',
            'product_id.numeric'=>'phai de dang so',
            'screen.required'=>'khong duoc de trong',
            'operatingSystem.required'=>'khong duoc de trong',
            'camera.required'=>'khong duoc de trong',
            'cpu.required'=>'khong duoc de trong',
            'ram.required'=>'khong duoc de trong',
            'rom.required'=>'khong duoc de trong',
            'origin.required'=>'khong duoc de trong',
        ];
        return $message;
    }
}
