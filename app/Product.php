<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='san_pham';
    public $timestamps = false;
    public function Product_type(){
        return $this->belongsto('App\ProductType','ma_loai_con','ma_loai_con');
    }
}
