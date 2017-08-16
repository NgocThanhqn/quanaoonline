<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    protected  $table = 'khuyen_mais';
    protected  $fillable = ['name', 'date_start', 'date_end'];
    public  $timestamps = false;

    public  function CTKhuyenMai(){
        return $this->hasMany('App\CTKhuyenMai');
    }
}
