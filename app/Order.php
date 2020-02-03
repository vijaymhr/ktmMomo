<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //table name
    public $table= 'order';
    //primary key
    public $primarykey= 'id';

    //timestamp
    public $timestamps =true;


    public function food()
    {
        return $this->belongsTo('App\Food');
    }


}
