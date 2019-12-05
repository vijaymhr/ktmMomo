<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //table name
    public $table= 'foods';
    //primary key
    public $primarykey= 'id';

    //timestamp
    public $timestamps =true;
}
