<div wire:init="loadRecentlyReviewed" class="recently-reviewed w-full lg:w-3/4 lg:mr-32">
    <h2 class="text-blue-500 uppercase tracking-width font-semibold">Recently Reviewed</h2>
    <div class="recently-reviewed-container space-y-12 mt-8">
        @forelse ($recentlyReviewed as $game)
            
        <div class="game bg-gray-800 rounded-lg flex p-6">
            <div class="relative flex-none">
                <a href="#">
                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                </a>
                @if (array_key_exists('rating', $game))
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"  style="bottom: -20px; right:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            {{ round($game['rating']) . '%' }}
                        </div>
                    </div>
                @endif
            </div>
            <div class="ml-12">
                <a href="#" class="text-lg font-semibold leading-tight hover:text-gray-400 mt-8">{{ $game['name'] }}</a>
                <p class="text-gray-400 mt-1">
                    @foreach ($game['platforms'] as $platform)
                        @if (array_key_exists('abbreviation', $platform))
                            {{ $platform['abbreviation'] }},
                        @endif
                    @endforeach    
                </p> 
                <p class="pt-4 hidden lg:block">{{ $game['summary'] }}</p>
            </div>
        </div>

        @empty
        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        @endforelse
        
    </div>
</div> <!-- End recently-reviewed -->