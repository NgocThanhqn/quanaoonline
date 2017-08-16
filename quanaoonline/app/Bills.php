<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected  $table = 'bills';
    protected  $fillable = ['id_customer','name','email','address','phone','date_order','total','payment','note','status'];
    public  $timestamps = true;

    public  function Customer(){
        return $this->belongsTo('App\Customers');
    }
    public  function Bill_Detail(){
        return $this->hasMany('App\Bill_Detail');
    }
    public  function User(){
        return $this->belongsTo('App\User');
    }
}
