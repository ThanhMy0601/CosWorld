<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table='loai_con';
    public $timestamps = false;
    public function product(){
        return $this->hasMany('App\Product','ma_loai_con','ma_san_pham');
    }
    // public function prebigcate(){
    //     return $this->hasMany('App\preBigCate','ma_loai_cha','ma_loai_cha');
    // }
}
