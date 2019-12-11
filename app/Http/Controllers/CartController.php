<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;
use App\Product;


class CartController extends Controller
{
    public function addCart($ma_san_pham)
    {
        $item = Product::where('ma_san_pham',$ma_san_pham)->first();

        $add=Cart::add([
            'id'=>$ma_san_pham, 
            'name'=>$item->ten_san_pham, 
            'quantity'=>$_GET['quantity'], 
            'price'=>$item->don_gia*(1-$item->giam_gia),
            'attributes'=>[
                'img'=>$item->hinh
                ]
            ]);
        return redirect()->back();
    }

    public function showCart()
    {
        $product_cart = Cart::getContent();
        session()->put('cart',$product_cart);
        $total = Cart::getTotal();
    	return view('frontend_web.layouts.cart',compact('product_cart','total'));
    }

    public function deleteCart($ma_san_pham)
    {
    	Cart::remove($ma_san_pham);
    	return redirect()->route('show.cart');
    }

}
