<div wire:init="loadComingSoon" class="most-anticipated-container space-y-8 mt-8">
    @forelse($comingSoon as $game)
        <div class="game flex">
            <a href="#">
                @if (isset($game['cover_url']))
                    <img src="{{ $game['cover_url'] }}" alt="" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                @endif
            </a>
            <div class="ml-4">
                <a href="#" class="hover:text-gray-300">{{ $game['name'] }}</a>
                <p class="text-gray-400 text-sm mt-1">{{$game['first_release_date'] }}</p>
            </div>
        </div>
        @empty
        @foreach (range(1,4) as $game)
            <div class="game flex">
                <div class="w-12 h-16 bg-gray-700"></div>
                <div class="ml-4">
                    <div class="text-transparent bg-gray-600">Game title goes here</div>
                    <p class="text-transparent text-sm bg-gray-600 mt-2 inline-block">00/00/00</p>
                </div>
            </div>
        @endforeach
    @endforelse

</div> <!-- End coming-soon -->
