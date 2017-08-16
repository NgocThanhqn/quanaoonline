<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTKhuyenMai extends Model
{
    protected  $table = 'ct_khuyen_mai';
    protected  $fillable = ['km_id', 'product_id', 'present'];
    public  $timestamps = false;

    public  function KhuyenMai(){
        return $this->belongsTo('App\KhuyenMai');
    }
    public  function Product(){
        return $this->hasMany('App\Products');
    }
}
