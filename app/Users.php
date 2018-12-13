<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'rol_id'];
    public $timestamps = false;
    

    public function roles()
    //N:1
    {
        return $this->belongsTo('App\Roles');
    }
    public function categories()
    //1:N
    {
        return $this->hasMany('App\Categories');
    }
    public function passwords()
    //N:1
    {
        return $this->hasMany('App\Passwords');
    }
}