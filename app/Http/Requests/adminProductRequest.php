<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminProductRequest extends FormRequest
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
            'ten_san_pham'=>'required',
            'fhinh'=>'required',
            'don_gia'=>'required',
            'giam_gia'=>'required',
            'mo_ta'=>'required',
            'loai_san_pham'=>'required',
            'thuong_hieu'=>'required',
            'so_luong'=>'required',
            'san_pham_moi'=>'required'
        ];
    }

}
