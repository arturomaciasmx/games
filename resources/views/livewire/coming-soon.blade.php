<div wire:init="loadComingSoon" class="most-anticipated-container space-y-8 mt-8">
    @forelse($comingSoon as $game)
        <x-game-card-small :game="$game" />
        @empty
        @foreach (range(1,4) as $game)
            <x-game-card-small-skaleton/>
        @endforeach
    @endforelse

</div> <!-- End coming-soon -->
