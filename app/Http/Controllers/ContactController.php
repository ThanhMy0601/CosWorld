<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function getContact(){
        return view('frontend_web.layouts.contact');
    }

    public function postContact(Request $req){
        $addContact=new Contact;
        $addContact->ten_khach_hang=$req['ten_khach_hang'];
        $addContact->email=$req['email'];
        $addContact->so_dien_thoai=$req['so_dien_thoai'];
        $addContact->tieu_de=$req['tieu_de'];
        $addContact->noi_dung=$req['noi_dung'];
        $addContact->trang_thai=0;
        $addContact->save();
        return redirect()->back()->with('contactSuccess','Cảm ơn bạn đã phản hồi cho chúng tôi.');
    }
}
