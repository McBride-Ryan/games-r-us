{{-- @foreach ($arcadeGames as $game) --}}
            <div style="max-width: 107px; border: 2px solid orange; padding: 10px">
                    <img 
                        style="max-width: 107px; height: 160px"
                        class="row__poster"
                        src="{{ Str::replaceFirst('thumb', 'logo_med', $game['cover']['url']) }}" alt="cover"
                    >
            </div>
        {{-- @endforeach --}}