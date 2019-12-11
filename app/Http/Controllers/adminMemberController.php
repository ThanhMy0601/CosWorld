<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\adminMemberRequest;
use App\Member;

class adminMemberController extends Controller
{
    public function index(){
        $member=Member::get();
        return view('admin.member.index',compact('member'));
    }

    public function detail($id_member){
        $member_detail=Member::where('ma_thanh_vien',$id_member)->first();
        return view('admin.member.detail',compact('member_detail'));
    }

    public function getCreate(){
        return view('admin.member.create');
    }
    public function postCreate(adminMemberRequest $req){
        $addMember=new Member;
        $addMember->ten_dang_nhap=$req['ten_dang_nhap'];
        $addMember->ten_thanh_vien=$req['ten_thanh_vien'];
        $addMember->mat_khau=$req['mat_khau'];
        $addMember->email=$req['email'];
        $addMember->so_dien_thoai=$req['so_dien_thoai'];
        $addMember->dia_chi=$req['dia_chi'];
        $addMember->save();
        return redirect()->back()->with('createMemberSuccess','Thêm thành công!!!');
    }

    public function getEdit($id_member){
        $member_detail=Member::where('ma_thanh_vien',$id_member)->first();
        return view('admin.member.edit',compact('member_detail'));
    }
    public function postEdit(adminMemberRequest $req,$id_member){

        Member::where(['ma_thanh_vien'=> $id_member])->update([
            'ten_dang_nhap'=>$req['ten_dang_nhap'],
            'ten_thanh_vien'=>$req['ten_thanh_vien'],
            'email'=>$req['email'],
            'so_dien_thoai'=>$req['so_dien_thoai'],
            'dia_chi'=>$req['dia_chi']
        ]);
        return redirect()->back()->with('editMemberSuccess','Cập Nhật thành công!!!');
    }

    
    public function getDelete($id_Cate){
        ProductType::where(['ma_loai_con'=> $id_Cate])->delete();
        return redirect()->back()->with('delMemberSuccess','Xóa thành công!!!');
    }
}
