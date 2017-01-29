@extends('layouts/app')

@section('content')
<div class="col-md-10">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Activiteit</h3>
        <div class="page-action">[toevoegen]</div>
      </div>
    <div class="panel-body">
      @include('activities.form-content')
    </div>
  </div>
</div>
@endsection
