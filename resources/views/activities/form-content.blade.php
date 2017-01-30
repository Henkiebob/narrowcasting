<<<<<<< HEAD

@section('scripts')
<script type="text/javascript">
  $('.datepicker').datepicker({
      language: 'nl',
  });

  $('.timepicker').timepicker({
     'scrollDefault': 'now',
     'timeFormat': 'H:i'
  });
</script>
@endsection

<form method="POST" enctype="multipart/form-data">
=======
<form method="POST" enctype="multipart/form-data">

>>>>>>> 9663c25e9d487dddb35e9aab9511365b0e3822dd
  @if(Route::is('activiteit-bewerken'))
    {{ method_field('PATCH') }}
  @endif

  <div class="form-group">
<<<<<<< HEAD
    <label for="title">Omschrijving activiteit:</label>
    <input type="text" name="name" class="form-control" id="name" value="@if(isset($activity)) {{$activity->name}} @endif">
  </div>

  <div class="form-group">
    <div class="input-group date datepicker">
      <label for="time_start">Datum:</label>
      <input type="text" name="date" class="form-control">
      </div>
  </div>

  <div class="form-group">
    <label for="time_start">Van:</label>
    <input type="text" name="time_start" class="timepicker form-control">
  </div>

  <div class="form-group">
    <label for="time_start">Tot:</label>
    <input type="text" name="time_end" class="timepicker form-control">
  </div>

=======
    <label for="title">Naam:</label>
    <input type="text" name="name" class="form-control" id="name" value="@if(isset($activity)) {{$activity->name}} @endif">
  </div>

>>>>>>> 9663c25e9d487dddb35e9aab9511365b0e3822dd
  <button type="submit" class="btn btn-success">
    @if(Route::is('activiteit-bewerken'))
    Aanpassen
    @else
    Toevoegen
    @endif
  </button>
  {{ csrf_field() }}
</form>
