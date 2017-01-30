<?php

namespace App\Http\Controllers;
use Carbon\Carbon;


use App\Activity;
use Illuminate\Http\Request;

class Activities extends Controller
{

  public function create()
  {
    return view('activities.new');
  }

  public function store(Request $request, $room_id)
  {
    $activity = new Activity;
    $activity->room_id = $room_id;
    $start_date = $this->getFormattedDate($request->date, $request->time_start);
    $end_date = $this->getFormattedDate($request->date, $request->time_end);
    $activity->start_date = $start_date;
    $activity->end_date = $end_date;
    $activity->name = $request->name;
    $activity->save();
    $request->session()->flash('notification', ['message' => 'Activiteit is opgeslagen', 'type' => 'alert-success']);
    return redirect('/beheer/kamers');
  }

  public function getFormattedDate($date, $time)
  {
    $tz = 'Europe/Amsterdam';


    $date = explode('-', $date);
    $time = explode(':', $time);
    $formatted_date = Carbon::create($date[2], $date[1], $date[0], $time[0], $time[1], '00', $tz);

    return $formatted_date;
  }

}
