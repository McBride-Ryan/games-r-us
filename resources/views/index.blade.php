@extends('layouts.app')
@section('content')
    Popular Games
        <div style="
            display: flex;
            overflow-x: scroll;
            overflow-y: hidden;
            padding: 1.25rem;">
        @foreach ($popularGames as $game)
            <div style="border: 2px solid green; padding: 10px">
                    <img 
                    
                        class="row__poster"
                        src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="cover"
                    >
            </div>
        @endforeach
    </div>
    Sports Games 
    
        <div style="
            display: flex;
            overflow-x: scroll;
            overflow-y: hidden;
            padding: 1.25rem;">   
        @foreach ($sportsGames as $sport)
            <div style="max-width: 107px; border: 2px solid yellow; padding: 10px">
                    <img 
                        class="row__poster"
                        style="max-width: 107px; height: 160px"
                        src="{{ Str::replaceFirst('thumb', 'logo_med', $sport['cover']['url']) }}" alt="cover"
                    >
            </div>
        @endforeach
    </div>

    Racing Games 
        <div style="
            display: flex;
            overflow-x: scroll;
            overflow-y: hidden;
            padding: 1.25rem;">   
        @foreach ($racingGames as $game)
            <div style="max-width: 107px; border: 2px solid red; padding: 10px" >
                    <img 
                        class="row__poster"
                        style="max-width: 107px; height: 160px"
                        src="{{ Str::replaceFirst('thumb', 'logo_med', $game['cover']['url']) }}" alt="cover"
                    >
            </div>
        @endforeach
        </div>

    Shooter Games 
        <div 
            style="
                display: flex;
                overflow-x: scroll;
                overflow-y: hidden;
                padding: 1.25rem;"
            >   
        @foreach ($shootGames as $game)
            <div style="max-width: 107px; border: 2px solid blue; padding: 10px">
                    <img 
                        style="max-width: 107px; height: 160px"
                        class="row__poster"
                        src="{{ Str::replaceFirst('thumb', 'logo_med', $game['cover']['url']) }}" alt="cover"
                    >
            </div>
        @endforeach
    </div>

    Role Playing
    <div 
            style="
                display: flex;
                overflow-x: scroll;
                overflow-y: hidden;
                padding: 1.25rem;"
            >   
        @foreach ($rpgGames as $game)
            <div style="max-width: 107px; border: 2px solid orange; padding: 10px">
                    <img 
                        style="max-width: 107px; height: 160px"
                        class="row__poster"
                        src="{{ Str::replaceFirst('thumb', 'logo_med', $game['cover']['url']) }}" alt="cover"
                    >
            </div>
        @endforeach
    </div>

    Aarcade
    {{-- <div 
            style="
                display: flex;
                overflow-x: scroll;
                overflow-y: hidden;
                padding: 1.25rem;"
            >    --}}
            <x-row-section>
        @foreach ($arcadeGames as $game)
            <div style="max-width: 107px; border: 2px solid orange; padding: 10px">
                    <img 
                        style="max-width: 107px; height: 160px"
                        class="row__poster"
                        src="{{ Str::replaceFirst('thumb', 'logo_med', $game['cover']['url']) }}" alt="cover"
                    >
            </div>
        @endforeach
        </x-row-section>

    {{-- </div> --}}
@endsection