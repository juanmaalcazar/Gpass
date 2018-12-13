<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    
    protected $table = 'roles'
    protected $fillable = ['name']

    
    public function users()
    //1:N
    {
        return $this->hasMany('App\Users');
    }
    