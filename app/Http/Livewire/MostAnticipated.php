<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Carbon\ Carbon;
use Livewire\Component;

class MostAnticipated extends Component
{
    public $mostAnticipated = [];

    public function loadMoreAnticipated()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;

        $this->mostAnticipated = Http::withHeaders(config('services.igdb'))->withOptions([
            'body' => "
            fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary;
            where release_dates.platform = (48,49,6,130)
            & (first_release_date > {$before} 
            & first_release_date < {$afterFourMonths})
            & rating_count > 5;
            sort popularity desc;
            limit 4;
            "
        ])->get('https://api-v3.igdb.com/games/')->json();
    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
