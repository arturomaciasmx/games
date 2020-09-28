<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $game = Http::withHeaders(config('services.igdb'))->withOptions([
            'body' => "
            fields name,
            genres.*,
            involved_companies.company.*,
            cover.url,
            first_release_date,
            popularity,
            platforms.abbreviation,
            rating,
            aggregated_rating,
            summary,
            videos.*,
            screenshots.*,
            similar_games.cover.url,
            similar_games.slug,
            similar_games.rating,
            similar_games.name,
            similar_games.platforms.abbreviation;
            where slug = \"{$slug}\";
            "
        ])->get('https://api-v3.igdb.com/games/')->json();

        return view('show', [
            'game' => $this->formatGameForView($game[0])
        ]);
    }

    private function formatGameForView($game)
    {
        return collect($game)->merge([
            'cover_big' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
            'genres' => collect($game['genres'])->pluck('name')->implode(', '),
            'involved_companies' => $game['involved_companies'][0]['company']['name'],
            'platforms' => collect($game['platforms'])->pluck('abbreviation')->filter()->implode(', '),
            'rating' => array_key_exists('rating', $game)
                ? round($game['rating'])
                : '0',
            'aggregated_rating' => array_key_exists('aggregated_rating', $game)
                ? round($game['aggregated_rating'])
                : '0',
            'screenshots' => collect($game['screenshots'])->map(function($screenshot){
                return collect($screenshot)->merge([
                    'screenshot_huge' => Str::replaceFirst('thumb', 'screenshot_huge', $screenshot['url']),
                    'screenshot_big' => Str::replaceFirst('thumb', 'screenshot_big', $screenshot['url'])
                ]);
            })->take(9),
            'similar_games' => collect($game['similar_games'])->map(function($game){
                return collect($game)->merge([
                    'cover_big' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                    'rating' => array_key_exists('rating', $game)
                        ? round($game['rating'])
                        : '0',
                    'platforms' => collect($game['platforms'])->pluck('abbreviation')->filter()->implode(', '),
                ]);
            })->take(6)
        ])->toArray();
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
