<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Carbon\Carbon;

class RecentlyReviewed extends Component
{
    public $recentlyReviewed = [];

    public function loadRecentlyReviewed()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;

        $this->recentlyReviewed = Http::withHeaders(config('services.igdb'))->withOptions([
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
    }

    public function render()
    {
        return view('livewire.recently-reviewed');
    }
}
