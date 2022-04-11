@extends('layouts.app')
@section('content')
body of world

@foreach ($popularGames as $game)
    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="cover">
@endforeach
    
@endsection