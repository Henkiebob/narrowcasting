
@extends('layouts/app')

@section('content')
    <div class="col-md-10">
      <div class="panel panel-default">
         <div class="panel-heading">
           <h1>Activiteiten overzicht voor vandaag</h1>
         </div>
          <table class="table">
            <thead>
              <tr>
                <th>Naam</th>
                <th>Zaal</th>
                <th>Tijd</th>
              </tr>
            </thead>
            <tbody>
              @foreach($all_current_activities as $activity)
                <tr>
                  <td>  {{ $activity->name }} </td>
                  <td> </td>
                  <td>  {{ date( 'h:i' , strtotime($activity->start_date)) }} tot {{ date( 'h:i' , strtotime($activity->end_date)) }} </td>
                </tr>
              @endforeach
              </tbody>
            </table>
        </div>
    </div>
@endsection
