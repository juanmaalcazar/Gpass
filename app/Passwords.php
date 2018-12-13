<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passwords extends Model
{
    
    protected $table = 'passwords'
    protected $fillable = ['title', 'password', 'category_id', 'user_id']

    public function users()
    //N:1
    {
        return $this->belongsTo('App\Users');
    }
    public function categories()
    //N:1
    {
        return $this->belongsTo('App\Categories');
    }
    