@extends('layouts/app')

@section('content')
    <div class="col-md-10">
      <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">{{$room->name}} [bewerken] </h3>
          </div>
        <div class="panel-body">
          @include('rooms.form-content')
        </div>
      </div>
    </div>
@endsection
