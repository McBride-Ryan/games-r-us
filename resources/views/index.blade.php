@extends('layouts.app')
@section('content')
<div style="padding: 0 1%;"></div>
    <div style="display: flex;
    overflow-x: scroll;
    overflow-y: hidden;
    padding: 1.25rem;">
        @foreach ($popularGames as $game)
            <div >
                    <img 
                    
                        class="row__poster"
                        src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="cover"
                    >
            </div>
    @endforeach
    </div>
    
@endsection