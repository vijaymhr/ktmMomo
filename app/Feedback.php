<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
        //table name
        public $table= 'feedbacks';
        //primary key
        public $primarykey= 'id';
    
        //timestamp
        public $timestamps =true;
}
