<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
     //Table Name
    protected $table = 'news';

    //primary key
    public $primaryKey = 'news_id';

    //TImestamps
    public $timestamps = true;
}
