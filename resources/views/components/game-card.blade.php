<div class="game mt-8 m-auto">
    <div class="relative inline-block">
        <a href="{{ route('games.show', $game['slug']) }}">
            @if (array_key_exists('cover', $game))
                <img src="{{ $game['cover_big'] }}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
            @endif
        </a>
        @if (isset($game['rating']))
            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"  style="bottom: -20px; right:-20px;">
                <div class="font-semibold text-xs flex justify-center items-center h-full">
                    {{ $game['rating'] }}
                </div>
            </div>
        @endif
    </div>
    <a href="" class="block text-base -font-semibold leading-tight hover:text-gray-400 mt-8">
        {{ $game['name'] }}
    </a>
    <div class="text-gray-400 mt-1">
        {{ $game['platforms'] }}
    </div>
</div>
