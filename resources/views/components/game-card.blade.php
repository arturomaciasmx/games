<div class="game mt-8 m-auto">
    <div class="relative inline-block">
        <a href="{{ route('games.show', $game['slug']) }}">
            @if (array_key_exists('cover', $game))
                <img src="{{ $game['cover_big'] }}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
            @endif
        </a>
        @if (isset($game['rating']))
            <div id="{{ $game['slug'] }}" class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full text-sm"  style="bottom: -20px; right:-20px;">
                    @push('scripts')
                        @include('partials._rating', [
                            'slug' => $game['slug'],
                            'rating' => $game['rating'],
                            'event' => null
                        ])
                    @endpush
                    {{-- {{ $game['rating'] }} --}}
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
