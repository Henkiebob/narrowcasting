
@extends('layouts/app')

@section('content')
    <div class="col-md-10">
      <div class="panel panel-default">
         <div class="panel-heading">
           <h1>Kamer overzicht</h1>
           <a href="{{route('kamer-toevoegen')}}" class="btn btn-success">Kamer toevoegen</a>
         </div>
          <table class="table">
            <thead>
              <tr>
                <th>Naam</th>
                <th>Acties</th>
              </tr>
            </thead>
            <tbody>
              @foreach($rooms as $room)
                <tr>
                  <td><a href="{{ route('kamer-bekijken', ['id' => $room->id]) }}">{{$room->name}}</a></td>
                  <td>
                    <a href="{{ route('kamer-bewerken', ['id' => $room->id]) }}" type="button" class="btn btn-default" aria-label="Left Align">
                      <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a href="{{ route('activiteit-toevoegen', ['room_id' => $room->id]) }}" class="btn btn-success">Activiteit toevoegen</a>
                    @include('rooms.form-delete')
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
        </div>
    </div>
@endsection
