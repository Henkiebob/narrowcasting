
<form method="POST" action="{{route('kamer-verwijderen', $room->id)}}" enctype="multipart/form-data" class="delete_form">
  {{ method_field('DELETE') }}
  <button type="submit" class="btn btn-danger">
    Verwijderen
  </button>
  {{ csrf_field() }}
</form>
