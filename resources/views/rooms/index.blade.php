
@extends('layouts/app')

@section('content')
  @foreach($rooms as $room)
    hallo
    {{$room->name}}
  @endforeach
@endsection
