<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;

        // $popularGames = Http::withHeaders(config('services.igdb'))->withOptions([
        //     'body' => "
        //     fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating;
        //     where release_dates.platform = (48,49,6,130)
        //     & (first_release_date > {$before} 
        //     & first_release_date < {$after});
        //     sort popularity desc;
        //     limit 12;
        //     "
        // ])->get('https://api-v3.igdb.com/games/')->json();

        // dump($popularGames);

        // $recentlyReviewed = Http::withHeaders(config('services.igdb'))->withOptions([
        //     'body' => "
        //     fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary;
        //     where release_dates.platform = (48,49,6,130)
        //     & (first_release_date > {$before} 
        //     & first_release_date < {$current})
        //     & rating_count > 5;
        //     sort popularity desc;
        //     limit 3;
        //     "
        // ])->get('https://api-v3.igdb.com/games/')->json();
        
        // dump($recentlyReviewed);

        // $mostAnticipated = Http::withHeaders(config('services.igdb'))->withOptions([
        //     'body' => "
        //     fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary;
        //     where release_dates.platform = (48,49,6,130)
        //     & (first_release_date > {$before} 
        //     & first_release_date < {$afterFourMonths})
        //     & rating_count > 5;
        //     sort popularity desc;
        //     limit 4;
        //     "
        // ])->get('https://api-v3.igdb.com/games/')->json();
        
        // dump($mostAnticipated);

        // $comigSoon = Http::withHeaders(config('services.igdb'))->withOptions([
        //     'body' => "
        //     fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary;
        //     where release_dates.platform = (48,49,6,130)
        //     & (first_release_date > {$current} 
        //     & popularity > 5);
        //     sort first_release_date asc;
        //     limit 4;
        //     "
        // ])->get('https://api-v3.igdb.com/games/')->json();
        
        // dump($comigSoon);

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
