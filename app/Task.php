<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{


    /**
     * each task can have many users
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }


    /**
     * each task can have many comments
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
