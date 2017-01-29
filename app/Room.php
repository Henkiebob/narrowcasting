<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    public $fillable = ['name', 'order'];

    public function activities()
    {
      return $this->hasMany('App\Activity');
    }
}
