<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use App\Http\Requests\adminCategoryRequest;
use Illuminate\Support\Facades\DB;

class adminCategoryController extends Controller
{
    public function index(){
        $cate=ProductType::get();
        return view('admin.category.index',compact('cate'));
    }

    public function detail($id_cate){
        $cate_detail=ProductType::where('ma_loai_con',$id_cate)->first();
        return view('admin.category.detail',compact('cate_detail'));
    }

    public function getCreate(){
        $get_loai_cha=DB::table('loai_cha')->get();
        return view('admin.category.create',compact('get_loai_cha'));
    }
    public function postCreate(adminCategoryRequest $req){
        $addCate=new ProductType;
        $addCate->ma_loai_cha=$req['ma_loai_cha'];
        $addCate->ten_loai_con=$req['ten_loai'];
        $addCate->save();
        return redirect()->back()->with('createCateSuccess','Thêm thành công!!!');
    }

    public function getEdit($id_cate){
        $preBigCate=DB::table('loai_cha')->join('loai_con','loai_cha.ma_loai_cha','=','loai_con.ma_loai_cha')->first();
        $get_loai_cha=DB::table('loai_cha')->get();
        $cate_detail=ProductType::where('ma_loai_con',$id_cate)->first();
        return view('admin.category.edit',compact('preBigCate','get_loai_cha','cate_detail'));
    }
    public function postEdit(adminCategoryRequest $req,$id_Cate){

        ProductType::where(['ma_loai_con'=> $id_Cate])->update([
            'ma_loai_cha'=>$req['ma_loai_cha'],
            'ten_loai_con'=>$req['ten_loai']
        ]);
        return redirect()->back()->with('editCateSuccess','Cập Nhật thành công!!!');
    }

    
    public function getDelete($id_Cate){
        ProductType::where(['ma_loai_con'=> $id_Cate])->delete();
        return redirect()->back()->with('delCateSuccess','Xóa thành công!!!');
    }
}
