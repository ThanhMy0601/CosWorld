<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function Get_login(){
        return view('frontend_web.layouts.login');
    }

    public function Post_Login(LoginRequest $req){
        $username=$req['tendangnhap'];
        $password=$req['matkhau'];
        $query_user=Member::where('ten_dang_nhap',$username)->first();
        $query_pass=Member::where('mat_khau',$password)->first();
        if($query_user && $query_user){
            session()->put('username',$query_user);
            return redirect()->route('home');
        }
        else{
            return redirect()->back()->with('dnhapthatbai','Đăng nhập không thành công.');
        }
    }
}
