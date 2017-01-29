<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class Activities extends Controller
{

  public function create()
  {
    return view('activities.new');
  }
}
