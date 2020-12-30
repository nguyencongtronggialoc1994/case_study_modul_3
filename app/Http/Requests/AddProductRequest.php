<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'productName' => 'required',
            'buyPrice' => 'required|numeric',
        ];
    }

    public function messages()
    {
        $message = [
            'productName.required' => 'Không được để trống',
            'buyPrice.required' => 'Không được để trống',
            'buyPrice.numeric' => 'Vui lòng nhập chữ số',
        ];
        return $message;
    }
}
