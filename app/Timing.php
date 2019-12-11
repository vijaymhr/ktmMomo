<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timing extends Model
{
    //table name
    public $table= 'timings';
    //primary key
    public $primarykey= 'id';

    //timestamp
    public $timestamps =true;
}
