<form method="POST" enctype="multipart/form-data">

  @if(Route::is('kamer-bewerken'))
    {{ method_field('PATCH') }}
  @endif

  <div class="form-group">
    <label for="title">Titel:</label>
    <input type="text" name="name" class="form-control" id="name" value="@if(isset($room)) {{$room->name}} @endif">
  </div>

  <button type="submit" class="btn btn-success">
    @if(Route::is('kamer-bewerken'))
    Aanpassen
    @else
    Toevoegen
    @endif
  </button>
  {{ csrf_field() }}
</form>
