<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminMemberRequest extends FormRequest
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
            'ten_dang_nhap'=>'required',
            'ten_thanh_vien'=>'required',
            'email'=>'required',
            'so_dien_thoai'=>'required',
            'dia_chi'=>'required'
        ];
    }
}
