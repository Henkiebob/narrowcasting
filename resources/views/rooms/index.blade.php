
@extends('layouts/app')

@section('content')
  <div class="row">
    <div class="col-md-2">
      Sidebar
    </div>
    <div class="col-md-10">
      <div class="panel panel-default">
         <div class="panel-heading">Kamer overzicht</div>
          <div class="panel-body">
            Hier kan nog iets van een beschrijving staan
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>Naam</th>
                <th>Bewerken</th>
                <th>Verwijderen</th>
              </tr>
            </thead>
            <tbody>
              @foreach($rooms as $room)
                <tr>
                  <td>{{$room->name}}</td>
                  <td><a href="#">Bewerken</a></td>
                  <td><a href="#">Verwijderen</a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
        </div>
    </div>
  </div>
@endsection
