<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;
use App\Product;
use Illuminate\Support\Facades\DB;

class adminBillController extends Controller
{
    public function index(){
        $bill=Bill::get();
        return view('admin.bill.index',compact('bill'));
    }

    public function detail($id_bill){
        $get_bill=Bill::where('ma_don_hang_tv',$id_bill)->first();
        $bill_detail=BillDetail::get();
        $get_product=DB::table('chi_tiet_don_hang_tv')->join('san_pham','chi_tiet_don_hang_tv.ma_san_pham','=','san_pham.ma_san_pham')->where('ma_don_hang_tv',$id_bill)->get();
        return view('admin.bill.detail',compact('get_bill','bill_detail','get_product'));
    }

    public function getDelete($id_bill){
        // Bill::join('BillDetail','Bill.ma_don_hang_tv','BillDetail.ma_don_hang_tv')->where(['ma_don_hang_tv'=> $id_bill])->delete();
        Bill::where(['ma_don_hang_tv'=> $id_bill])->delete();
        BillDetail::where(['ma_don_hang_tv'=> $id_bill])->delete();
        return redirect()->back()->with('delBillSuccess','Xóa thành công!!!');
    }
}
