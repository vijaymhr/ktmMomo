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

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // public function order()
    // {
    //     return $this->hasMany('App\order', 'food_id');
    // }
}
