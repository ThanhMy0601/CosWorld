<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function Logout(){
        session()->forget('username');
        return redirect()->back();
    }
}
