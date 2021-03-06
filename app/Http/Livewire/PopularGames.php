<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PopularGames extends Component
{
    public $popularGames = [];


    public function loadPopularGames()
    {
        // Ver cache
        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;

        $gamesOriginal = Http::withHeaders(config('services.igdb'))->withOptions([
            'body' => "
            fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, slug;
            where release_dates.platform = (48,49,6,130)
            & (first_release_date > {$before}
            & first_release_date < {$after});
            sort popularity desc;
            limit 12;
            "
        ])->get('https://api-v3.igdb.com/games/')->json();



        // dd($this->formatGamesForView($gamesOriginal));
        $this->popularGames = $this->formatGamesForView($gamesOriginal);

        collect($this->popularGames)->filter(function($game) {
            return $game['rating'];
        })->each(function($game){
            $this->emit('gameWithRatingAdded', [
                'slug' => $game['slug'],
                'rating' => $game['rating'] / 100
            ]);
        });
    }

    public function render()
    {
        return view('livewire.popular-games');
    }

    private function formatGamesForView($games)
    {
        return collect($games)->map(function($game) {
            return collect($game)->merge([
                'cover_big' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating']) : null,
                'platforms' => collect($game['platforms'])->pluck('abbreviation')->filter()->implode(', '),
            ]);
        })->toArray();
    }
}
