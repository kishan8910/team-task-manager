<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     * each comment can have more than one comment
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * each comment will have a task
     */
    public function task()
    {
        return $this->belongsTo('App\Task');
    }


    /**
     * each comment will have a user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
