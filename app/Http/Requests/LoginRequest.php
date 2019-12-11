<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'tendangnhap'=>'required',
            'matkhau'=>'required'
        ];
    }

    public function messages(){
        return[
            'tendangnhap.required'=>'Vui lòng nhập tên đăng nhập',
            'matkhau.required'=>'Vui lòng nhập mật khẩu'           
        ];
    }
}
