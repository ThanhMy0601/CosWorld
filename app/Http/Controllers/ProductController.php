<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\ProductType;
// use Illuminate\Support\Facades\DB; //use for DB


class ProductController extends Controller
{
    public function Product($id_loai){
        // $ds_loai_sp=DB::table('loai_con')->get();
        // $ds_sp_theo_ma_loai=DB::table('san_pham')->where('ma_loai_con',$id_loai)->get();
        // $ds_loai_sp=ProductType::all();
        $ds_loai_sp=ProductType::get();
        $ds_sp_theo_ma_loai=Product::where('ma_loai_con',$id_loai)->get();
        return view('frontend_web.layouts.product',compact('ds_loai_sp','ds_sp_theo_ma_loai'));
    }
}
