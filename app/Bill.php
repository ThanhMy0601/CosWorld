<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table='don_hang_tv';
    protected $primaryKey = 'ma_don_hang_tv';
    public $timestamps = false;

    public function bill_detail(){
        return $this->hasMany('App\BillDetail','ma_dh_tv','ma_ct_don_hang_tv');
    }

    //public function billDetails(){
    //    return $this->hasMany('App\BillDetail','ma_dh_tv','ma_ct_don_hang_tv');
   // }
}