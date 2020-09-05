<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Carbon\Carbon;

class ComingSoon extends Component
{
    public $comingSoon = [];

    public function loadComingSoon()
    {
        $current = Carbon::now()->timestamp;
        
        $this->comingSoon = Http::withHeaders(config('services.igdb'))->withOptions([
            'body' => "
            fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary;
            where release_dates.platform = (48,49,6,130)
            & (first_release_date > {$current} 
            & popularity > 5);
            sort first_release_date asc;
            limit 4;
            "
        ])->get('https://api-v3.igdb.com/games/')->json();        
    }

    public function render()
    {
        return view('livewire.coming-soon');
    }
}