<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected  $table = 'cate';
    protected  $fillable = ['name', 'alias', 'order', 'parent_id', 'keywords', 'description'];
    public  $timestamps = false;

    public function product(){
        return $this->hasMany('App\Products');
    }
}
