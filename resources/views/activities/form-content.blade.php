
@section('scripts')
<script type="text/javascript">
  var startDate = moment().format('D-M-YYYY');

  $('#date').val(startDate);
  $('.datepicker').datepicker({
      language: 'nl',
      defaultDate: startDate,
  });


  $('.timepicker').timepicker({
     'scrollDefault': 'now',
     'timeFormat': 'H:i'
  });
</script>
@endsection

<form method="POST" enctype="multipart/form-data">

  @if(Route::is('activiteit-bewerken'))
    {{ method_field('PATCH') }}
  @endif

  <div class="form-group">
    <label for="title">Omschrijving activiteit:</label>
    <input type="text" name="name" class="form-control" id="name" value="@if(isset($activity)) {{$activity->name}} @endif">
  </div>

  <div class="form-group">
    <div class="input-group date datepicker">
      <label for="time_start">Datum:</label>
      <input type="text" name="date" id="date" class="form-control">
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

  <button type="submit" class="btn btn-success">
    @if(Route::is('activiteit-bewerken'))
    Aanpassen
    @else
    Toevoegen
    @endif
  </button>
  {{ csrf_field() }}
</form>
