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

    public function edit($id)
    {
      return view('rooms.edit', ['room' => Room::findOrFail($id)]);
    }

    public function update($id, Request $request)
    {
      $room = Room::findOrFail($id);
      $room->name = $request->name;
      $room->save();
      return redirect('/beheer/kamers');
    }

    public function store(Request $request)
    {
      $room = new Room;
      $room->name = $request->name;
      $room->order = 0;
      $room->status = 1;
      $room->save();
      $request->session()->flash('notification', ['message' => 'Kamer is opgeslagen', 'type' => 'alert-success']);
      return redirect('/beheer/kamers');
    }

    public function destroy($id, Request $request)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        $request->session()->flash('notification', ['message' => 'Kamer is verwijderd', 'type' => 'alert-danger']);
        return redirect('/beheer/kamers');
    }

    public function show()
    {

    }
}
