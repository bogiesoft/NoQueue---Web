<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
    protected $fillable = [
        'first_name', 'last_name', 'sex','email', 'password','dob',
    ];
    protected $hidden = [
        'password',
    ];
    public function orders(){
        return $this->hasMany('App\Order');
    }
}
