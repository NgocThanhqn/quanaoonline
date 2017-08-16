<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guard = 'Admin';
    protected  $table = 'users';
    protected  $fillable = ['username', 'password', 'email', 'level', 'address', 'phome_number', 'type_account', 'number_account', 'remember_token'];
    public  $timestamps = true;

    public  function BillInput(){
        return $this->hasMany('App\Bill_Input');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
