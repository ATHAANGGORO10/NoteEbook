@extends('app.root')

@section('content')
  <a href="{{ route('edited', $data->id) }}">edit data</a>
@endsection