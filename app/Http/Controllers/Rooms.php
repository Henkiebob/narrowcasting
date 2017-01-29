<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class Rooms extends Controller
{

    public function index() {
      return view('rooms.index', ['rooms' => Room::all()]);
    }

    public function create()
    {
      return view('rooms.new');
    }

    public function store(request $request)
    {
      $room = new Room;
      $room->name = $request->name;
      $room->order = 0;
      $room->status = 1;
      $room->save();

      return redirect('/beheer/kamers');
    }

    public function show()
    {

    }
}
