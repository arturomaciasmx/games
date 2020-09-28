<div wire:init="loadPopularGames" class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">

    @forelse ($popularGames as $game)

        <x-game-card :game="$game" />

    @empty

        @foreach (range(1, 12) as $game)
            <div class="game mt-8 m-auto">
                <div class="relative inline-block bg-gray-700 w-44 h-56"></div>
                <div class="block text-transparent bg-gray-600 font-semibold mt-4">
                    game title goes here
                </div>
                <div class="text-transparent mt-2 bg-gray-600 inline-block">
                PS4, PC, Switch, X-box
                </div>
            </div>
        @endforeach

    @endforelse

</div> <!-- End popular-games -->
