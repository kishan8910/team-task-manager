<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    /**
     * each user will have a role
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    /**
     * each user can have more than one comment
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * each task can have more than one user assigned in the pivot table task_user
     */
    public function tasks()
    {
        return $this->belongsToMany('App\Task');
    }

}
