<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
      //Table Name
    protected $table = 'chats';

    //primary key
    public $primaryKey = 'chat_id';

    //TImestamps
    public $timestamps = true;
}
