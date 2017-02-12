@extends('layouts/app')

@section('content')
<div class="col-md-10">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Kamer toevoegen</h3>
    <div class="panel-body">
      @include('rooms.form-content')
    </div>
  </div>
</div>
@endsection
