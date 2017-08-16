<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_Input_Detail extends Model
{
    protected  $table = 'bill_input_details';
    protected  $fillable = ['input_id', 'product_id', 'quantity', 'price', 'dateadd'];
    public  $timestamps = false;

    public  function bill_input(){
        return $this->belongsTo('App\Bill_Input');
    }
    public  function Product(){
        return $this->hasMany('App\Products');
    }
}
