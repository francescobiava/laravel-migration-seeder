@extends('layouts.app')

@section('content')
    @foreach ($comics as $comic)
        <ul class="box">
          <li class="title">{{ $comic->title }}</li>
          <li class="author">{{ $comic->author }}</li>
          <li class="year">{{ $comic->year }}</li>
          <li class="overview">{{ $comic->overview }}</li>
        </ul>
    @endforeach
@endsection