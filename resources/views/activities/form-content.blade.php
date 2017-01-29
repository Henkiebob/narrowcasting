<form method="POST" enctype="multipart/form-data">

  @if(Route::is('activiteit-bewerken'))
    {{ method_field('PATCH') }}
  @endif

  <div class="form-group">
    <label for="title">Naam:</label>
    <input type="text" name="name" class="form-control" id="name" value="@if(isset($activity)) {{$activity->name}} @endif">
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
