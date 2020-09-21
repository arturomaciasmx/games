<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;
use Carbon\Carbon;

class RecentlyReviewed extends Component
{
    public $recentlyReviewed = [];

    public function loadRecentlyReviewed()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;

        $gamesOriginal = Http::withHeaders(config('services.igdb'))->withOptions([
            'body' => "
            fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary;
            where release_dates.platform = (48,49,6,130)
            & (first_release_date > {$before} 
            & first_release_date < {$current})
            & rating_count > 5;
            sort popularity desc;
            limit 3;
            "
        ])->get('https://api-v3.igdb.com/games/')->json();
        
        // dd($this->formatGamesForView($gamesOriginal));

        $this->recentlyReviewed = $this->formatGamesForView($gamesOriginal);
    }


    public function render()
    {
        return view('livewire.recently-reviewed');
    }

    private function formatGamesForView($games)
    {
        return collect($games)->map(function($game){
            return collect($game)->merge([
                'cover_url' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating']) . '%' : null,
                'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', ')
            ]);
        })->toArray();
    }
}
