
<form method="POST" action="{{route('kamer-verwijderen', $room->id)}}" enctype="multipart/form-data" class="delete_form">
  {{ method_field('DELETE') }}
  <button type="submit" type="button" class="btn btn-default" aria-label="Left Align">
    <span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span>
  </button>
  {{ csrf_field() }}
</form>
