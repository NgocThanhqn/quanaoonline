<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected  $table = 'products';
    protected  $fillable = ['name', 'alias', 'price', 'intro', 'content', 'image', 'keywords', 'description', 'user_id', 'cate_id', 'quantily', 'status'];
    public  $timestamps = false;
    public  function cate(){
        return $this->belongsTo('App\Cate');
    }
    public  function user(){
        return $this->belongsTo('App\User');
    }
    public  function product_image(){
        return $this->hasMany('App\ProductImage');
    }
    public  function Bill_Input_Detail(){
        return $this->hasMany('App\Bill_Input_Detail');
    }
    public  function CT_KhuyenMai(){
        return $this->belongsTo('App\CTKhuyenMai');
    }
}
