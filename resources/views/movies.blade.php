@extends('layouts.app')

@section('content')
    @foreach($movies as $movie)
        <ul class="box">
            <li class="title">{{ $movie->title }}</li>
            <li class="year">{{ $movie->year }}</li>
            <li class="overview">{{ $movie->overview }}</li>
        </ul>
    @endforeach
@endsection