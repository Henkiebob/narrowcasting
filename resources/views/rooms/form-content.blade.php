<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Titel:</label>
    <input type="text" name="name" class="form-control" id="name" value="@if(isset($room)) {{$room->name}} @endif">
  </div>

  <button type="submit" class="btn btn-success">Toevoegen</button>
  {{ csrf_field() }}
</form>
