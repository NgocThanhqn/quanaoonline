<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $guard = 'customer';
    protected  $table = 'customers';
    protected  $fillable = ['name', 'email', 'password', 'address', 'phome_number', 'type_account', 'number_account', 'note'];
    public  $timestamps = true;

    public  function Bill(){
        return $this->hasMany('App\Bills');
    }

//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
