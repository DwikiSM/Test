<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //use Notifiable;
    protected $table = 'Users';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *//*
    protected $fillable = [
        'name', 'email', 'password',
    ];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     /*
    protected $hidden = [
        'password', 'remember_token',
    ];*/
}
