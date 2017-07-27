<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Textarea extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'textarea', 'user_id'
    ];


    /**
     * Get the user that owns the textarea.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
