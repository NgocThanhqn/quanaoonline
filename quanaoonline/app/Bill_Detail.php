<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_Detail extends Model
{
    protected  $table = 'bill__details';
    protected  $fillable = ['id_bill', 'id_product', 'quantity ', 'unit_price'];
    public  $timestamps = true;

    public  function Bills(){
        return $this->belongsTo('App\Bills');
    }
}
