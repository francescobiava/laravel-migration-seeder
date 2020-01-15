@extends('layouts.app')

@section('content')
  <ol>
    @foreach ($comics as $comic)
      <li>
        <ul>
          <li>{{ $comic->title }}</li>
          <li>{{ $comic->author }}</li>
          <li>{{ $comic->year }}</li>
          <li>{{ $comic->overview }}</li>
        </ul>
      </li>
      <br>
    @endforeach
  </ol>
@endsection