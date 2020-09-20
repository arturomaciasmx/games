<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class PopularGames extends Component
{
    public $popularGames = [];
    

    public function loadPopularGames() 
    {
        // Ver cache
        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;

        $this->popularGames = Http::withHeaders(config('services.igdb'))->withOptions([
            'body' => "
            fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, slug;
            where release_dates.platform = (48,49,6,130)
            & (first_release_date > {$before} 
            & first_release_date < {$after});
            sort popularity desc;
            limit 12;
            "
        ])->get('https://api-v3.igdb.com/games/')->json();
    }

    public function render()
    {
        return view('livewire.popular-games');
    }
}
