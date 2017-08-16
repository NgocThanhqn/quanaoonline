<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected  $table = 'providers';
    protected  $fillable = ['name', 'address', 'phone', 'email'];
    public  $timestamps = false;

    public  function billinput(){
        return $this->hasMany('App\Bill_Input','provider_id','id');
    }
}
