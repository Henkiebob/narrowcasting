<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

  public function room()
  {
    return $this->belongsTo('App\Room');
  }

  public function getCurrentActivities() {
      $today = Carbon::today();
      $tommorow = Carbon::tomorrow();

      return $this
      ->where('start_date', '>=', $today)
      ->where('end_date', '<=', $tommorow)
      ->get();
  }

}
