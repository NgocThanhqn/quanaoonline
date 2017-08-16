<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_Input extends Model
{
    protected  $table = 'bills_input';
    protected  $fillable = ['user_id', 'provider_id', 'date_input', 'total_price'];
    public  $timestamps = false;

    public  function provider(){
        return $this->belongsTo('App\Provider','provider_id', 'id');
    }
    public  function Admin(){
        return $this->belongsTo('App\Admin');
    }
    public  function bill_input_detail(){
        return $this->hasMany('App\Bill_Input_Detail','input_id','id');
    }
}
