<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{


    /**
     * The attributes that are mass assignable
     *
     * @var array
     * 
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for array
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function textareas()
    {
        return $this->hasMany('App\Textarea');
    }   
}