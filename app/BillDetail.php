<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table='chi_tiet_don_hang_tv';
    public $timestamps = false;

    public function product(){
        return $this->belongsto('App\Product','ma_san_pham','ma_san_pham');
    }
    public function bill(){
        return $this->belongsto('App\Bill','ma_don_hang_tv','ma_don_hang_tv');
    }
}
