<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //table name
    public $table= 'infos';
    //primary key
    public $primarykey= 'id';

    //timestamp
    public $timestamps =true;
}
