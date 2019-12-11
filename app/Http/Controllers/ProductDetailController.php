<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductDetailController extends Controller
{
    // public function Product_detail(Request $req){
    //     $chi_tiet_sp=Product::where('ma_san_pham',$req->id)->first();
    //     return view('frontend_web.layouts.product_detail',compact('chi_tiet_sp'));
    // }
    public function Product_detail($id_sp){
        $chi_tiet_sp=Product::where('ma_san_pham',$id_sp)->first();
        return view('frontend_web.layouts.product_detail',compact('chi_tiet_sp'));
    }
}
