<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
// use Illuminate\Support\Facades\DB;

class HomeCotroller extends Controller
{
    public function index()
    {
        // Sản phẩm mới
        // $ds_san_pham_moi=DB::table('san_pham')->where('san_pham_moi','new')->inRandomOrder()->get();
        $ds_san_pham_moi=Product::where('san_pham_moi','new')->inRandomOrder()->get();

        // Sản phẩm bán chạy
        $ds_san_pham_ban_chay=Product::inRandomOrder()->take(18)->get();

        // Sản phẩm nổi bật
        $ds_san_pham_noi_bat=Product::where('giam_gia','>','0.4')->get();

        // Sản phẩm gợi ý
        $ds_san_pham_goi_y=Product::inRandomOrder()->take(20)->get();

        return view('frontend_web.layouts.home',compact('ds_san_pham_moi','ds_san_pham_ban_chay','ds_san_pham_noi_bat','ds_san_pham_goi_y'));
    }

    public function about(){

        return view('frontend_web.layouts.aboutus');
    }
}
