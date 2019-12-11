<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Bill;
use App\BillDetail;
use Cart;

class CheckoutController extends Controller
{
    public function Get_checkout(){
        $qty_total=Cart::getTotalQuantity();
        $product_cart = Cart::getContent();
        $total = Cart::getTotal();
        return view('frontend_web.layouts.checkout',compact('qty_total','product_cart','total'));
    }

    public function Post_checkout(Request $req){
        $httt="Thanh toán tiền mặt";
        $tong_tien=Cart::getTotal();
        if(session()->has('username')){
            $kh=session()->get('username');
            $bill=new Bill;
            $bill->ma_thanh_vien=$kh->ma_thanh_vien;
            $bill->ngay_dat=date('Y-m-d H:i:s');
            $bill->hinh_thuc_thanh_toan = $httt;
            $bill->ghi_chu=$_POST['ghi_chu'];
            $bill->tong_tien=$tong_tien;
            $bill->save();
            //dd($bill);

            $product_cart = Cart::getContent();
            foreach($product_cart as $item){
                $bill_detail=new BillDetail;
                $bill_detail->ma_don_hang_tv=$bill->ma_don_hang_tv;
                $bill_detail->ma_san_pham=$item->id;
                $bill_detail->so_luong=$item->quantity;
                $bill_detail->save();
                
                //  //1 cach
                //  $bill_detail=new BillDetail;
                //  $bill_detail->ma_san_pham=$item->id;
                //  $bill_detail->so_luong=$item->quantity;
                //  $bill->bill_detail()->save($bill_detail);
 
                //  //cach 2
                //  $billDetail = new BillDetail([
                //      'ma_san_pham' => $item->id,
                //      'so_luong' => $item->quantity
                //  ]);
                //  $bill->bill_detail()->save($billDetail);
            }
            Cart::clear();
        }
        return redirect()->back();
    }
}
