<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function Get_register(){
        return view('frontend_web.layouts.register');
    }

    public function Post_register(RegisterRequest $req ){
        Member::insert([
            'ten_dang_nhap'=>$req['tendangnhap'],
            'mat_khau'=>md5($req['matkhau']),
            'ten_thanh_vien'=>$req['hoten'],
            'dia_chi'=>$req['diachi'],
            'so_dien_thoai'=>$req['dienthoai'],
            'email'=>$req['email']
        ]);
        return redirect()->back()->with('dkthanhcong','Tạo tài khoản thành công!');
    }

    // public function Post_register(Request $req ){
    //     $req->validate(
    //         [
    //             'tendangnhap'=>'required|unique:thanh_vien,ten_dang_nhap',
    //             'matkhau'=>'required|min:6',
    //             'nhaplaimatkhau'=>'required|same:matkhau',
    //             'hoten'=>'required',
    //             'diachi'=>'required',
    //             'dienthoai'=>'required',
    //             'email'=>'required|email|unique:thanh_vien,email'//bắt buộc nhập email, theo định dạng email, không trùng với dữ liệu đang có trong email bảng thanh-vien
    //         ],
    //         [
    //             'tendangnhap.required'=>'Vui lòng nhập tên đăng nhập',
    //             'tendangnhap.unique'=>'Tên đăng nhập này đã được đăng ký',
    //             'matkhau.required'=>'Vui lòng nhập mật khẩu',
    //             'matkhau.min'=>'Mật khẩu tối thiểu 6 kí tự',
    //             'nhaplaimatkhau.required'=>'Vui lòng nhập lại mật khẩu',
    //             'nhaplaimatkhau.same'=>'Mật khẩu không trùng khớp',
    //             'hoten.required'=>'Vui lòng nhập họ tên của bạn',
    //             'diachi.required'=>'Vui lòng điền địa chỉ của bạn',
    //             'dienthoai.required'=>'Vui lòng điền số điện thoại của bạn',
    //             'email.required'=>'Vui lòng điền email của bạn',
    //             'email.unique'=>'Địa chỉ email này đã được đăng ký',
    //             'email.email'=>'Định dạng email không đúng'
    //         ]
    //     );
    //     Member::insert([
    //         'ten_dang_nhap'=>$req['tendangnhap'],
    //         'mat_khau'=>md5($req['matkhau']),
    //         'ten_thanh_vien'=>$req['hoten'],
    //         'dia_chi'=>$req['diachi'],
    //         'so_dien_thoai'=>$req['dienthoai'],
    //         'email'=>$req['email']
    //     ]);
    //     return redirect()->back()->with('dkthanhcong','Tạo tài khoản thành công!');
    // }
}
