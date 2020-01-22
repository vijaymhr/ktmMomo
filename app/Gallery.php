<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //table name
    public $table= 'gallery';
    //primary key
    public $primarykey= 'id';

    //timestamp
    public $timestamps =true;
}
