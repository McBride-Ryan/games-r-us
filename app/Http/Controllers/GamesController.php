<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularGames = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "fields name, cover.url, first_release_date, platforms.abbreviation, rating, total_rating_count;
                where total_rating_count != null;
                sort total_rating_count desc;
                limit 20;",
                "text/plain"
            )
            ->post('https://api.igdb.com/v4/games')
            ->json();

        $sportsGames = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "fields name, cover.url, genres;
                where cover.url != null & genres = {14};
                sort rating desc;
                limit 20;",
                "text/plain"
            )
            ->post('https://api.igdb.com/v4/games')
            ->json();

        $racingGames = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "fields name, cover.url, genres;
                where cover.url != null & genres = {10};
                sort rating desc;
                limit 20;",
                "text/plain"
            )
            ->post('https://api.igdb.com/v4/games')
            ->json();

        // dd($sportsGames);

        return view('index', [
            'popularGames' => $popularGames,
            'sportsGames' => $sportsGames,
            'racingGames' => $racingGames
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
