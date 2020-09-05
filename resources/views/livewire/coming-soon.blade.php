<div wire:init="loadComingSoon" class="most-anticipated-container space-y-8 mt-8">
    @forelse($comingSoon as $game)     
        <div class="game flex">
            <a href="#">
                @if (isset($game['cover']['url']))
                    <img src="{{ $game['cover']['url'] }}" alt="" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                @endif
            </a>
            <div class="ml-4">
                <a href="#" class="hover:text-gray-300">{{ $game['name'] }}</a>
                <p class="text-gray-400 text-sm mt-1">{{ Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}</p>
            </div>
        </div>
        @empty
        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
    @endforelse
    
</div> <!-- End coming-soon -->