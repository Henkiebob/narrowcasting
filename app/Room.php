<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $fillable = ['name', 'order'];
    protected $dates = ['start_date', 'end_date', 'created_at', 'updated_at', 'deleted_at'];

    public function activities()
    {
      return $this->hasMany('App\Activity');
    }

    public function getCurrentActivities($id) {
        $today = Carbon::today();
        $tommorow = Carbon::tomorrow();
        $room = $this->find($id);

        return $room->activities()
        ->where('activities.start_date', '>=', $today)
        ->where('activities.end_date', '<=', $tommorow)
        ->get();
    }
}
