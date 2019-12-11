<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
use App\ThuongHieu;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\adminProductRequest;

class adminProductController extends Controller
{
    public function index(){
        $product=Product::get();
        return view('admin.product.index',compact('product'));
    }

    public function detail($id_product){
        $product_detail=Product::where('ma_san_pham',$id_product)->first();
        $idBigCate=DB::table('loai_con')->join('san_pham','loai_con.ma_loai_con','=','san_pham.ma_loai_con')->first();
        // $id_th=ThuongHieu::join('Product','ThuongHieu.ma_thuong_hieu','=','Product.ma_thuong_hieu')->first();=>ko xai dc
        $id_th=DB::table('thuong_hieu')->join('san_pham','thuong_hieu.ma_thuong_hieu','=','san_pham.ma_thuong_hieu')->first();
        return view('admin.product.detail',compact('product_detail','id_th','idBigCate'));
    }

    public function getCreate(){
        $get_thuong_hieu=ThuongHieu::get();
        $get_cate=ProductType::get();
        return view('admin.product.create',compact('get_cate','get_thuong_hieu'));
    }
    public function postCreate(adminProductRequest $req){
        $addProduct=new Product;
        $addProduct->ten_san_pham=$req['ten_san_pham'];

        $file_name = $req->file('fhinh')->getClientOriginalName();
        $addProduct->hinh = $file_name;
        $req->file('fhinh')->move('web/sanpham/',$file_name); //ĐI VÀO NƠI CHỨA HÌNH , MOVE() LÀ DI CHUYỂN

        $addProduct->don_gia=$req['don_gia'];
        $addProduct->giam_gia=$req['giam_gia'];
        $addProduct->mo_ta=$req['mo_ta'];
        $addProduct->ma_loai_con=$req['loai_san_pham'];
        $addProduct->ma_thuong_hieu=$req['thuong_hieu'];
        $addProduct->so_luong=$req['so_luong'];
        $addProduct->san_pham_moi=$req['san_pham_moi'];
        $addProduct->save();
        return redirect()->back()->with('createProductSuccess','Thêm thành công!!!');
    }

    public function getEdit($id_product){
        $product_detail=Product::where('ma_san_pham',$id_product)->first();
        $idBigCate=DB::table('loai_con')->join('san_pham','loai_con.ma_loai_con','=','san_pham.ma_loai_con')->where('ma_san_pham',$id_product)->first();
        $id_th=DB::table('thuong_hieu')->join('san_pham','thuong_hieu.ma_thuong_hieu','=','san_pham.ma_thuong_hieu')->where('ma_san_pham',$id_product)->first();
        $get_thuong_hieu=ThuongHieu::get();
        $get_cate=ProductType::get();
        return view('admin.product.edit',compact('product_detail','idBigCate','id_th','get_thuong_hieu','get_cate'));
    }
    public function postEdit(adminProductRequest $req,$id_product){
        $file_name = $req->file('fhinh')->getClientOriginalName();
       $req->file('fhinh')->move('web/sanpham/',$file_name); //ĐI VÀO NƠI CHỨA HÌNH , MOVE() LÀ DI CHUYỂN
        Product::where(['ma_san_pham'=> $id_product])->update([
            'ten_san_pham'=>$req['ten_san_pham'],
            'hinh'=>$file_name,
            'don_gia'=>$req['don_gia'],
            'giam_gia'=>$req['giam_gia'],
            'mo_ta'=>$req['mo_ta'],
            'ma_loai_con'=>$req['loai_san_pham'],
            'ma_thuong_hieu'=>$req['thuong_hieu'],
            'so_luong'=>$req['so_luong'],
            'san_pham_moi'=>$req['san_pham_moi']
        ]);
        return redirect()->back()->with('editProductSuccess','Cập Nhật thành công!!!');
    }

    
    public function getDelete($id_product){
        Product::where(['ma_san_pham'=> $id_product])->delete();
        return redirect()->back()->with('delProductSuccess','Xóa thành công!!!');
    }
}
