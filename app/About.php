<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
      //table name
      public $table= 'about';
      //primary key
      public $primarykey= 'id';
  
      //timestamp
      public $timestamps =true;
}
