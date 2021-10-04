<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
       //Table Name
    protected $table = 'friend_request';

    //primary key
    public $primaryKey = 'friend_request_id';

    //TImestamps
    public $timestamps = true;



    public function sender_message() {

        return $this->hasMany('App\Chat','sender_id','sender_id');

    }



    public function receiver_message() {

        return $this->hasMany('App\Chat','receiver_id','receiver_id');

    }



}
