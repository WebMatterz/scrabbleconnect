<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username','lastname','email','gender','phone_no','state','country','citizenship','category','dictionary', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




    public function sender() {

        return $this->hasMany('App\FriendRequest','sender_id','id');

    }



    public function receiver() {

        return $this->hasMany('App\FriendRequest','receiver_id','id');

    }



    public function sender_status() {

        return $this->hasMany('App\FriendRequest','sender_id','id');

    }



    public function receiver_status() {

        return $this->hasMany('App\FriendRequest','receiver_id','id');

    }



       












}
