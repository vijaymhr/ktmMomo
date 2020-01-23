<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
//table name
public $table= 'blog';
//primary key
public $primarykey= 'id';

//timestamp
public $timestamps =true;
}
