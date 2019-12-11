<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //false->true để cho nó bật
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tendangnhap'=>'required|unique:thanh_vien,ten_dang_nhap',
            'matkhau'=>'required|min:6',
            'nhaplaimatkhau'=>'required|same:matkhau',
            'hoten'=>'required',
            'diachi'=>'required',
            'dienthoai'=>'required',
            'email'=>'required|email|unique:thanh_vien,email'//bắt buộc nhập email, theo định dạng email, không trùng với dữ liệu đang có trong email bảng thanh-vien
        ];
    }

    public function messages(){
        return[
            'tendangnhap.required'=>'Vui lòng nhập tên đăng nhập',
            'tendangnhap.unique'=>'Tên đăng nhập này đã được đăng ký',
            'matkhau.required'=>'Vui lòng nhập mật khẩu',
            'matkhau.min'=>'Mật khẩu tối thiểu 6 kí tự',
            'nhaplaimatkhau.required'=>'Vui lòng nhập lại mật khẩu',
            'nhaplaimatkhau.same'=>'Mật khẩu không trùng khớp',
            'hoten.required'=>'Vui lòng nhập họ tên của bạn',
            'diachi.required'=>'Vui lòng điền địa chỉ của bạn',
            'dienthoai.required'=>'Vui lòng điền số điện thoại của bạn',
            'email.required'=>'Vui lòng điền email của bạn',
            'email.unique'=>'Địa chỉ email này đã được đăng ký',
            'email.email'=>'Định dạng email không đúng'
        ];
    }
}
