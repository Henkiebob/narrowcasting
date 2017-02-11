@extends('layouts/app')

@section('content')
<div class="col-md-10">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">{{$room->name}}</h3>
      </div>
  </div>

  <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Activiteiten voor vandaag</h4>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>Activiteit</th>
            <th>Begintijd</th>
            <th>Eindtijd</th>
          </tr>
        </thead>
        <tbody>
            @foreach($current_activities as $activity)
              <tr>
              <td>  {{$activity->name}} </td>
              <td>  {{ date( 'h:i:s' , strtotime($activity->start_date)) }} </td>
              <td>  {{ date( 'h:i:s' , strtotime($activity->end_date))}} </td>
              </tr>
            @endforeach
          </tbody>
      </table>
  </div>

</div>
@endsection
