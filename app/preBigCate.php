<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preBigCate extends Model
{
    protected $table='loai_cha';
    public $timestamps = false;
    // public function productTypes(){
    //     return $this->belongsto('App\ProductType','ma_loai_cha','ma_loai_con');
    // }
}
